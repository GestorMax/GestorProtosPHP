<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AnalyticsGrpc/Resource/Messages.proto

namespace AnalyticsGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>analyticsGrpcResource.ApiSourceMessage</code>
 */
class ApiSourceMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage100 name = 2;</code>
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type \ProtoMessages\StringMessage100 $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AnalyticsGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage100 name = 2;</code>
     * @return \ProtoMessages\StringMessage100|null
     */
    public function getName()
    {
        return $this->name;
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage100 name = 2;</code>
     * @param \ProtoMessages\StringMessage100 $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage100::class);
        $this->name = $var;

        return $this;
    }

}
