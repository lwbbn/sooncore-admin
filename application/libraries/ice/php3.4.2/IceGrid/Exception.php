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
// Generated from file `Exception.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//

require_once 'Ice/Identity.php';
require_once 'Ice/BuiltinSequences.php';

if(!class_exists('IceGrid_ApplicationNotExistException'))
{
    class IceGrid_ApplicationNotExistException extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceGrid::ApplicationNotExistException';
        }

        public function __toString()
        {
            global $IceGrid__t_ApplicationNotExistException;
            return IcePHP_stringifyException($this, $IceGrid__t_ApplicationNotExistException);
        }

        public $name;
    }

    $IceGrid__t_ApplicationNotExistException = IcePHP_defineException('::IceGrid::ApplicationNotExistException', 'IceGrid_ApplicationNotExistException', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ServerNotExistException'))
{
    class IceGrid_ServerNotExistException extends Ice_UserException
    {
        public function __construct($id='')
        {
            $this->id = $id;
        }

        public function ice_name()
        {
            return 'IceGrid::ServerNotExistException';
        }

        public function __toString()
        {
            global $IceGrid__t_ServerNotExistException;
            return IcePHP_stringifyException($this, $IceGrid__t_ServerNotExistException);
        }

        public $id;
    }

    $IceGrid__t_ServerNotExistException = IcePHP_defineException('::IceGrid::ServerNotExistException', 'IceGrid_ServerNotExistException', null, array(
        array('id', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ServerStartException'))
{
    class IceGrid_ServerStartException extends Ice_UserException
    {
        public function __construct($id='', $reason='')
        {
            $this->id = $id;
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::ServerStartException';
        }

        public function __toString()
        {
            global $IceGrid__t_ServerStartException;
            return IcePHP_stringifyException($this, $IceGrid__t_ServerStartException);
        }

        public $id;
        public $reason;
    }

    $IceGrid__t_ServerStartException = IcePHP_defineException('::IceGrid::ServerStartException', 'IceGrid_ServerStartException', null, array(
        array('id', $IcePHP__t_string),
    
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ServerStopException'))
{
    class IceGrid_ServerStopException extends Ice_UserException
    {
        public function __construct($id='', $reason='')
        {
            $this->id = $id;
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::ServerStopException';
        }

        public function __toString()
        {
            global $IceGrid__t_ServerStopException;
            return IcePHP_stringifyException($this, $IceGrid__t_ServerStopException);
        }

        public $id;
        public $reason;
    }

    $IceGrid__t_ServerStopException = IcePHP_defineException('::IceGrid::ServerStopException', 'IceGrid_ServerStopException', null, array(
        array('id', $IcePHP__t_string),
    
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_AdapterNotExistException'))
{
    class IceGrid_AdapterNotExistException extends Ice_UserException
    {
        public function __construct($id='')
        {
            $this->id = $id;
        }

        public function ice_name()
        {
            return 'IceGrid::AdapterNotExistException';
        }

        public function __toString()
        {
            global $IceGrid__t_AdapterNotExistException;
            return IcePHP_stringifyException($this, $IceGrid__t_AdapterNotExistException);
        }

        public $id;
    }

    $IceGrid__t_AdapterNotExistException = IcePHP_defineException('::IceGrid::AdapterNotExistException', 'IceGrid_AdapterNotExistException', null, array(
        array('id', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ObjectExistsException'))
{
    class IceGrid_ObjectExistsException extends Ice_UserException
    {
        public function __construct($id=null)
        {
            $this->id = is_null($id) ? new Ice_Identity : $id;
        }

        public function ice_name()
        {
            return 'IceGrid::ObjectExistsException';
        }

        public function __toString()
        {
            global $IceGrid__t_ObjectExistsException;
            return IcePHP_stringifyException($this, $IceGrid__t_ObjectExistsException);
        }

        public $id;
    }

    $IceGrid__t_ObjectExistsException = IcePHP_defineException('::IceGrid::ObjectExistsException', 'IceGrid_ObjectExistsException', null, array(
        array('id', $Ice__t_Identity)));
}

if(!class_exists('IceGrid_ObjectNotRegisteredException'))
{
    class IceGrid_ObjectNotRegisteredException extends Ice_UserException
    {
        public function __construct($id=null)
        {
            $this->id = is_null($id) ? new Ice_Identity : $id;
        }

        public function ice_name()
        {
            return 'IceGrid::ObjectNotRegisteredException';
        }

        public function __toString()
        {
            global $IceGrid__t_ObjectNotRegisteredException;
            return IcePHP_stringifyException($this, $IceGrid__t_ObjectNotRegisteredException);
        }

        public $id;
    }

    $IceGrid__t_ObjectNotRegisteredException = IcePHP_defineException('::IceGrid::ObjectNotRegisteredException', 'IceGrid_ObjectNotRegisteredException', null, array(
        array('id', $Ice__t_Identity)));
}

if(!class_exists('IceGrid_NodeNotExistException'))
{
    class IceGrid_NodeNotExistException extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceGrid::NodeNotExistException';
        }

        public function __toString()
        {
            global $IceGrid__t_NodeNotExistException;
            return IcePHP_stringifyException($this, $IceGrid__t_NodeNotExistException);
        }

        public $name;
    }

    $IceGrid__t_NodeNotExistException = IcePHP_defineException('::IceGrid::NodeNotExistException', 'IceGrid_NodeNotExistException', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_RegistryNotExistException'))
{
    class IceGrid_RegistryNotExistException extends Ice_UserException
    {
        public function __construct($name='')
        {
            $this->name = $name;
        }

        public function ice_name()
        {
            return 'IceGrid::RegistryNotExistException';
        }

        public function __toString()
        {
            global $IceGrid__t_RegistryNotExistException;
            return IcePHP_stringifyException($this, $IceGrid__t_RegistryNotExistException);
        }

        public $name;
    }

    $IceGrid__t_RegistryNotExistException = IcePHP_defineException('::IceGrid::RegistryNotExistException', 'IceGrid_RegistryNotExistException', null, array(
        array('name', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_DeploymentException'))
{
    class IceGrid_DeploymentException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::DeploymentException';
        }

        public function __toString()
        {
            global $IceGrid__t_DeploymentException;
            return IcePHP_stringifyException($this, $IceGrid__t_DeploymentException);
        }

        public $reason;
    }

    $IceGrid__t_DeploymentException = IcePHP_defineException('::IceGrid::DeploymentException', 'IceGrid_DeploymentException', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_NodeUnreachableException'))
{
    class IceGrid_NodeUnreachableException extends Ice_UserException
    {
        public function __construct($name='', $reason='')
        {
            $this->name = $name;
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::NodeUnreachableException';
        }

        public function __toString()
        {
            global $IceGrid__t_NodeUnreachableException;
            return IcePHP_stringifyException($this, $IceGrid__t_NodeUnreachableException);
        }

        public $name;
        public $reason;
    }

    $IceGrid__t_NodeUnreachableException = IcePHP_defineException('::IceGrid::NodeUnreachableException', 'IceGrid_NodeUnreachableException', null, array(
        array('name', $IcePHP__t_string),
    
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ServerUnreachableException'))
{
    class IceGrid_ServerUnreachableException extends Ice_UserException
    {
        public function __construct($name='', $reason='')
        {
            $this->name = $name;
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::ServerUnreachableException';
        }

        public function __toString()
        {
            global $IceGrid__t_ServerUnreachableException;
            return IcePHP_stringifyException($this, $IceGrid__t_ServerUnreachableException);
        }

        public $name;
        public $reason;
    }

    $IceGrid__t_ServerUnreachableException = IcePHP_defineException('::IceGrid::ServerUnreachableException', 'IceGrid_ServerUnreachableException', null, array(
        array('name', $IcePHP__t_string),
    
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_RegistryUnreachableException'))
{
    class IceGrid_RegistryUnreachableException extends Ice_UserException
    {
        public function __construct($name='', $reason='')
        {
            $this->name = $name;
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::RegistryUnreachableException';
        }

        public function __toString()
        {
            global $IceGrid__t_RegistryUnreachableException;
            return IcePHP_stringifyException($this, $IceGrid__t_RegistryUnreachableException);
        }

        public $name;
        public $reason;
    }

    $IceGrid__t_RegistryUnreachableException = IcePHP_defineException('::IceGrid::RegistryUnreachableException', 'IceGrid_RegistryUnreachableException', null, array(
        array('name', $IcePHP__t_string),
    
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_BadSignalException'))
{
    class IceGrid_BadSignalException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::BadSignalException';
        }

        public function __toString()
        {
            global $IceGrid__t_BadSignalException;
            return IcePHP_stringifyException($this, $IceGrid__t_BadSignalException);
        }

        public $reason;
    }

    $IceGrid__t_BadSignalException = IcePHP_defineException('::IceGrid::BadSignalException', 'IceGrid_BadSignalException', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_PatchException'))
{
    class IceGrid_PatchException extends Ice_UserException
    {
        public function __construct($reasons=null)
        {
            $this->reasons = $reasons;
        }

        public function ice_name()
        {
            return 'IceGrid::PatchException';
        }

        public function __toString()
        {
            global $IceGrid__t_PatchException;
            return IcePHP_stringifyException($this, $IceGrid__t_PatchException);
        }

        public $reasons;
    }

    $IceGrid__t_PatchException = IcePHP_defineException('::IceGrid::PatchException', 'IceGrid_PatchException', null, array(
        array('reasons', $Ice__t_StringSeq)));
}

if(!class_exists('IceGrid_AccessDeniedException'))
{
    class IceGrid_AccessDeniedException extends Ice_UserException
    {
        public function __construct($lockUserId='')
        {
            $this->lockUserId = $lockUserId;
        }

        public function ice_name()
        {
            return 'IceGrid::AccessDeniedException';
        }

        public function __toString()
        {
            global $IceGrid__t_AccessDeniedException;
            return IcePHP_stringifyException($this, $IceGrid__t_AccessDeniedException);
        }

        public $lockUserId;
    }

    $IceGrid__t_AccessDeniedException = IcePHP_defineException('::IceGrid::AccessDeniedException', 'IceGrid_AccessDeniedException', null, array(
        array('lockUserId', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_AllocationException'))
{
    class IceGrid_AllocationException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::AllocationException';
        }

        public function __toString()
        {
            global $IceGrid__t_AllocationException;
            return IcePHP_stringifyException($this, $IceGrid__t_AllocationException);
        }

        public $reason;
    }

    $IceGrid__t_AllocationException = IcePHP_defineException('::IceGrid::AllocationException', 'IceGrid_AllocationException', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_AllocationTimeoutException'))
{
    class IceGrid_AllocationTimeoutException extends IceGrid_AllocationException
    {
        public function __construct($reason='')
        {
            parent::__construct($reason);
        }

        public function ice_name()
        {
            return 'IceGrid::AllocationTimeoutException';
        }

        public function __toString()
        {
            global $IceGrid__t_AllocationTimeoutException;
            return IcePHP_stringifyException($this, $IceGrid__t_AllocationTimeoutException);
        }
    }

    $IceGrid__t_AllocationTimeoutException = IcePHP_defineException('::IceGrid::AllocationTimeoutException', 'IceGrid_AllocationTimeoutException', $IceGrid__t_AllocationException, null);
}

if(!class_exists('IceGrid_PermissionDeniedException'))
{
    class IceGrid_PermissionDeniedException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::PermissionDeniedException';
        }

        public function __toString()
        {
            global $IceGrid__t_PermissionDeniedException;
            return IcePHP_stringifyException($this, $IceGrid__t_PermissionDeniedException);
        }

        public $reason;
    }

    $IceGrid__t_PermissionDeniedException = IcePHP_defineException('::IceGrid::PermissionDeniedException', 'IceGrid_PermissionDeniedException', null, array(
        array('reason', $IcePHP__t_string)));
}

if(!class_exists('IceGrid_ObserverAlreadyRegisteredException'))
{
    class IceGrid_ObserverAlreadyRegisteredException extends Ice_UserException
    {
        public function __construct($id=null)
        {
            $this->id = is_null($id) ? new Ice_Identity : $id;
        }

        public function ice_name()
        {
            return 'IceGrid::ObserverAlreadyRegisteredException';
        }

        public function __toString()
        {
            global $IceGrid__t_ObserverAlreadyRegisteredException;
            return IcePHP_stringifyException($this, $IceGrid__t_ObserverAlreadyRegisteredException);
        }

        public $id;
    }

    $IceGrid__t_ObserverAlreadyRegisteredException = IcePHP_defineException('::IceGrid::ObserverAlreadyRegisteredException', 'IceGrid_ObserverAlreadyRegisteredException', null, array(
        array('id', $Ice__t_Identity)));
}

if(!class_exists('IceGrid_FileNotAvailableException'))
{
    class IceGrid_FileNotAvailableException extends Ice_UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_name()
        {
            return 'IceGrid::FileNotAvailableException';
        }

        public function __toString()
        {
            global $IceGrid__t_FileNotAvailableException;
            return IcePHP_stringifyException($this, $IceGrid__t_FileNotAvailableException);
        }

        public $reason;
    }

    $IceGrid__t_FileNotAvailableException = IcePHP_defineException('::IceGrid::FileNotAvailableException', 'IceGrid_FileNotAvailableException', null, array(
        array('reason', $IcePHP__t_string)));
}
?>