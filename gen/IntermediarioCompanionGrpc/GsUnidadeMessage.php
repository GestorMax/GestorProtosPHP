<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsUnidadeMessage</code>
 */
class GsUnidadeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     */
    protected $Codigo = 0;
    /**
     * Generated from protobuf field <code>string Unidad = 2;</code>
     */
    protected $Unidad = '';
    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     */
    protected $Descrip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codigo
     *     @type string $Unidad
     *     @type string $Descrip
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     * @return int
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodigo($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codigo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Unidad = 2;</code>
     * @return string
     */
    public function getUnidad()
    {
        return $this->Unidad;
    }

    /**
     * Generated from protobuf field <code>string Unidad = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnidad($var)
    {
        GPBUtil::checkString($var, True);
        $this->Unidad = $var;

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

}

