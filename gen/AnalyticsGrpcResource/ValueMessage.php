<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AnalyticsGrpc/Resource/Messages.proto

namespace AnalyticsGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>analyticsGrpcResource.ValueMessage</code>
 */
class ValueMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 dataId = 1;</code>
     */
    protected $dataId = 0;
    /**
     * Generated from protobuf field <code>string dataName = 2;</code>
     */
    protected $dataName = '';
    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.LabelWithTypeMessage labels = 3;</code>
     */
    private $labels;
    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.DataMessage data = 4;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dataId
     *     @type string $dataName
     *     @type array<\AnalyticsGrpcResource\LabelWithTypeMessage>|\Google\Protobuf\Internal\RepeatedField $labels
     *     @type array<\AnalyticsGrpcResource\DataMessage>|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AnalyticsGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 dataId = 1;</code>
     * @return int
     */
    public function getDataId()
    {
        return $this->dataId;
    }

    /**
     * Generated from protobuf field <code>int32 dataId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDataId($var)
    {
        GPBUtil::checkInt32($var);
        $this->dataId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dataName = 2;</code>
     * @return string
     */
    public function getDataName()
    {
        return $this->dataName;
    }

    /**
     * Generated from protobuf field <code>string dataName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDataName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.LabelWithTypeMessage labels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.LabelWithTypeMessage labels = 3;</code>
     * @param array<\AnalyticsGrpcResource\LabelWithTypeMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AnalyticsGrpcResource\LabelWithTypeMessage::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.DataMessage data = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated .analyticsGrpcResource.DataMessage data = 4;</code>
     * @param array<\AnalyticsGrpcResource\DataMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AnalyticsGrpcResource\DataMessage::class);
        $this->data = $arr;

        return $this;
    }

}

