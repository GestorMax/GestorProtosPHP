<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPedidosCotizacionProveedoreMessage</code>
 */
class GsPedidosCotizacionProveedoreMessage extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaPedido = 3;</code>
     */
    protected $FechaPedido = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEntrega = 4;</code>
     */
    protected $FechaEntrega = null;
    /**
     * Generated from protobuf field <code>string Estado = 5;</code>
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
     *     @type \Google\Protobuf\Timestamp $FechaPedido
     *     @type \Google\Protobuf\Timestamp $FechaEntrega
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaPedido = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechaPedido()
    {
        return $this->FechaPedido;
    }

    public function hasFechaPedido()
    {
        return isset($this->FechaPedido);
    }

    public function clearFechaPedido()
    {
        unset($this->FechaPedido);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaPedido = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechaPedido($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FechaPedido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEntrega = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechaEntrega()
    {
        return $this->FechaEntrega;
    }

    public function hasFechaEntrega()
    {
        return isset($this->FechaEntrega);
    }

    public function clearFechaEntrega()
    {
        unset($this->FechaEntrega);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEntrega = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechaEntrega($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FechaEntrega = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Estado = 5;</code>
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Generated from protobuf field <code>string Estado = 5;</code>
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
