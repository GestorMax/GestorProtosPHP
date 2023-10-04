<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsLocalidadesOnccaMessage</code>
 */
class GsLocalidadesOnccaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codlocalidad = 1;</code>
     */
    protected $Codlocalidad = 0;
    /**
     * Generated from protobuf field <code>string Localidad = 2;</code>
     */
    protected $Localidad = '';
    /**
     * Generated from protobuf field <code>int32 Codprovoncca = 3;</code>
     */
    protected $Codprovoncca = 0;
    /**
     * Generated from protobuf field <code>int32 Codpartido = 4;</code>
     */
    protected $Codpartido = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codlocalidad
     *     @type string $Localidad
     *     @type int $Codprovoncca
     *     @type int $Codpartido
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codlocalidad = 1;</code>
     * @return int
     */
    public function getCodlocalidad()
    {
        return $this->Codlocalidad;
    }

    /**
     * Generated from protobuf field <code>int32 Codlocalidad = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodlocalidad($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codlocalidad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Localidad = 2;</code>
     * @return string
     */
    public function getLocalidad()
    {
        return $this->Localidad;
    }

    /**
     * Generated from protobuf field <code>string Localidad = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalidad($var)
    {
        GPBUtil::checkString($var, True);
        $this->Localidad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codprovoncca = 3;</code>
     * @return int
     */
    public function getCodprovoncca()
    {
        return $this->Codprovoncca;
    }

    /**
     * Generated from protobuf field <code>int32 Codprovoncca = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodprovoncca($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codprovoncca = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codpartido = 4;</code>
     * @return int
     */
    public function getCodpartido()
    {
        return $this->Codpartido;
    }

    /**
     * Generated from protobuf field <code>int32 Codpartido = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpartido($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpartido = $var;

        return $this;
    }

}

