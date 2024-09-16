<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPedidosCotizacionMaterialeMessage</code>
 */
class GsPedidosCotizacionMaterialeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codcotizacion = 1;</code>
     */
    protected $Codcotizacion = 0;
    /**
     * Generated from protobuf field <code>int32 Codproveedor = 2;</code>
     */
    protected $Codproveedor = 0;
    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FraccionesTot = 5;</code>
     */
    protected $FraccionesTot = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage FraccionesUsadas = 6;</code>
     */
    protected $FraccionesUsadas = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Precio = 7;</code>
     */
    protected $Precio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Total = 8;</code>
     */
    protected $Total = null;
    /**
     * Generated from protobuf field <code>string Estado = 9;</code>
     */
    protected $Estado = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codcotizacion
     *     @type int $Codproveedor
     *     @type int $Numlinea
     *     @type int $Codproducto
     *     @type \ProtoMessages\Int32Message $FraccionesTot
     *     @type \ProtoMessages\DoubleMessage $FraccionesUsadas
     *     @type \ProtoMessages\DoubleMessage $Precio
     *     @type \ProtoMessages\DoubleMessage $Total
     *     @type string $Estado
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
     * Generated from protobuf field <code>int32 Codproveedor = 2;</code>
     * @return int
     */
    public function getCodproveedor()
    {
        return $this->Codproveedor;
    }

    /**
     * Generated from protobuf field <code>int32 Codproveedor = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodproveedor($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codproveedor = $var;

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
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FraccionesTot = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getFraccionesTot()
    {
        return $this->FraccionesTot;
    }

    public function hasFraccionesTot()
    {
        return isset($this->FraccionesTot);
    }

    public function clearFraccionesTot()
    {
        unset($this->FraccionesTot);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FraccionesTot = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setFraccionesTot($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->FraccionesTot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage FraccionesUsadas = 6;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getFraccionesUsadas()
    {
        return $this->FraccionesUsadas;
    }

    public function hasFraccionesUsadas()
    {
        return isset($this->FraccionesUsadas);
    }

    public function clearFraccionesUsadas()
    {
        unset($this->FraccionesUsadas);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage FraccionesUsadas = 6;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setFraccionesUsadas($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->FraccionesUsadas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Precio = 7;</code>
     * @return \ProtoMessages\DoubleMessage|null
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Precio = 7;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setPrecio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Precio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Total = 8;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getTotal()
    {
        return $this->Total;
    }

    public function hasTotal()
    {
        return isset($this->Total);
    }

    public function clearTotal()
    {
        unset($this->Total);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Total = 8;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Estado = 9;</code>
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Generated from protobuf field <code>string Estado = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEstado($var)
    {
        GPBUtil::checkString($var, True);
        $this->Estado = $var;

        return $this;
    }

}

