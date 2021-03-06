<?php
// **********************************************************************
//
// Copyright (c) 2003-2011 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.4.2
//
// <auto-generated>
//
// Generated from file `IceStorm.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//

require_once 'Ice/SliceChecksumDict.php';

if(!isset($IceStorm__t_Topic))
{
    $IceStorm__t_Topic = IcePHP_declareClass('::IceStorm::Topic');
    $IceStorm__t_TopicPrx = IcePHP_defineProxy($IceStorm__t_Topic);
}

if(!class_exists('IceStorm_LinkInfo'))
{
    class IceStorm_LinkInfo
    {
        public function __construct($theTopic=null, $name='', $cost=0)
        {
            $this->theTopic = $theTopic;
            $this->name = $name;
            $this->cost = $cost;
        }

        public function __toString()
        {
            global $IceStorm__t_LinkInfo;
            return IcePHP_stringify($this, $IceStorm__t_LinkInfo);
        }

        public $theTopic;
        public $name;
        public $cost;
    }

    $IceStorm__t_LinkInfo = IcePHP_defineStruct('::IceStorm::LinkInfo', 'IceStorm_LinkInfo', array(
        array('theTopic', $IceStorm__t_TopicPrx), 
        array('name', $IcePHP__t_string), 
        array('cost', $IcePHP__t_int)));
}

if(!isset($IceStorm__t_LinkInfoSeq))
{
    $IceStorm__t_LinkInfoSeq = IcePHP_defineSequence('::IceStorm::LinkInfoSeq', $IceStorm__t_LinkInfo);
}

if(!isset($IceStorm__t_QoS))
{
    $IceStorm__t_QoS = IcePHP_defineDictionary('::IceStorm::QoS', $IcePHP__t_string, $IcePHP__t_string);
}

if(!class_exists('IceStorm_LinkExists'))
{
    class IceStorm_LinkExists extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceStorm::LinkExists';
        }

        public function __toString()
        {
            global $IceStorm__t_LinkExists;
            return IcePHP_stringifyException($this, $IceStorm__t_LinkExists);
        }

        public $name;
    }

    $IceStorm__t_LinkExists = IcePHP_defineException('::IceStorm::LinkExists', 'IceStorm_LinkExists', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceStorm_NoSuchLink'))
{
    class IceStorm_NoSuchLink extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceStorm::NoSuchLink';
        }

        public function __toString()
        {
            global $IceStorm__t_NoSuchLink;
            return IcePHP_stringifyException($this, $IceStorm__t_NoSuchLink);
        }

        public $name;
    }

    $IceStorm__t_NoSuchLink = IcePHP_defineException('::IceStorm::NoSuchLink', 'IceStorm_NoSuchLink', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceStorm_AlreadySubscribed'))
{
    class IceStorm_AlreadySubscribed extends Ice_UserException
    {
        public function __construct()
        {
        }

        public function ice_name()
        {
            return 'IceStorm::AlreadySubscribed';
        }

        public function __toString()
        {
            global $IceStorm__t_AlreadySubscribed;
            return IcePHP_stringifyException($this, $IceStorm__t_AlreadySubscribed);
        }
    }

    $IceStorm__t_AlreadySubscribed = IcePHP_defineException('::IceStorm::AlreadySubscribed', 'IceStorm_AlreadySubscribed', null, null);
}

if(!class_exists('IceStorm_BadQoS'))
{
    class IceStorm_BadQoS extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceStorm::BadQoS';
        }

        public function __toString()
        {
            global $IceStorm__t_BadQoS;
            return IcePHP_stringifyException($this, $IceStorm__t_BadQoS);
        }

        public $reason;
    }

    $IceStorm__t_BadQoS = IcePHP_defineException('::IceStorm::BadQoS', 'IceStorm_BadQoS', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!interface_exists('IceStorm_Topic'))
{
    interface IceStorm_Topic
    {
        public function getName();
        public function getPublisher();
        public function getNonReplicatedPublisher();
        public function subscribe($theQoS, $subscriber);
        public function subscribeAndGetPublisher($theQoS, $subscriber);
        public function unsubscribe($subscriber);
        public function link($linkTo, $cost);
        public function unlink($linkTo);
        public function getLinkInfoSeq();
        public function destroy();
    }

    class IceStorm_TopicPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::IceStorm::Topic', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceStorm::Topic', $facet);
        }
    }

    $IceStorm__t_Topic = IcePHP_defineClass('::IceStorm::Topic', 'IceStorm_Topic', true, $Ice__t_Object, null, null);

    $IceStorm__t_TopicPrx = IcePHP_defineProxy($IceStorm__t_Topic);

    IcePHP_defineOperation($IceStorm__t_Topic, 'getName', 2, 1, null, null, $IcePHP__t_string, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'getPublisher', 2, 1, null, null, $Ice__t_ObjectPrx, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'getNonReplicatedPublisher', 2, 1, null, null, $Ice__t_ObjectPrx, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'subscribe', 0, 0, array($IceStorm__t_QoS, $Ice__t_ObjectPrx), null, null, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'subscribeAndGetPublisher', 0, 0, array($IceStorm__t_QoS, $Ice__t_ObjectPrx), null, $Ice__t_ObjectPrx, array($IceStorm__t_AlreadySubscribed, $IceStorm__t_BadQoS));
    IcePHP_defineOperation($IceStorm__t_Topic, 'unsubscribe', 2, 2, array($Ice__t_ObjectPrx), null, null, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'link', 0, 0, array($IceStorm__t_TopicPrx, $IcePHP__t_int), null, null, array($IceStorm__t_LinkExists));
    IcePHP_defineOperation($IceStorm__t_Topic, 'unlink', 0, 0, array($IceStorm__t_TopicPrx), null, null, array($IceStorm__t_NoSuchLink));
    IcePHP_defineOperation($IceStorm__t_Topic, 'getLinkInfoSeq', 2, 1, null, null, $IceStorm__t_LinkInfoSeq, null);
    IcePHP_defineOperation($IceStorm__t_Topic, 'destroy', 0, 0, null, null, null, null);
}

if(!isset($IceStorm__t_TopicDict))
{
    $IceStorm__t_TopicDict = IcePHP_defineDictionary('::IceStorm::TopicDict', $IcePHP__t_string, $IceStorm__t_TopicPrx);
}

if(!class_exists('IceStorm_TopicExists'))
{
    class IceStorm_TopicExists extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceStorm::TopicExists';
        }

        public function __toString()
        {
            global $IceStorm__t_TopicExists;
            return IcePHP_stringifyException($this, $IceStorm__t_TopicExists);
        }

        public $name;
    }

    $IceStorm__t_TopicExists = IcePHP_defineException('::IceStorm::TopicExists', 'IceStorm_TopicExists', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceStorm_NoSuchTopic'))
{
    class IceStorm_NoSuchTopic extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceStorm::NoSuchTopic';
        }

        public function __toString()
        {
            global $IceStorm__t_NoSuchTopic;
            return IcePHP_stringifyException($this, $IceStorm__t_NoSuchTopic);
        }

        public $name;
    }

    $IceStorm__t_NoSuchTopic = IcePHP_defineException('::IceStorm::NoSuchTopic', 'IceStorm_NoSuchTopic', null, array(
        array('name', $IcePHP__t_string)));
}

if(!interface_exists('IceStorm_TopicManager'))
{
    interface IceStorm_TopicManager
    {
        public function create($name);
        public function retrieve($name);
        public function retrieveAll();
        public function getSliceChecksums();
    }

    class IceStorm_TopicManagerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::IceStorm::TopicManager', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceStorm::TopicManager', $facet);
        }
    }

    $IceStorm__t_TopicManager = IcePHP_defineClass('::IceStorm::TopicManager', 'IceStorm_TopicManager', true, $Ice__t_Object, null, null);

    $IceStorm__t_TopicManagerPrx = IcePHP_defineProxy($IceStorm__t_TopicManager);

    IcePHP_defineOperation($IceStorm__t_TopicManager, 'create', 0, 0, array($IcePHP__t_string), null, $IceStorm__t_TopicPrx, array($IceStorm__t_TopicExists));
    IcePHP_defineOperation($IceStorm__t_TopicManager, 'retrieve', 2, 1, array($IcePHP__t_string), null, $IceStorm__t_TopicPrx, array($IceStorm__t_NoSuchTopic));
    IcePHP_defineOperation($IceStorm__t_TopicManager, 'retrieveAll', 2, 1, null, null, $IceStorm__t_TopicDict, null);
    IcePHP_defineOperation($IceStorm__t_TopicManager, 'getSliceChecksums', 2, 1, null, null, $Ice__t_SliceChecksumDict, null);
}
?>
