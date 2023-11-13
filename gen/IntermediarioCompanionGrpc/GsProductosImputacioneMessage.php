<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsProductosImputacioneMessage</code>
 */
class GsProductosImputacioneMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>string Tipooper = 2;</code>
     */
    protected $Tipooper = '';
    /**
     * Generated from protobuf field <code>int32 Codplan = 3;</code>
     */
    protected $Codplan = 0;
    /**
     * Generated from protobuf field <code>int32 Codcuenta = 4;</code>
     */
    protected $Codcuenta = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codproducto
     *     @type string $Tipooper
     *     @type int $Codplan
     *     @type int $Codcuenta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
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
     * Generated from protobuf field <code>string Tipooper = 2;</code>
     * @return string
     */
    public function getTipooper()
    {
        return $this->Tipooper;
    }

    /**
     * Generated from protobuf field <code>string Tipooper = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 3;</code>
     * @return int
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 3;</code>
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
     * Generated from protobuf field <code>int32 Codcuenta = 4;</code>
     * @return int
     */
    public function getCodcuenta()
    {
        return $this->Codcuenta;
    }

    /**
     * Generated from protobuf field <code>int32 Codcuenta = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcuenta($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcuenta = $var;

        return $this;
    }

}
