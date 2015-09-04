<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['template_dir'] = APPPATH.'views';
$config['compile_dir']  = APPPATH.'templates_c';
$config['cache_dir']    = APPPATH.'cache';
$config['config_dir'] = APPPATH.'config';
$config['caching']      = false;//是否开启cache
$config['lefttime']     = 3600;
$config['left_delimiter'] = '{';//smarty默认为{
$config['right_delimiter'] = '}';//smarty默认为}
