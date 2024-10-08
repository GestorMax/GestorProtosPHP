<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsListasImportadaMessage</code>
 */
class GsListasImportadaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 1;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>string Codfisico = 2;</code>
     */
    protected $Codfisico = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descfisico = 3;</code>
     */
    protected $Descfisico = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Unidadfisico = 4;</code>
     */
    protected $Unidadfisico = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Moneda = 5;</code>
     */
    protected $Moneda = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Precio = 6;</code>
     */
    protected $Precio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifcompra = 7;</code>
     */
    protected $Bonifcompra = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifventa = 8;</code>
     */
    protected $Bonifventa = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifpase = 9;</code>
     */
    protected $Bonifpase = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type string $Codfisico
     *     @type \ProtoMessages\StringMessage $Descfisico
     *     @type \ProtoMessages\StringMessage $Unidadfisico
     *     @type \ProtoMessages\StringMessage $Moneda
     *     @type \ProtoMessages\DecimalMessage $Precio
     *     @type \ProtoMessages\DecimalMessage $Bonifcompra
     *     @type \ProtoMessages\DecimalMessage $Bonifventa
     *     @type \ProtoMessages\DecimalMessage $Bonifpase
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 1;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 1;</code>
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
     * Generated from protobuf field <code>string Codfisico = 2;</code>
     * @return string
     */
    public function getCodfisico()
    {
        return $this->Codfisico;
    }

    /**
     * Generated from protobuf field <code>string Codfisico = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCodfisico($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codfisico = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descfisico = 3;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDescfisico()
    {
        return $this->Descfisico;
    }

    public function hasDescfisico()
    {
        return isset($this->Descfisico);
    }

    public function clearDescfisico()
    {
        unset($this->Descfisico);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descfisico = 3;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDescfisico($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Descfisico = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Unidadfisico = 4;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getUnidadfisico()
    {
        return $this->Unidadfisico;
    }

    public function hasUnidadfisico()
    {
        return isset($this->Unidadfisico);
    }

    public function clearUnidadfisico()
    {
        unset($this->Unidadfisico);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Unidadfisico = 4;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setUnidadfisico($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Unidadfisico = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Moneda = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getMoneda()
    {
        return $this->Moneda;
    }

    public function hasMoneda()
    {
        return isset($this->Moneda);
    }

    public function clearMoneda()
    {
        unset($this->Moneda);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Moneda = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setMoneda($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Moneda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Precio = 6;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getPrecio()
    {
        return $this->Precio;
    }

    public function hasPrecio()
    {
        return isset($this->Precio);
    }

    public function clearPrecio()
    {
        unset($this->Precio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Precio = 6;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setPrecio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Precio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifcompra = 7;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifcompra()
    {
        return $this->Bonifcompra;
    }

    public function hasBonifcompra()
    {
        return isset($this->Bonifcompra);
    }

    public function clearBonifcompra()
    {
        unset($this->Bonifcompra);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifcompra = 7;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifcompra($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Bonifcompra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifventa = 8;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifventa()
    {
        return $this->Bonifventa;
    }

    public function hasBonifventa()
    {
        return isset($this->Bonifventa);
    }

    public function clearBonifventa()
    {
        unset($this->Bonifventa);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifventa = 8;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifventa($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Bonifventa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifpase = 9;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifpase()
    {
        return $this->Bonifpase;
    }

    public function hasBonifpase()
    {
        return isset($this->Bonifpase);
    }

    public function clearBonifpase()
    {
        unset($this->Bonifpase);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Bonifpase = 9;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifpase($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Bonifpase = $var;

        return $this;
    }

}

