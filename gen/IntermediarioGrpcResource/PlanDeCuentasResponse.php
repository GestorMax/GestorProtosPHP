<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Resource/Messages.proto

namespace IntermediarioGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioGrpcResource.PlanDeCuentasResponse</code>
 */
class PlanDeCuentasResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 1;</code>
     */
    protected $result = null;
    /**
     * Generated from protobuf field <code>.intermediarioGrpcResource.PlanDeCuentasMessage message = 2;</code>
     */
    protected $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ProtoMessages\ResponseResult $result
     *     @type \IntermediarioGrpcResource\PlanDeCuentasMessage $message
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
     * Generated from protobuf field <code>.intermediarioGrpcResource.PlanDeCuentasMessage message = 2;</code>
     * @return \IntermediarioGrpcResource\PlanDeCuentasMessage|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.intermediarioGrpcResource.PlanDeCuentasMessage message = 2;</code>
     * @param \IntermediarioGrpcResource\PlanDeCuentasMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \IntermediarioGrpcResource\PlanDeCuentasMessage::class);
        $this->message = $var;

        return $this;
    }

}

