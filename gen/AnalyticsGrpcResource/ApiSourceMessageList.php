<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: AnalyticsGrpc/Resource/Messages.proto

namespace AnalyticsGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>analyticsGrpcResource.ApiSourceMessageList</code>
 */
class ApiSourceMessageList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.ApiSourceMessage values = 1;</code>
     */
    private $values;
    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 2;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\AnalyticsGrpcResource\ApiSourceMessage>|\Google\Protobuf\Internal\RepeatedField $values
     *     @type \ProtoMessages\ResponseResult $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AnalyticsGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.ApiSourceMessage values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.ApiSourceMessage values = 1;</code>
     * @param array<\AnalyticsGrpcResource\ApiSourceMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AnalyticsGrpcResource\ApiSourceMessage::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 2;</code>
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
     * Generated from protobuf field <code>.protoMessages.ResponseResult result = 2;</code>
     * @param \ProtoMessages\ResponseResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\ResponseResult::class);
        $this->result = $var;

        return $this;
    }

}

