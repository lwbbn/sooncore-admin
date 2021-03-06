<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 账号、权限变更后，向boss上传数据接口
 * @file AccountUploadInterface.php
 * @author caohongliang <hongliang.cao@quanshi.com>
 * @copyright Copyright (c) UC
 * @version: v1.0
 */

abstract class AccountUploadInterface{
	
	public function __construct(){
		$this->ci = & get_instance();
		$this->ci->load->model('account_model');
		$this->ci->load->library('BossLib', '', 'boss');
		$this->ci->load->library('UmsLib', '', 'ums');
		$this->ci->load->model('power_model');
	}
	
	/**
	 * 针对不同的操作类型，进行处理
	 * @param int $value 操作类型
	 */
	abstract public function process($value);
	
	/**
	 * 参数校验
	 * @param array $required 必选的参数
	 * @param array $optional 可选的参数
	 * @return array 可选和不为空的必选所对应的值
	 */
	public function checkParam($value, $required, $optional=array()){
		$all_keys 		= array_merge($required, $optional);
		$invalid_keys 	= array();
		$return 		= array();
		
		foreach($all_keys as $key){
			if( !isset($value[$key]) || is_empty($value[$key]) ){
				if(in_array($key, $required)){
					$invalid_keys[] = $key;
				}
				continue;
			}
			$return[$key] = $value[$key];
		}
		
		if(!empty($invalid_keys)){
			return array(false, 'The keys-->'.var_export($invalid_keys, true).' is required!');
		}
		
		return array(true, $return);
		
	}
	
	/**
	 * 权限变更。站点权限变更和组织权限变更公用方法
	 * @param string $customer_code
	 * @param int $site_id
	 * @param int $org_id
	 * @throws Exception
	 */
	public function powerChange($customer_code, $site_id, $org_id, $templateUUID=''){
		//遍历该组织下所有的组织以及用户(过滤掉已经自定义了权限的组织或者用户)
		//如果某个组织自定义了权限，则他的所有子组织或者子用户，都不再进行权限变更
		
		//--获取所有子组织的id
		$sub_org_ids = $this->_getSubOrgIds($org_id);
		
		/*
		if( ! $sub_org_ids ){
			throw new Exception('Get sub orgs from ums failed');
		}
		*/
		
		//--获取定义过权限的子组织
		$powered_sub_org_ids = array_filter($sub_org_ids, array($this->ci->account_model, 'hasOrgPower'));
		
		//--过滤掉定义过权限的子组织，或者父级定义过权限的子组织
		/**
		 * 这里的算法设计是：
		 * 如果子组织的nodeCode中任何一个节点已经定义过权限，则这个组织就被认为被"个性化"过
		 * 如：nodeCode：-9-4-8这个组织的id为8，则如果组织9、4、8任何一个定义过权限，则组织8被认为是"个性化"过
		 * 下面使用了交集的方法，来实现这个算法
		 * 
		 */
		foreach($sub_org_ids as $nodeCode=>$id){
			$intersect = array_intersect($powered_sub_org_ids, explode('-',$nodeCode));
			if(count($intersect) > 0){
				unset($sub_org_ids[$nodeCode]);//将被个性化过的组织过滤掉
			}
		}
		
		//--与当前的组织合并，即为全部组织
		$org_ids 	= 	array_merge($sub_org_ids, (array)$org_id);;
		
		//--获取上一织和当前组织下的所有用户
		$user_ids = array();
		foreach($org_ids as $org_id){
			$tmp_users = $this->ci->ums->getOrganizationUsers($org_id);
			if(!$tmp_users){
				//log_message('error', 'get org users from ums failed or there is no user in this org, org id is-->'.$org_id);
				continue;
			}
				
			$tmp_user_ids = array_column($tmp_users, 'id');
				
			$user_ids = array_merge($user_ids, $tmp_user_ids);
		}
		
		//--过滤掉定义过权限的用户
		$powered_user_ids = array_filter($user_ids, array($this->ci->account_model, 'hasUserPower'));
		$user_ids 		  = array_diff($user_ids, $powered_user_ids);
		if(empty($user_ids)){
			log_message('info','there is no users to update!');
			return;
		}
		
		//组织Boss数据，发送boss请求
		$this->sendBossRequest($customer_code, $site_id, $user_ids, 'update', $templateUUID);
		
		return;
		/*
		//组织boss数据
		$boss_request = array();
		
		//--获取当前组织的templateUUID
		if(empty($templateUUID)){
			$org_info = $this->ci->ums->getOrganizationById($org_id);
			if(!$org_info || !isset($org_info['nodeCode'])){
				throw new Exception("get org {$org_id} info from ums failed");
			}
			$templateUUID = $org_info['nodeCode'];
		}
		$boss_request['templateUUID'] 				= $templateUUID;
		
		$boss_request['callback']     				= BOSS_CALLBACK;
		$boss_request['type']		  				= 'update';
		$boss_request['customer']['customerCode'] 	= $customer_code;
		
		//--从本地数据库里获取合同id
		$contract_id = $this->ci->account_model->getContractId($customer_code, $site_id);
		if(!$contract_id){throw new Exception('Get contract id from local db failed.');}
		$boss_request['customer']['contract']['id'] = $contract_id;
		
		//分批发送请求
		$chunks = array_chunk($user_ids, BATCH_MAX_CHUNKSIZE);
		foreach($chunks as $ids){
			//--组织boss请求的users参数
			$boss_request['customer']['users'] = $this->_getBossUserParam($ids);
				
			//--本地记录request请求
			$request_with_id    = $this->ci->account_model->saveRequestInfo($boss_request);
			if( ! $request_with_id){
				log_message('error', 'save request to local db failed');
				continue;
			}
			//--调用boss开通接口
			log_message('info', 'send a boss requset');
			$boss_rst = $this->ci->boss->account($request_with_id);
			if( ! $boss_rst){
				log_message('error','send users info to boss failed');
				continue;
			}
		}
		
		return;
		*/
	}	
	
	/**
	 * 向boss发送开通请求，适用于站点、组织、单用户权限变更，以及批量帐号的禁用、删除、启用
	 * @param string $customer_code 	客户编码
	 * @param int    $site_id			站点ID
	 * @param int    $org_id			组织ID
	 * @param array  $user_ids			操作的用户ID
	 * @param string $type				操作类型update|disable|delete|enable
	 * @param string $templateUUID  	templateUUID 可选
	 * @param string $sellingProducts	销售品属性
	 * @throws Exception
	 */
	public function sendBossRequest($customer_code, $site_id, $user_ids, $type, $templateUUID=NULL, $sellingProducts=NULL){
		//组织boss数据
		$boss_request = array();
		
		//--templateUUID
		if(!is_null($templateUUID)){
			$boss_request['templateUUID'] = $templateUUID;
		}
		
		//--callback地址
		$boss_request['callback']     				= BOSS_CALLBACK;
		
		//--操作类型
		$boss_request['type']		  				= $type;
		
		//--客户编码
		$boss_request['customer']['customerCode'] 	= $customer_code;
		
		//--从本地数据库里获取合同id
		$contract_id = $this->ci->account_model->getContractId($customer_code, $site_id);
		if(!$contract_id){throw new Exception('Get contract id from local db failed.');}
		$boss_request['customer']['contract']['id'] = $contract_id;
		
		//分批发送请求
		$chunks = array_chunk($user_ids, BATCH_MAX_CHUNKSIZE);
		foreach($chunks as $ids){
			//--组织boss请求的users参数
			$boss_request['customer']['users'] = $this->_getBossUserParam($ids, $sellingProducts);
		
			//--本地记录request请求
			$request_with_id    = $this->ci->account_model->saveRequestInfo($boss_request);
			if( ! $request_with_id){
				log_message('error', 'save request to local db failed');
				continue;
			}
			//--调用boss开通接口
			log_message('info', 'send a boss request');
			$boss_rst = $this->ci->boss->combinedAccount($request_with_id);
			if( ! $boss_rst){
				log_message('error','send users info to boss failed');
				continue;
			}
			log_message('info', 'send a boss request finished!');
		}
		
		return;
	}
	
	public function _getBossUserParam($user_ids, $sellingProducts=NULL){
		$rst = array();
		foreach($user_ids as $user_id){
			$user = array();
				
			//获取分账id
			$account_id = $this->ci->account_model->getUserAccountId($user_id);
			if(!$account_id) {
				log_message('error', 'get account id for user['.$user_id.'] from local failed');
				continue;
			}
			$user['accountId'] 	= $account_id;
				
			$user['id'] 		= $user_id;
			
			if(!is_null($sellingProducts)){
				$user['sellingProducts'] = $sellingProducts;
			}
				
			$rst[] = $user;
		}
	
		return $rst;
	
	}
	
	/**
	 * 获取所有自组织的id,键值为nodeCode
	 * @param int $org_id
	 * @return array
	 */
	public function _getSubOrgIds($org_id){
		$sub_orgs = $this->ci->ums->getOrganization($org_id, 'subtree');
		if(!$sub_orgs){
			return array();
		}
		
		return array_column($sub_orgs, 'id', 'nodeCode');
	}
		
}
