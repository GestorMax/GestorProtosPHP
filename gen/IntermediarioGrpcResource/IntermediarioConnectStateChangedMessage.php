<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Resource/Messages.proto

namespace IntermediarioGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioGrpcResource.IntermediarioConnectStateChangedMessage</code>
 */
class IntermediarioConnectStateChangedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>bool gestorConnectActive = 2;</code>
     */
    protected $gestorConnectActive = false;
    /**
     * Generated from protobuf field <code>bool intermediarioInitialized = 3;</code>
     */
    protected $intermediarioInitialized = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type bool $gestorConnectActive
     *     @type bool $intermediarioInitialized
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Resource\Messages::initOnce();
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
     * Generated from protobuf field <code>bool gestorConnectActive = 2;</code>
     * @return bool
     */
    public function getGestorConnectActive()
    {
        return $this->gestorConnectActive;
    }

    /**
     * Generated from protobuf field <code>bool gestorConnectActive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setGestorConnectActive($var)
    {
        GPBUtil::checkBool($var);
        $this->gestorConnectActive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool intermediarioInitialized = 3;</code>
     * @return bool
     */
    public function getIntermediarioInitialized()
    {
        return $this->intermediarioInitialized;
    }

    /**
     * Generated from protobuf field <code>bool intermediarioInitialized = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIntermediarioInitialized($var)
    {
        GPBUtil::checkBool($var);
        $this->intermediarioInitialized = $var;

        return $this;
    }

}
