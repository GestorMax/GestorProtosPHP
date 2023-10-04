<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Resource/Messages.proto

namespace IntermediarioGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioGrpcResource.DatabaseMessageList</code>
 */
class DatabaseMessageList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 1;</code>
     */
    protected $result = null;
    /**
     * Generated from protobuf field <code>repeated .intermediarioGrpcResource.DatabaseMessage values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ProtoMessages\ResponseResult $result
     *     @type array<\IntermediarioGrpcResource\DatabaseMessage>|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 1;</code>
     * @return \ProtoMessages\ResponseResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 1;</code>
     * @param \ProtoMessages\ResponseResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\ResponseResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .intermediarioGrpcResource.DatabaseMessage values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .intermediarioGrpcResource.DatabaseMessage values = 2;</code>
     * @param array<\IntermediarioGrpcResource\DatabaseMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IntermediarioGrpcResource\DatabaseMessage::class);
        $this->values = $arr;

        return $this;
    }

}

