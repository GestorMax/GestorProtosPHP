<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTiposAvisoMailMessage</code>
 */
class GsTiposAvisoMailMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     */
    protected $Codtipoaviso = 0;
    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     */
    protected $Codempre = 0;
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
     *     @type int $Codtipoaviso
     *     @type int $Codempre
     *     @type string $Descrip
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     * @return int
     */
    public function getCodtipoaviso()
    {
        return $this->Codtipoaviso;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipoaviso($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipoaviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
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

