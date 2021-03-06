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
// Generated from file `Session.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//

require_once 'Ice/BuiltinSequences.php';
require_once 'Ice/Identity.php';
require_once 'Glacier2/SSLInfo.php';

if(!class_exists('Glacier2_CannotCreateSessionException'))
{
    class Glacier2_CannotCreateSessionException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'Glacier2::CannotCreateSessionException';
        }

        public function __toString()
        {
            global $Glacier2__t_CannotCreateSessionException;
            return IcePHP_stringifyException($this, $Glacier2__t_CannotCreateSessionException);
        }

        public $reason;
    }

    $Glacier2__t_CannotCreateSessionException = IcePHP_defineException('::Glacier2::CannotCreateSessionException', 'Glacier2_CannotCreateSessionException', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!interface_exists('Glacier2_Session'))
{
    interface Glacier2_Session
    {
        public function destroy();
    }

    class Glacier2_SessionPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::Session', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::Session', $facet);
        }
    }

    $Glacier2__t_Session = IcePHP_defineClass('::Glacier2::Session', 'Glacier2_Session', true, $Ice__t_Object, null, null);

    $Glacier2__t_SessionPrx = IcePHP_defineProxy($Glacier2__t_Session);

    IcePHP_defineOperation($Glacier2__t_Session, 'destroy', 0, 0, null, null, null, null);
}

if(!interface_exists('Glacier2_StringSet'))
{
    interface Glacier2_StringSet
    {
        public function add($additions);
        public function remove($deletions);
        public function get();
    }

    class Glacier2_StringSetPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::StringSet', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::StringSet', $facet);
        }
    }

    $Glacier2__t_StringSet = IcePHP_defineClass('::Glacier2::StringSet', 'Glacier2_StringSet', true, $Ice__t_Object, null, null);

    $Glacier2__t_StringSetPrx = IcePHP_defineProxy($Glacier2__t_StringSet);

    IcePHP_defineOperation($Glacier2__t_StringSet, 'add', 2, 2, array($Ice__t_StringSeq), null, null, null);
    IcePHP_defineOperation($Glacier2__t_StringSet, 'remove', 2, 2, array($Ice__t_StringSeq), null, null, null);
    IcePHP_defineOperation($Glacier2__t_StringSet, 'get', 2, 2, null, null, $Ice__t_StringSeq, null);
}

if(!interface_exists('Glacier2_IdentitySet'))
{
    interface Glacier2_IdentitySet
    {
        public function add($additions);
        public function remove($deletions);
        public function get();
    }

    class Glacier2_IdentitySetPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::IdentitySet', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::IdentitySet', $facet);
        }
    }

    $Glacier2__t_IdentitySet = IcePHP_defineClass('::Glacier2::IdentitySet', 'Glacier2_IdentitySet', true, $Ice__t_Object, null, null);

    $Glacier2__t_IdentitySetPrx = IcePHP_defineProxy($Glacier2__t_IdentitySet);

    IcePHP_defineOperation($Glacier2__t_IdentitySet, 'add', 2, 2, array($Ice__t_IdentitySeq), null, null, null);
    IcePHP_defineOperation($Glacier2__t_IdentitySet, 'remove', 2, 2, array($Ice__t_IdentitySeq), null, null, null);
    IcePHP_defineOperation($Glacier2__t_IdentitySet, 'get', 2, 2, null, null, $Ice__t_IdentitySeq, null);
}

if(!interface_exists('Glacier2_SessionControl'))
{
    interface Glacier2_SessionControl
    {
        public function categories();
        public function adapterIds();
        public function identities();
        public function getSessionTimeout();
        public function destroy();
    }

    class Glacier2_SessionControlPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::SessionControl', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::SessionControl', $facet);
        }
    }

    $Glacier2__t_SessionControl = IcePHP_defineClass('::Glacier2::SessionControl', 'Glacier2_SessionControl', true, $Ice__t_Object, null, null);

    $Glacier2__t_SessionControlPrx = IcePHP_defineProxy($Glacier2__t_SessionControl);

    IcePHP_defineOperation($Glacier2__t_SessionControl, 'categories', 0, 0, null, null, $Glacier2__t_StringSetPrx, null);
    IcePHP_defineOperation($Glacier2__t_SessionControl, 'adapterIds', 0, 0, null, null, $Glacier2__t_StringSetPrx, null);
    IcePHP_defineOperation($Glacier2__t_SessionControl, 'identities', 0, 0, null, null, $Glacier2__t_IdentitySetPrx, null);
    IcePHP_defineOperation($Glacier2__t_SessionControl, 'getSessionTimeout', 2, 2, null, null, $IcePHP__t_int, null);
    IcePHP_defineOperation($Glacier2__t_SessionControl, 'destroy', 0, 0, null, null, null, null);
}

if(!interface_exists('Glacier2_SessionManager'))
{
    interface Glacier2_SessionManager
    {
        public function create($userId, $control);
    }

    class Glacier2_SessionManagerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::SessionManager', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::SessionManager', $facet);
        }
    }

    $Glacier2__t_SessionManager = IcePHP_defineClass('::Glacier2::SessionManager', 'Glacier2_SessionManager', true, $Ice__t_Object, null, null);

    $Glacier2__t_SessionManagerPrx = IcePHP_defineProxy($Glacier2__t_SessionManager);

    IcePHP_defineOperation($Glacier2__t_SessionManager, 'create', 0, 0, array($IcePHP__t_string, $Glacier2__t_SessionControlPrx), null, $Glacier2__t_SessionPrx, array($Glacier2__t_CannotCreateSessionException));
}

if(!interface_exists('Glacier2_SSLSessionManager'))
{
    interface Glacier2_SSLSessionManager
    {
        public function create($info, $control);
    }

    class Glacier2_SSLSessionManagerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
        {
            return $proxy->ice_checkedCast('::Glacier2::SSLSessionManager', $facetOrCtx, $ctx);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Glacier2::SSLSessionManager', $facet);
        }
    }

    $Glacier2__t_SSLSessionManager = IcePHP_defineClass('::Glacier2::SSLSessionManager', 'Glacier2_SSLSessionManager', true, $Ice__t_Object, null, null);

    $Glacier2__t_SSLSessionManagerPrx = IcePHP_defineProxy($Glacier2__t_SSLSessionManager);

    IcePHP_defineOperation($Glacier2__t_SSLSessionManager, 'create', 0, 0, array($Glacier2__t_SSLInfo, $Glacier2__t_SessionControlPrx), null, $Glacier2__t_SessionPrx, array($Glacier2__t_CannotCreateSessionException));
}
?>
