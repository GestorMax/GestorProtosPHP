<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsDetalleCalcRetencionMessage</code>
 */
class GsDetalleCalcRetencionMessage extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 4;</code>
     */
    protected $Orden = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 5;</code>
     */
    protected $Codpersona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 6;</code>
     */
    protected $Codplan = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 7;</code>
     */
    protected $Codcuenta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Persona = 8;</code>
     */
    protected $Persona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rubro = 9;</code>
     */
    protected $Rubro = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 10;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechapago = 11;</code>
     */
    protected $Fechapago = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechaorden = 12;</code>
     */
    protected $Fechaorden = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroOp = 13;</code>
     */
    protected $NumeroOp = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 14;</code>
     */
    protected $Numdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 15;</code>
     */
    protected $Concepto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalconcepto = 16;</code>
     */
    protected $Totalconcepto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Porcentpago = 17;</code>
     */
    protected $Porcentpago = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalpago = 18;</code>
     */
    protected $Totalpago = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Numero
     *     @type int $Numlinea
     *     @type int $Orden
     *     @type \ProtoMessages\Int32Message $Codpersona
     *     @type \ProtoMessages\Int32Message $Codplan
     *     @type \ProtoMessages\Int32Message $Codcuenta
     *     @type \ProtoMessages\StringMessage $Persona
     *     @type \ProtoMessages\StringMessage $Rubro
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type \Google\Protobuf\Timestamp $Fechapago
     *     @type \Google\Protobuf\Timestamp $Fechaorden
     *     @type \ProtoMessages\Int32Message $NumeroOp
     *     @type \ProtoMessages\StringMessage $Numdoc
     *     @type \ProtoMessages\StringMessage $Concepto
     *     @type \ProtoMessages\DecimalMessage $Totalconcepto
     *     @type \ProtoMessages\DecimalMessage $Porcentpago
     *     @type \ProtoMessages\DecimalMessage $Totalpago
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
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @return int
     */
    public function getNumlinea()
    {
        return $this->Numlinea;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlinea($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numlinea = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 4;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 4;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    public function hasCodpersona()
    {
        return isset($this->Codpersona);
    }

    public function clearCodpersona()
    {
        unset($this->Codpersona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 6;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 6;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 7;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 7;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Persona = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getPersona()
    {
        return $this->Persona;
    }

    public function hasPersona()
    {
        return isset($this->Persona);
    }

    public function clearPersona()
    {
        unset($this->Persona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Persona = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setPersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Persona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rubro = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getRubro()
    {
        return $this->Rubro;
    }

    public function hasRubro()
    {
        return isset($this->Rubro);
    }

    public function clearRubro()
    {
        unset($this->Rubro);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rubro = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setRubro($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Rubro = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 10;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 10;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechapago = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechapago()
    {
        return $this->Fechapago;
    }

    public function hasFechapago()
    {
        return isset($this->Fechapago);
    }

    public function clearFechapago()
    {
        unset($this->Fechapago);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechapago = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechapago($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fechapago = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechaorden = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechaorden()
    {
        return $this->Fechaorden;
    }

    public function hasFechaorden()
    {
        return isset($this->Fechaorden);
    }

    public function clearFechaorden()
    {
        unset($this->Fechaorden);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechaorden = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechaorden($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fechaorden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroOp = 13;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getNumeroOp()
    {
        return $this->NumeroOp;
    }

    public function hasNumeroOp()
    {
        return isset($this->NumeroOp);
    }

    public function clearNumeroOp()
    {
        unset($this->NumeroOp);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroOp = 13;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setNumeroOp($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->NumeroOp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNumdoc()
    {
        return $this->Numdoc;
    }

    public function hasNumdoc()
    {
        return isset($this->Numdoc);
    }

    public function clearNumdoc()
    {
        unset($this->Numdoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNumdoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Numdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 15;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getConcepto()
    {
        return $this->Concepto;
    }

    public function hasConcepto()
    {
        return isset($this->Concepto);
    }

    public function clearConcepto()
    {
        unset($this->Concepto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 15;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setConcepto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Concepto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalconcepto = 16;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getTotalconcepto()
    {
        return $this->Totalconcepto;
    }

    public function hasTotalconcepto()
    {
        return isset($this->Totalconcepto);
    }

    public function clearTotalconcepto()
    {
        unset($this->Totalconcepto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalconcepto = 16;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setTotalconcepto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Totalconcepto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Porcentpago = 17;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getPorcentpago()
    {
        return $this->Porcentpago;
    }

    public function hasPorcentpago()
    {
        return isset($this->Porcentpago);
    }

    public function clearPorcentpago()
    {
        unset($this->Porcentpago);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Porcentpago = 17;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setPorcentpago($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Porcentpago = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalpago = 18;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getTotalpago()
    {
        return $this->Totalpago;
    }

    public function hasTotalpago()
    {
        return isset($this->Totalpago);
    }

    public function clearTotalpago()
    {
        unset($this->Totalpago);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Totalpago = 18;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setTotalpago($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Totalpago = $var;

        return $this;
    }

}
