<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ProtoMessages/Common.proto

namespace ProtoMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protoMessages.DoubleMessage</code>
 */
class DoubleMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double value = 1;</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtoMessages\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>double value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

