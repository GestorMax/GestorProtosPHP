<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ProtoMessages/Common.proto

namespace ProtoMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protoMessages.ValueMessage</code>
 */
class ValueMessage extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $int32Value
     *     @type \ProtoMessages\Int32Message $int32MessageValue
     *     @type int|string $int64Value
     *     @type \ProtoMessages\Int64Message $int64MessageValue
     *     @type int|string $uint64Value
     *     @type \ProtoMessages\UInt64Message $uint64MessageValue
     *     @type float $floatValue
     *     @type \ProtoMessages\FloatMessage $floatMessageValue
     *     @type float $doubleValue
     *     @type \ProtoMessages\DoubleMessage $doubleMessageValue
     *     @type \ProtoMessages\DecimalMessage $decimalMessageValue
     *     @type bool $boolValue
     *     @type \ProtoMessages\BoolMessage $boolMessageValue
     *     @type string $stringValue
     *     @type \ProtoMessages\StringMessage $stringMessageValue
     *     @type \Google\Protobuf\Timestamp $timestampMessage
     *     @type string $bytesValue
     *     @type \ProtoMessages\ValueMessageList $listValue
     *     @type \ProtoMessages\StructMessage $structMessage
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
     * Generated from protobuf field <code>.protoMessages.Int32Message int32MessageValue = 2;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getInt32MessageValue()
    {
        return $this->readOneof(2);
    }

    public function hasInt32MessageValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message int32MessageValue = 2;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setInt32MessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 int64Value = 3;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(3);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>int64 int64Value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message int64MessageValue = 4;</code>
     * @return \ProtoMessages\Int64Message|null
     */
    public function getInt64MessageValue()
    {
        return $this->readOneof(4);
    }

    public function hasInt64MessageValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message int64MessageValue = 4;</code>
     * @param \ProtoMessages\Int64Message $var
     * @return $this
     */
    public function setInt64MessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int64Message::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 uint64Value = 5;</code>
     * @return int|string
     */
    public function getUint64Value()
    {
        return $this->readOneof(5);
    }

    public function hasUint64Value()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>uint64 uint64Value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUint64Value($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.UInt64Message uint64MessageValue = 6;</code>
     * @return \ProtoMessages\UInt64Message|null
     */
    public function getUint64MessageValue()
    {
        return $this->readOneof(6);
    }

    public function hasUint64MessageValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.UInt64Message uint64MessageValue = 6;</code>
     * @param \ProtoMessages\UInt64Message $var
     * @return $this
     */
    public function setUint64MessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\UInt64Message::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>float floatValue = 7;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(7);
    }

    public function hasFloatValue()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>float floatValue = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.FloatMessage floatMessageValue = 8;</code>
     * @return \ProtoMessages\FloatMessage|null
     */
    public function getFloatMessageValue()
    {
        return $this->readOneof(8);
    }

    public function hasFloatMessageValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.FloatMessage floatMessageValue = 8;</code>
     * @param \ProtoMessages\FloatMessage $var
     * @return $this
     */
    public function setFloatMessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\FloatMessage::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>double doubleValue = 9;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(9);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>double doubleValue = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage doubleMessageValue = 10;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getDoubleMessageValue()
    {
        return $this->readOneof(10);
    }

    public function hasDoubleMessageValue()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage doubleMessageValue = 10;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setDoubleMessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage decimalMessageValue = 11;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getDecimalMessageValue()
    {
        return $this->readOneof(11);
    }

    public function hasDecimalMessageValue()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage decimalMessageValue = 11;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setDecimalMessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool boolValue = 12;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(12);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>bool boolValue = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.BoolMessage boolMessageValue = 13;</code>
     * @return \ProtoMessages\BoolMessage|null
     */
    public function getBoolMessageValue()
    {
        return $this->readOneof(13);
    }

    public function hasBoolMessageValue()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.BoolMessage boolMessageValue = 13;</code>
     * @param \ProtoMessages\BoolMessage $var
     * @return $this
     */
    public function setBoolMessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\BoolMessage::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stringValue = 14;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(14);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>string stringValue = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage stringMessageValue = 15;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getStringMessageValue()
    {
        return $this->readOneof(15);
    }

    public function hasStringMessageValue()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage stringMessageValue = 15;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setStringMessageValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestampMessage = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestampMessage()
    {
        return $this->readOneof(16);
    }

    public function hasTimestampMessage()
    {
        return $this->hasOneof(16);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestampMessage = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes bytesValue = 17;</code>
     * @return string
     */
    public function getBytesValue()
    {
        return $this->readOneof(17);
    }

    public function hasBytesValue()
    {
        return $this->hasOneof(17);
    }

    /**
     * Generated from protobuf field <code>bytes bytesValue = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.ValueMessageList listValue = 18;</code>
     * @return \ProtoMessages\ValueMessageList|null
     */
    public function getListValue()
    {
        return $this->readOneof(18);
    }

    public function hasListValue()
    {
        return $this->hasOneof(18);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.ValueMessageList listValue = 18;</code>
     * @param \ProtoMessages\ValueMessageList $var
     * @return $this
     */
    public function setListValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\ValueMessageList::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StructMessage structMessage = 19;</code>
     * @return \ProtoMessages\StructMessage|null
     */
    public function getStructMessage()
    {
        return $this->readOneof(19);
    }

    public function hasStructMessage()
    {
        return $this->hasOneof(19);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StructMessage structMessage = 19;</code>
     * @param \ProtoMessages\StructMessage $var
     * @return $this
     */
    public function setStructMessage($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StructMessage::class);
        $this->writeOneof(19, $var);

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

