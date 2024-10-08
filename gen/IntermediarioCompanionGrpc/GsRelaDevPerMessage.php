<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRelaDevPerMessage</code>
 */
class GsRelaDevPerMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     */
    protected $Numero = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 3;</code>
     */
    protected $Orden = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Percibido = 4;</code>
     */
    protected $Percibido = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechavenc = 5;</code>
     */
    protected $Fechavenc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Debe = 6;</code>
     */
    protected $Debe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Haber = 7;</code>
     */
    protected $Haber = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mdebe = 8;</code>
     */
    protected $Mdebe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mhaber = 9;</code>
     */
    protected $Mhaber = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Comentario = 10;</code>
     */
    protected $Comentario = null;
    /**
     * Generated from protobuf field <code>float PorcentPago = 11;</code>
     */
    protected $PorcentPago = 0.0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     */
    protected $Codplan = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 13;</code>
     */
    protected $Codcuenta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codctacte = 14;</code>
     */
    protected $Codctacte = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecEstimadaPago = 15;</code>
     */
    protected $FecEstimadaPago = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Numero
     *     @type int $Orden
     *     @type \ProtoMessages\Int32Message $Percibido
     *     @type \Google\Protobuf\Timestamp $Fechavenc
     *     @type \ProtoMessages\DecimalMessage $Debe
     *     @type \ProtoMessages\DecimalMessage $Haber
     *     @type \ProtoMessages\DecimalMessage $Mdebe
     *     @type \ProtoMessages\DecimalMessage $Mhaber
     *     @type \ProtoMessages\StringMessage $Comentario
     *     @type float $PorcentPago
     *     @type \ProtoMessages\Int32Message $Codplan
     *     @type \ProtoMessages\Int32Message $Codcuenta
     *     @type \ProtoMessages\Int32Message $Codctacte
     *     @type \Google\Protobuf\Timestamp $FecEstimadaPago
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodempre($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codempre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     * @return int
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 3;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 3;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Percibido = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getPercibido()
    {
        return $this->Percibido;
    }

    public function hasPercibido()
    {
        return isset($this->Percibido);
    }

    public function clearPercibido()
    {
        unset($this->Percibido);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Percibido = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Percibido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechavenc = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechavenc()
    {
        return $this->Fechavenc;
    }

    public function hasFechavenc()
    {
        return isset($this->Fechavenc);
    }

    public function clearFechavenc()
    {
        unset($this->Fechavenc);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechavenc = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechavenc($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fechavenc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Debe = 6;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getDebe()
    {
        return $this->Debe;
    }

    public function hasDebe()
    {
        return isset($this->Debe);
    }

    public function clearDebe()
    {
        unset($this->Debe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Debe = 6;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setDebe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Debe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Haber = 7;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getHaber()
    {
        return $this->Haber;
    }

    public function hasHaber()
    {
        return isset($this->Haber);
    }

    public function clearHaber()
    {
        unset($this->Haber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Haber = 7;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setHaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Haber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mdebe = 8;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getMdebe()
    {
        return $this->Mdebe;
    }

    public function hasMdebe()
    {
        return isset($this->Mdebe);
    }

    public function clearMdebe()
    {
        unset($this->Mdebe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mdebe = 8;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setMdebe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Mdebe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mhaber = 9;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getMhaber()
    {
        return $this->Mhaber;
    }

    public function hasMhaber()
    {
        return isset($this->Mhaber);
    }

    public function clearMhaber()
    {
        unset($this->Mhaber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Mhaber = 9;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setMhaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Mhaber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Comentario = 10;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getComentario()
    {
        return $this->Comentario;
    }

    public function hasComentario()
    {
        return isset($this->Comentario);
    }

    public function clearComentario()
    {
        unset($this->Comentario);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Comentario = 10;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setComentario($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Comentario = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float PorcentPago = 11;</code>
     * @return float
     */
    public function getPorcentPago()
    {
        return $this->PorcentPago;
    }

    /**
     * Generated from protobuf field <code>float PorcentPago = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setPorcentPago($var)
    {
        GPBUtil::checkFloat($var);
        $this->PorcentPago = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    public function hasCodplan()
    {
        return isset($this->Codplan);
    }

    public function clearCodplan()
    {
        unset($this->Codplan);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codplan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 13;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuenta()
    {
        return $this->Codcuenta;
    }

    public function hasCodcuenta()
    {
        return isset($this->Codcuenta);
    }

    public function clearCodcuenta()
    {
        unset($this->Codcuenta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 13;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuenta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codcuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codctacte = 14;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodctacte()
    {
        return $this->Codctacte;
    }

    public function hasCodctacte()
    {
        return isset($this->Codctacte);
    }

    public function clearCodctacte()
    {
        unset($this->Codctacte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codctacte = 14;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodctacte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codctacte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecEstimadaPago = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecEstimadaPago()
    {
        return $this->FecEstimadaPago;
    }

    public function hasFecEstimadaPago()
    {
        return isset($this->FecEstimadaPago);
    }

    public function clearFecEstimadaPago()
    {
        unset($this->FecEstimadaPago);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecEstimadaPago = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecEstimadaPago($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecEstimadaPago = $var;

        return $this;
    }

}

