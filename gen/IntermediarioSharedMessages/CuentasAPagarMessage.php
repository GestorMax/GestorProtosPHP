<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioSharedMessages.CuentasAPagarMessage</code>
 */
class CuentasAPagarMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estado = 1;</code>
     */
    protected $estado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif = 2;</code>
     */
    protected $clasif = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif_pers = 3;</code>
     */
    protected $clasif_pers = null;
    /**
     * Generated from protobuf field <code>int32 ident = 4;</code>
     */
    protected $ident = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 5;</code>
     */
    protected $codempre = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 6;</code>
     */
    protected $numero = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 7;</code>
     */
    protected $percibido = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estadoop = 8;</code>
     */
    protected $estadoop = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage autorizado = 9;</code>
     */
    protected $autorizado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message orden = 10;</code>
     */
    protected $orden = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 11;</code>
     */
    protected $fecha = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipodoc = 12;</code>
     */
    protected $tipodoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     */
    protected $numdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage comentario = 14;</code>
     */
    protected $comentario = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcobpag = 15;</code>
     */
    protected $codcobpag = null;
    /**
     * Generated from protobuf field <code>string cobpag = 16;</code>
     */
    protected $cobpag = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 17;</code>
     */
    protected $codpersona = null;
    /**
     * Generated from protobuf field <code>string persona = 18;</code>
     */
    protected $persona = '';
    /**
     * Generated from protobuf field <code>string cuit = 19;</code>
     */
    protected $cuit = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage direccion = 20;</code>
     */
    protected $direccion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage localidad = 21;</code>
     */
    protected $localidad = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage provincia = 22;</code>
     */
    protected $provincia = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage telefono = 23;</code>
     */
    protected $telefono = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage contacto = 24;</code>
     */
    protected $contacto = null;
    /**
     * Generated from protobuf field <code>string simbolo = 25;</code>
     */
    protected $simbolo = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 26;</code>
     */
    protected $fechavenc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message dias_vencido = 27;</code>
     */
    protected $dias_vencido = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message plazo = 28;</code>
     */
    protected $plazo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 29;</code>
     */
    protected $importe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 30;</code>
     */
    protected $saldo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_vtos = 31;</code>
     */
    protected $saldo_vtos = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_pers = 32;</code>
     */
    protected $saldo_pers = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage limite_credito = 33;</code>
     */
    protected $limite_credito = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage solo_gestion = 34;</code>
     */
    protected $solo_gestion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ProtoMessages\StringMessage $estado
     *     @type \ProtoMessages\StringMessage $clasif
     *     @type \ProtoMessages\StringMessage $clasif_pers
     *     @type int $ident
     *     @type \ProtoMessages\Int32Message $codempre
     *     @type \ProtoMessages\Int32Message $numero
     *     @type \ProtoMessages\Int32Message $percibido
     *     @type \ProtoMessages\StringMessage $estadoop
     *     @type \ProtoMessages\StringMessage $autorizado
     *     @type \ProtoMessages\Int32Message $orden
     *     @type \Google\Protobuf\Timestamp $fecha
     *     @type \ProtoMessages\StringMessage $tipodoc
     *     @type \ProtoMessages\StringMessage $numdoc
     *     @type \ProtoMessages\StringMessage $comentario
     *     @type \ProtoMessages\Int32Message $codcobpag
     *     @type string $cobpag
     *     @type \ProtoMessages\Int32Message $codpersona
     *     @type string $persona
     *     @type string $cuit
     *     @type \ProtoMessages\StringMessage $direccion
     *     @type \ProtoMessages\StringMessage $localidad
     *     @type \ProtoMessages\StringMessage $provincia
     *     @type \ProtoMessages\StringMessage $telefono
     *     @type \ProtoMessages\StringMessage $contacto
     *     @type string $simbolo
     *     @type \Google\Protobuf\Timestamp $fechavenc
     *     @type \ProtoMessages\Int32Message $dias_vencido
     *     @type \ProtoMessages\Int32Message $plazo
     *     @type \ProtoMessages\DoubleMessage $importe
     *     @type \ProtoMessages\DoubleMessage $saldo
     *     @type \ProtoMessages\DoubleMessage $saldo_vtos
     *     @type \ProtoMessages\DoubleMessage $saldo_pers
     *     @type \ProtoMessages\DoubleMessage $limite_credito
     *     @type \ProtoMessages\StringMessage $solo_gestion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioShared::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estado = 1;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    public function hasEstado()
    {
        return isset($this->estado);
    }

    public function clearEstado()
    {
        unset($this->estado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estado = 1;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setEstado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->estado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif = 2;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getClasif()
    {
        return $this->clasif;
    }

    public function hasClasif()
    {
        return isset($this->clasif);
    }

    public function clearClasif()
    {
        unset($this->clasif);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif = 2;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setClasif($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->clasif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif_pers = 3;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getClasifPers()
    {
        return $this->clasif_pers;
    }

    public function hasClasifPers()
    {
        return isset($this->clasif_pers);
    }

    public function clearClasifPers()
    {
        unset($this->clasif_pers);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage clasif_pers = 3;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setClasifPers($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->clasif_pers = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ident = 4;</code>
     * @return int
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * Generated from protobuf field <code>int32 ident = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIdent($var)
    {
        GPBUtil::checkInt32($var);
        $this->ident = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodempre()
    {
        return $this->codempre;
    }

    public function hasCodempre()
    {
        return isset($this->codempre);
    }

    public function clearCodempre()
    {
        unset($this->codempre);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodempre($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codempre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    public function hasNumero()
    {
        return isset($this->numero);
    }

    public function clearNumero()
    {
        unset($this->numero);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getPercibido()
    {
        return $this->percibido;
    }

    public function hasPercibido()
    {
        return isset($this->percibido);
    }

    public function clearPercibido()
    {
        unset($this->percibido);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->percibido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estadoop = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getEstadoop()
    {
        return $this->estadoop;
    }

    public function hasEstadoop()
    {
        return isset($this->estadoop);
    }

    public function clearEstadoop()
    {
        unset($this->estadoop);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage estadoop = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setEstadoop($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->estadoop = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage autorizado = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    public function hasAutorizado()
    {
        return isset($this->autorizado);
    }

    public function clearAutorizado()
    {
        unset($this->autorizado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage autorizado = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setAutorizado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->autorizado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message orden = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getOrden()
    {
        return $this->orden;
    }

    public function hasOrden()
    {
        return isset($this->orden);
    }

    public function clearOrden()
    {
        unset($this->orden);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message orden = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setOrden($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->orden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    public function hasFecha()
    {
        return isset($this->fecha);
    }

    public function clearFecha()
    {
        unset($this->fecha);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecha($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipodoc = 12;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipodoc()
    {
        return $this->tipodoc;
    }

    public function hasTipodoc()
    {
        return isset($this->tipodoc);
    }

    public function clearTipodoc()
    {
        unset($this->tipodoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipodoc = 12;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipodoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->tipodoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNumdoc()
    {
        return $this->numdoc;
    }

    public function hasNumdoc()
    {
        return isset($this->numdoc);
    }

    public function clearNumdoc()
    {
        unset($this->numdoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNumdoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->numdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage comentario = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    public function hasComentario()
    {
        return isset($this->comentario);
    }

    public function clearComentario()
    {
        unset($this->comentario);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage comentario = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setComentario($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->comentario = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcobpag = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcobpag()
    {
        return $this->codcobpag;
    }

    public function hasCodcobpag()
    {
        return isset($this->codcobpag);
    }

    public function clearCodcobpag()
    {
        unset($this->codcobpag);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcobpag = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcobpag($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codcobpag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cobpag = 16;</code>
     * @return string
     */
    public function getCobpag()
    {
        return $this->cobpag;
    }

    /**
     * Generated from protobuf field <code>string cobpag = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCobpag($var)
    {
        GPBUtil::checkString($var, True);
        $this->cobpag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 17;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodpersona()
    {
        return $this->codpersona;
    }

    public function hasCodpersona()
    {
        return isset($this->codpersona);
    }

    public function clearCodpersona()
    {
        unset($this->codpersona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 17;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string persona = 18;</code>
     * @return string
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Generated from protobuf field <code>string persona = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setPersona($var)
    {
        GPBUtil::checkString($var, True);
        $this->persona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cuit = 19;</code>
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Generated from protobuf field <code>string cuit = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setCuit($var)
    {
        GPBUtil::checkString($var, True);
        $this->cuit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage direccion = 20;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function hasDireccion()
    {
        return isset($this->direccion);
    }

    public function clearDireccion()
    {
        unset($this->direccion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage direccion = 20;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDireccion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->direccion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage localidad = 21;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function hasLocalidad()
    {
        return isset($this->localidad);
    }

    public function clearLocalidad()
    {
        unset($this->localidad);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage localidad = 21;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setLocalidad($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->localidad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage provincia = 22;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    public function hasProvincia()
    {
        return isset($this->provincia);
    }

    public function clearProvincia()
    {
        unset($this->provincia);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage provincia = 22;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setProvincia($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->provincia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage telefono = 23;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function hasTelefono()
    {
        return isset($this->telefono);
    }

    public function clearTelefono()
    {
        unset($this->telefono);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage telefono = 23;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTelefono($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->telefono = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage contacto = 24;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    public function hasContacto()
    {
        return isset($this->contacto);
    }

    public function clearContacto()
    {
        unset($this->contacto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage contacto = 24;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setContacto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->contacto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string simbolo = 25;</code>
     * @return string
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    /**
     * Generated from protobuf field <code>string simbolo = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setSimbolo($var)
    {
        GPBUtil::checkString($var, True);
        $this->simbolo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 26;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechavenc()
    {
        return $this->fechavenc;
    }

    public function hasFechavenc()
    {
        return isset($this->fechavenc);
    }

    public function clearFechavenc()
    {
        unset($this->fechavenc);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 26;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechavenc($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fechavenc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message dias_vencido = 27;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDiasVencido()
    {
        return $this->dias_vencido;
    }

    public function hasDiasVencido()
    {
        return isset($this->dias_vencido);
    }

    public function clearDiasVencido()
    {
        unset($this->dias_vencido);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message dias_vencido = 27;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDiasVencido($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->dias_vencido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message plazo = 28;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getPlazo()
    {
        return $this->plazo;
    }

    public function hasPlazo()
    {
        return isset($this->plazo);
    }

    public function clearPlazo()
    {
        unset($this->plazo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message plazo = 28;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setPlazo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->plazo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 29;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getImporte()
    {
        return $this->importe;
    }

    public function hasImporte()
    {
        return isset($this->importe);
    }

    public function clearImporte()
    {
        unset($this->importe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 29;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setImporte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->importe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 30;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function hasSaldo()
    {
        return isset($this->saldo);
    }

    public function clearSaldo()
    {
        unset($this->saldo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 30;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setSaldo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->saldo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_vtos = 31;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getSaldoVtos()
    {
        return $this->saldo_vtos;
    }

    public function hasSaldoVtos()
    {
        return isset($this->saldo_vtos);
    }

    public function clearSaldoVtos()
    {
        unset($this->saldo_vtos);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_vtos = 31;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setSaldoVtos($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->saldo_vtos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_pers = 32;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getSaldoPers()
    {
        return $this->saldo_pers;
    }

    public function hasSaldoPers()
    {
        return isset($this->saldo_pers);
    }

    public function clearSaldoPers()
    {
        unset($this->saldo_pers);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo_pers = 32;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setSaldoPers($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->saldo_pers = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage limite_credito = 33;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }

    public function hasLimiteCredito()
    {
        return isset($this->limite_credito);
    }

    public function clearLimiteCredito()
    {
        unset($this->limite_credito);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage limite_credito = 33;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setLimiteCredito($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->limite_credito = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage solo_gestion = 34;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getSoloGestion()
    {
        return $this->solo_gestion;
    }

    public function hasSoloGestion()
    {
        return isset($this->solo_gestion);
    }

    public function clearSoloGestion()
    {
        unset($this->solo_gestion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage solo_gestion = 34;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setSoloGestion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->solo_gestion = $var;

        return $this;
    }

}

