<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ProtoMessages/Common.proto

namespace ProtoMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protoMessages.StructMessage</code>
 */
class StructMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .protoMessages.ValueMessage> fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtoMessages\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .protoMessages.ValueMessage> fields = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>map<string, .protoMessages.ValueMessage> fields = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \ProtoMessages\ValueMessage::class);
        $this->fields = $arr;

        return $this;
    }

}

