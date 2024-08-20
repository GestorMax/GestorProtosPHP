<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ProtoMessages/Common.proto

namespace ProtoMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protoMessages.FilterValue</code>
 */
class FilterValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * Generated from protobuf field <code>.protoMessages.FilterValue.ComparisonTypes comparison = 2;</code>
     */
    protected $comparison = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Value value = 3;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *     @type int $comparison
     *     @type \ProtoMessages\Value $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtoMessages\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.FilterValue.ComparisonTypes comparison = 2;</code>
     * @return int
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.FilterValue.ComparisonTypes comparison = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setComparison($var)
    {
        GPBUtil::checkEnum($var, \ProtoMessages\FilterValue\ComparisonTypes::class);
        $this->comparison = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Value value = 3;</code>
     * @return \ProtoMessages\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Value value = 3;</code>
     * @param \ProtoMessages\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Value::class);
        $this->value = $var;

        return $this;
    }

}
