<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsImputacionesCptoContrMessage</code>
 */
class GsImputacionesCptoContrMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codtipocpto = 2;</code>
     */
    protected $Codtipocpto = 0;
    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     */
    protected $Prioridad = 0;
    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     */
    protected $Codplan = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 5;</code>
     */
    protected $Codcuenta = null;
    /**
     * Generated from protobuf field <code>string DiscrClientes = 6;</code>
     */
    protected $DiscrClientes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codtipocpto
     *     @type int $Prioridad
     *     @type int $Codplan
     *     @type \ProtoMessages\Int32Message $Codcuenta
     *     @type string $DiscrClientes
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
     * Generated from protobuf field <code>int32 Codtipocpto = 2;</code>
     * @return int
     */
    public function getCodtipocpto()
    {
        return $this->Codtipocpto;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipocpto = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipocpto($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipocpto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     * @return int
     */
    public function getPrioridad()
    {
        return $this->Prioridad;
    }

    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPrioridad($var)
    {
        GPBUtil::checkInt32($var);
        $this->Prioridad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     * @return int
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codplan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 5;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuenta = 5;</code>
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
     * Generated from protobuf field <code>string DiscrClientes = 6;</code>
     * @return string
     */
    public function getDiscrClientes()
    {
        return $this->DiscrClientes;
    }

    /**
     * Generated from protobuf field <code>string DiscrClientes = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscrClientes($var)
    {
        GPBUtil::checkString($var, True);
        $this->DiscrClientes = $var;

        return $this;
    }

}

