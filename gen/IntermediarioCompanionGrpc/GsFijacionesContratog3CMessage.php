<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsFijacionesContratog3CMessage</code>
 */
class GsFijacionesContratog3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codcontrato = 1;</code>
     */
    protected $Codcontrato = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 2;</code>
     */
    protected $Orden = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage TnFijacion = 3;</code>
     */
    protected $TnFijacion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     */
    protected $PrecioTn = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MprecioTn = 5;</code>
     */
    protected $MprecioTn = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 6;</code>
     */
    protected $Valorcambio = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codcontrato
     *     @type int $Orden
     *     @type \ProtoMessages\DecimalMessage $TnFijacion
     *     @type \ProtoMessages\DecimalMessage $PrecioTn
     *     @type \ProtoMessages\DecimalMessage $MprecioTn
     *     @type \ProtoMessages\DecimalMessage $Valorcambio
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codcontrato = 1;</code>
     * @return int
     */
    public function getCodcontrato()
    {
        return $this->Codcontrato;
    }

    /**
     * Generated from protobuf field <code>int32 Codcontrato = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcontrato($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcontrato = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 2;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOrden($var)
    {
        GPBUtil::checkInt32($var);
        $this->Orden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage TnFijacion = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getTnFijacion()
    {
        return $this->TnFijacion;
    }

    public function hasTnFijacion()
    {
        return isset($this->TnFijacion);
    }

    public function clearTnFijacion()
    {
        unset($this->TnFijacion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage TnFijacion = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setTnFijacion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->TnFijacion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getPrecioTn()
    {
        return $this->PrecioTn;
    }

    public function hasPrecioTn()
    {
        return isset($this->PrecioTn);
    }

    public function clearPrecioTn()
    {
        unset($this->PrecioTn);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setPrecioTn($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->PrecioTn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MprecioTn = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getMprecioTn()
    {
        return $this->MprecioTn;
    }

    public function hasMprecioTn()
    {
        return isset($this->MprecioTn);
    }

    public function clearMprecioTn()
    {
        unset($this->MprecioTn);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MprecioTn = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setMprecioTn($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->MprecioTn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 6;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getValorcambio()
    {
        return $this->Valorcambio;
    }

    public function hasValorcambio()
    {
        return isset($this->Valorcambio);
    }

    public function clearValorcambio()
    {
        unset($this->Valorcambio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 6;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setValorcambio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Valorcambio = $var;

        return $this;
    }

}
