<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.ImpPersonasCondImpoMessage</code>
 */
class ImpPersonasCondImpoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codpersona = 1;</code>
     */
    protected $Codpersona = 0;
    /**
     * Generated from protobuf field <code>int32 Codcondicion = 2;</code>
     */
    protected $Codcondicion = 0;
    /**
     * Generated from protobuf field <code>int32 Coditem = 3;</code>
     */
    protected $Coditem = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codpersona
     *     @type int $Codcondicion
     *     @type int $Coditem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 1;</code>
     * @return int
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codcondicion = 2;</code>
     * @return int
     */
    public function getCodcondicion()
    {
        return $this->Codcondicion;
    }

    /**
     * Generated from protobuf field <code>int32 Codcondicion = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcondicion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcondicion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Coditem = 3;</code>
     * @return int
     */
    public function getCoditem()
    {
        return $this->Coditem;
    }

    /**
     * Generated from protobuf field <code>int32 Coditem = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCoditem($var)
    {
        GPBUtil::checkInt32($var);
        $this->Coditem = $var;

        return $this;
    }

}

