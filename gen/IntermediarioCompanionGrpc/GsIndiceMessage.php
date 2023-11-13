<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsIndiceMessage</code>
 */
class GsIndiceMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     */
    protected $Codindice = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 2;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Indice = 3;</code>
     */
    protected $Indice = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codindice
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type \ProtoMessages\DecimalMessage $Indice
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     * @return int
     */
    public function getCodindice()
    {
        return $this->Codindice;
    }

    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodindice($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codindice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    public function hasFecha()
    {
        return isset($this->Fecha);
    }

    public function clearFecha()
    {
        unset($this->Fecha);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecha($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Indice = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getIndice()
    {
        return $this->Indice;
    }

    public function hasIndice()
    {
        return isset($this->Indice);
    }

    public function clearIndice()
    {
        unset($this->Indice);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Indice = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setIndice($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Indice = $var;

        return $this;
    }

}
