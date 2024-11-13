<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTiposInsumosg3CMessage</code>
 */
class GsTiposInsumosg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtipoinsumo = 1;</code>
     */
    protected $Codtipoinsumo = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string Grupo = 3;</code>
     */
    protected $Grupo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codtipoinsumo
     *     @type string $Descrip
     *     @type string $Grupo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoinsumo = 1;</code>
     * @return int
     */
    public function getCodtipoinsumo()
    {
        return $this->Codtipoinsumo;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoinsumo = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipoinsumo($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipoinsumo = $var;

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
     * Generated from protobuf field <code>string Grupo = 3;</code>
     * @return string
     */
    public function getGrupo()
    {
        return $this->Grupo;
    }

    /**
     * Generated from protobuf field <code>string Grupo = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGrupo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Grupo = $var;

        return $this;
    }

}

