<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AnalyticsGrpc/Resource/Messages.proto

namespace AnalyticsGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>analyticsGrpcResource.LastMultiMeasurementRequest</code>
 */
class LastMultiMeasurementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 dataIds = 1;</code>
     */
    private $dataIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dataIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AnalyticsGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 dataIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataIds()
    {
        return $this->dataIds;
    }

    /**
     * Generated from protobuf field <code>repeated int32 dataIds = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->dataIds = $arr;

        return $this;
    }

}

