<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPedidosCotizacionMessage</code>
 */
class GsPedidosCotizacionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codcotizacion = 1;</code>
     */
    protected $Codcotizacion = 0;
    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Detalle = 4;</code>
     */
    protected $Detalle = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>int32 Validez = 6;</code>
     */
    protected $Validez = 0;
    /**
     * Generated from protobuf field <code>int32 Codpersona = 7;</code>
     */
    protected $Codpersona = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Estado = 8;</code>
     */
    protected $Estado = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 9;</code>
     */
    protected $FecAlta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 10;</code>
     */
    protected $UsrAlta = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 11;</code>
     */
    protected $FecModif = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 12;</code>
     */
    protected $UsrModif = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 13;</code>
     */
    protected $FecBaja = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 14;</code>
     */
    protected $UsrBaja = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 15;</code>
     */
    protected $Codresponsable = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Referencia = 16;</code>
     */
    protected $Referencia = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message TiempoEntrega = 17;</code>
     */
    protected $TiempoEntrega = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FormaPago = 18;</code>
     */
    protected $FormaPago = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CondicionEntrega = 19;</code>
     */
    protected $CondicionEntrega = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Flete = 20;</code>
     */
    protected $Flete = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 21;</code>
     */
    protected $Notas = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codcotizacion
     *     @type int $Codempre
     *     @type string $Descrip
     *     @type \ProtoMessages\StringMessage $Detalle
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type int $Validez
     *     @type int $Codpersona
     *     @type \ProtoMessages\StringMessage $Estado
     *     @type \Google\Protobuf\Timestamp $FecAlta
     *     @type \ProtoMessages\Int32Message $UsrAlta
     *     @type \Google\Protobuf\Timestamp $FecModif
     *     @type \ProtoMessages\Int32Message $UsrModif
     *     @type \Google\Protobuf\Timestamp $FecBaja
     *     @type \ProtoMessages\Int32Message $UsrBaja
     *     @type \ProtoMessages\Int32Message $Codresponsable
     *     @type \ProtoMessages\StringMessage $Referencia
     *     @type \ProtoMessages\Int32Message $TiempoEntrega
     *     @type \ProtoMessages\StringMessage $FormaPago
     *     @type \ProtoMessages\StringMessage $CondicionEntrega
     *     @type \ProtoMessages\StringMessage $Flete
     *     @type \ProtoMessages\StringMessage $Notas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codcotizacion = 1;</code>
     * @return int
     */
    public function getCodcotizacion()
    {
        return $this->Codcotizacion;
    }

    /**
     * Generated from protobuf field <code>int32 Codcotizacion = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcotizacion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcotizacion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
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
     * Generated from protobuf field <code>string Descrip = 3;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescrip($var)
    {
        GPBUtil::checkString($var, True);
        $this->Descrip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Detalle = 4;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDetalle()
    {
        return $this->Detalle;
    }

    public function hasDetalle()
    {
        return isset($this->Detalle);
    }

    public function clearDetalle()
    {
        unset($this->Detalle);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Detalle = 4;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDetalle($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Detalle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
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
     * Generated from protobuf field <code>int32 Validez = 6;</code>
     * @return int
     */
    public function getValidez()
    {
        return $this->Validez;
    }

    /**
     * Generated from protobuf field <code>int32 Validez = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setValidez($var)
    {
        GPBUtil::checkInt32($var);
        $this->Validez = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 7;</code>
     * @return int
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 7;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Estado = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    public function hasEstado()
    {
        return isset($this->Estado);
    }

    public function clearEstado()
    {
        unset($this->Estado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Estado = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setEstado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Estado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecAlta()
    {
        return $this->FecAlta;
    }

    public function hasFecAlta()
    {
        return isset($this->FecAlta);
    }

    public function clearFecAlta()
    {
        unset($this->FecAlta);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecAlta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecAlta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrAlta()
    {
        return $this->UsrAlta;
    }

    public function hasUsrAlta()
    {
        return isset($this->UsrAlta);
    }

    public function clearUsrAlta()
    {
        unset($this->UsrAlta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrAlta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrAlta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecModif()
    {
        return $this->FecModif;
    }

    public function hasFecModif()
    {
        return isset($this->FecModif);
    }

    public function clearFecModif()
    {
        unset($this->FecModif);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecModif($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecModif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrModif()
    {
        return $this->UsrModif;
    }

    public function hasUsrModif()
    {
        return isset($this->UsrModif);
    }

    public function clearUsrModif()
    {
        unset($this->UsrModif);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrModif($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrModif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecBaja()
    {
        return $this->FecBaja;
    }

    public function hasFecBaja()
    {
        return isset($this->FecBaja);
    }

    public function clearFecBaja()
    {
        unset($this->FecBaja);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecBaja($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecBaja = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 14;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrBaja()
    {
        return $this->UsrBaja;
    }

    public function hasUsrBaja()
    {
        return isset($this->UsrBaja);
    }

    public function clearUsrBaja()
    {
        unset($this->UsrBaja);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 14;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrBaja($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrBaja = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodresponsable()
    {
        return $this->Codresponsable;
    }

    public function hasCodresponsable()
    {
        return isset($this->Codresponsable);
    }

    public function clearCodresponsable()
    {
        unset($this->Codresponsable);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodresponsable($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codresponsable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Referencia = 16;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }

    public function hasReferencia()
    {
        return isset($this->Referencia);
    }

    public function clearReferencia()
    {
        unset($this->Referencia);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Referencia = 16;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setReferencia($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Referencia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message TiempoEntrega = 17;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getTiempoEntrega()
    {
        return $this->TiempoEntrega;
    }

    public function hasTiempoEntrega()
    {
        return isset($this->TiempoEntrega);
    }

    public function clearTiempoEntrega()
    {
        unset($this->TiempoEntrega);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message TiempoEntrega = 17;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setTiempoEntrega($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->TiempoEntrega = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FormaPago = 18;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getFormaPago()
    {
        return $this->FormaPago;
    }

    public function hasFormaPago()
    {
        return isset($this->FormaPago);
    }

    public function clearFormaPago()
    {
        unset($this->FormaPago);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FormaPago = 18;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setFormaPago($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->FormaPago = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CondicionEntrega = 19;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCondicionEntrega()
    {
        return $this->CondicionEntrega;
    }

    public function hasCondicionEntrega()
    {
        return isset($this->CondicionEntrega);
    }

    public function clearCondicionEntrega()
    {
        unset($this->CondicionEntrega);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CondicionEntrega = 19;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCondicionEntrega($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->CondicionEntrega = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Flete = 20;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getFlete()
    {
        return $this->Flete;
    }

    public function hasFlete()
    {
        return isset($this->Flete);
    }

    public function clearFlete()
    {
        unset($this->Flete);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Flete = 20;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setFlete($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Flete = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 21;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNotas()
    {
        return $this->Notas;
    }

    public function hasNotas()
    {
        return isset($this->Notas);
    }

    public function clearNotas()
    {
        unset($this->Notas);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 21;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNotas($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Notas = $var;

        return $this;
    }

}

