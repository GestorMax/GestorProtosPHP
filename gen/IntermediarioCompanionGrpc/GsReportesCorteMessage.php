<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsReportesCorteMessage</code>
 */
class GsReportesCorteMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codreporte = 1;</code>
     */
    protected $Codreporte = 0;
    /**
     * Generated from protobuf field <code>int32 Codtabla = 2;</code>
     */
    protected $Codtabla = 0;
    /**
     * Generated from protobuf field <code>int32 Codcorte = 3;</code>
     */
    protected $Codcorte = 0;
    /**
     * Generated from protobuf field <code>string Columnas = 4;</code>
     */
    protected $Columnas = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codreporte
     *     @type int $Codtabla
     *     @type int $Codcorte
     *     @type string $Columnas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codreporte = 1;</code>
     * @return int
     */
    public function getCodreporte()
    {
        return $this->Codreporte;
    }

    /**
     * Generated from protobuf field <code>int32 Codreporte = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodreporte($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codreporte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codtabla = 2;</code>
     * @return int
     */
    public function getCodtabla()
    {
        return $this->Codtabla;
    }

    /**
     * Generated from protobuf field <code>int32 Codtabla = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtabla($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtabla = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codcorte = 3;</code>
     * @return int
     */
    public function getCodcorte()
    {
        return $this->Codcorte;
    }

    /**
     * Generated from protobuf field <code>int32 Codcorte = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcorte($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcorte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Columnas = 4;</code>
     * @return string
     */
    public function getColumnas()
    {
        return $this->Columnas;
    }

    /**
     * Generated from protobuf field <code>string Columnas = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnas($var)
    {
        GPBUtil::checkString($var, True);
        $this->Columnas = $var;

        return $this;
    }

}
