<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTiposRemitosg3CMessage</code>
 */
class GsTiposRemitosg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtiporemito = 1;</code>
     */
    protected $Codtiporemito = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string ExportaAG3 = 3;</code>
     */
    protected $ExportaAG3 = '';
    /**
     * Generated from protobuf field <code>string TipoRemito = 4;</code>
     */
    protected $TipoRemito = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codtiporemito
     *     @type string $Descrip
     *     @type string $ExportaAG3
     *     @type string $TipoRemito
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtiporemito = 1;</code>
     * @return int
     */
    public function getCodtiporemito()
    {
        return $this->Codtiporemito;
    }

    /**
     * Generated from protobuf field <code>int32 Codtiporemito = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtiporemito($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtiporemito = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
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
     * Generated from protobuf field <code>string ExportaAG3 = 3;</code>
     * @return string
     */
    public function getExportaAG3()
    {
        return $this->ExportaAG3;
    }

    /**
     * Generated from protobuf field <code>string ExportaAG3 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExportaAG3($var)
    {
        GPBUtil::checkString($var, True);
        $this->ExportaAG3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoRemito = 4;</code>
     * @return string
     */
    public function getTipoRemito()
    {
        return $this->TipoRemito;
    }

    /**
     * Generated from protobuf field <code>string TipoRemito = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoRemito($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoRemito = $var;

        return $this;
    }

}

