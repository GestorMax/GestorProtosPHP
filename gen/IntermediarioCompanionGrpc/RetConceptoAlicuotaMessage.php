<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.RetConceptoAlicuotaMessage</code>
 */
class RetConceptoAlicuotaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codcondicion = 1;</code>
     */
    protected $Codcondicion = 0;
    /**
     * Generated from protobuf field <code>int32 Coditem = 2;</code>
     */
    protected $Coditem = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Desde = 3;</code>
     */
    protected $Desde = null;
    /**
     * Generated from protobuf field <code>double Porcentaje = 4;</code>
     */
    protected $Porcentaje = 0.0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage SumaFija = 5;</code>
     */
    protected $SumaFija = null;
    /**
     * Generated from protobuf field <code>int32 Codretencion = 6;</code>
     */
    protected $Codretencion = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 7;</code>
     */
    protected $Orden = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codcondicion
     *     @type int $Coditem
     *     @type \ProtoMessages\DecimalMessage $Desde
     *     @type float $Porcentaje
     *     @type \ProtoMessages\DecimalMessage $SumaFija
     *     @type int $Codretencion
     *     @type int $Orden
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codcondicion = 1;</code>
     * @return int
     */
    public function getCodcondicion()
    {
        return $this->Codcondicion;
    }

    /**
     * Generated from protobuf field <code>int32 Codcondicion = 1;</code>
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
     * Generated from protobuf field <code>int32 Coditem = 2;</code>
     * @return int
     */
    public function getCoditem()
    {
        return $this->Coditem;
    }

    /**
     * Generated from protobuf field <code>int32 Coditem = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCoditem($var)
    {
        GPBUtil::checkInt32($var);
        $this->Coditem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Desde = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getDesde()
    {
        return $this->Desde;
    }

    public function hasDesde()
    {
        return isset($this->Desde);
    }

    public function clearDesde()
    {
        unset($this->Desde);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Desde = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setDesde($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Desde = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Porcentaje = 4;</code>
     * @return float
     */
    public function getPorcentaje()
    {
        return $this->Porcentaje;
    }

    /**
     * Generated from protobuf field <code>double Porcentaje = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPorcentaje($var)
    {
        GPBUtil::checkDouble($var);
        $this->Porcentaje = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage SumaFija = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getSumaFija()
    {
        return $this->SumaFija;
    }

    public function hasSumaFija()
    {
        return isset($this->SumaFija);
    }

    public function clearSumaFija()
    {
        unset($this->SumaFija);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage SumaFija = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setSumaFija($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->SumaFija = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codretencion = 6;</code>
     * @return int
     */
    public function getCodretencion()
    {
        return $this->Codretencion;
    }

    /**
     * Generated from protobuf field <code>int32 Codretencion = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCodretencion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codretencion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 7;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOrden($var)
    {
        GPBUtil::checkInt32($var);
        $this->Orden = $var;

        return $this;
    }

}

