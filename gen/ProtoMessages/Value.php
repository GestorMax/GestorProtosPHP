<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ProtoMessages/Common.proto

namespace ProtoMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protoMessages.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $int32Value
     *     @type float $floatValue
     *     @type float $doubleValue
     *     @type bool $boolValue
     *     @type string $stringValue
     *     @type \Google\Protobuf\Timestamp $timestampValue
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtoMessages\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 int32Value = 1;</code>
     * @return int
     */
    public function getInt32Value()
    {
        return $this->readOneof(1);
    }

    public function hasInt32Value()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>int32 int32Value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInt32Value($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>float floatValue = 2;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(2);
    }

    public function hasFloatValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>float floatValue = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>double doubleValue = 3;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(3);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>double doubleValue = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool boolValue = 4;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(4);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>bool boolValue = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stringValue = 5;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(5);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>string stringValue = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestampValue = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestampValue()
    {
        return $this->readOneof(6);
    }

    public function hasTimestampValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestampValue = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

