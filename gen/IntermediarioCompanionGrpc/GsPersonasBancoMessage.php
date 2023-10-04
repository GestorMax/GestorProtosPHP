<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPersonasBancoMessage</code>
 */
class GsPersonasBancoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codpersona = 1;</code>
     */
    protected $Codpersona = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 2;</code>
     */
    protected $Orden = 0;
    /**
     * Generated from protobuf field <code>string Nombre = 3;</code>
     */
    protected $Nombre = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDoc = 4;</code>
     */
    protected $TipoDoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 5;</code>
     */
    protected $Cuit = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codbanco = 6;</code>
     */
    protected $Codbanco = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoCuenta = 7;</code>
     */
    protected $TipoCuenta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroCuenta = 8;</code>
     */
    protected $NroCuenta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Sucursal = 9;</code>
     */
    protected $Sucursal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cbu = 10;</code>
     */
    protected $Cbu = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codpersona
     *     @type int $Orden
     *     @type string $Nombre
     *     @type \ProtoMessages\StringMessage $TipoDoc
     *     @type \ProtoMessages\StringMessage $Cuit
     *     @type \ProtoMessages\Int32Message $Codbanco
     *     @type \ProtoMessages\StringMessage $TipoCuenta
     *     @type \ProtoMessages\StringMessage $NroCuenta
     *     @type \ProtoMessages\StringMessage $Sucursal
     *     @type \ProtoMessages\StringMessage $Cbu
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
     * Generated from protobuf field <code>string Nombre = 3;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNombre($var)
    {
        GPBUtil::checkString($var, True);
        $this->Nombre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDoc = 4;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipoDoc()
    {
        return $this->TipoDoc;
    }

    public function hasTipoDoc()
    {
        return isset($this->TipoDoc);
    }

    public function clearTipoDoc()
    {
        unset($this->TipoDoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDoc = 4;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipoDoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipoDoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    public function hasCuit()
    {
        return isset($this->Cuit);
    }

    public function clearCuit()
    {
        unset($this->Cuit);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCuit($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Cuit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codbanco = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodbanco()
    {
        return $this->Codbanco;
    }

    public function hasCodbanco()
    {
        return isset($this->Codbanco);
    }

    public function clearCodbanco()
    {
        unset($this->Codbanco);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codbanco = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodbanco($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codbanco = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoCuenta = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipoCuenta()
    {
        return $this->TipoCuenta;
    }

    public function hasTipoCuenta()
    {
        return isset($this->TipoCuenta);
    }

    public function clearTipoCuenta()
    {
        unset($this->TipoCuenta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoCuenta = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipoCuenta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipoCuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroCuenta = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNroCuenta()
    {
        return $this->NroCuenta;
    }

    public function hasNroCuenta()
    {
        return isset($this->NroCuenta);
    }

    public function clearNroCuenta()
    {
        unset($this->NroCuenta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroCuenta = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNroCuenta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->NroCuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Sucursal = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getSucursal()
    {
        return $this->Sucursal;
    }

    public function hasSucursal()
    {
        return isset($this->Sucursal);
    }

    public function clearSucursal()
    {
        unset($this->Sucursal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Sucursal = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setSucursal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Sucursal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cbu = 10;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCbu()
    {
        return $this->Cbu;
    }

    public function hasCbu()
    {
        return isset($this->Cbu);
    }

    public function clearCbu()
    {
        unset($this->Cbu);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cbu = 10;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCbu($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Cbu = $var;

        return $this;
    }

}

