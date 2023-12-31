<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use UnexpectedValueException;

/**
 * Protobuf type <code>intermediarioSharedMessages.ConnectLogType</code>
 */
class ConnectLogType
{
    /**
     * Generated from protobuf enum <code>CONNECT_LOG_TYPE_INFO = 0;</code>
     */
    const CONNECT_LOG_TYPE_INFO = 0;
    /**
     * Generated from protobuf enum <code>CONNECT_LOG_TYPE_WARNING = 1;</code>
     */
    const CONNECT_LOG_TYPE_WARNING = 1;
    /**
     * Generated from protobuf enum <code>CONNECT_LOG_TYPE_ERROR = 2;</code>
     */
    const CONNECT_LOG_TYPE_ERROR = 2;

    private static $valueToName = [
        self::CONNECT_LOG_TYPE_INFO => 'CONNECT_LOG_TYPE_INFO',
        self::CONNECT_LOG_TYPE_WARNING => 'CONNECT_LOG_TYPE_WARNING',
        self::CONNECT_LOG_TYPE_ERROR => 'CONNECT_LOG_TYPE_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

