<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsCodIndiceMessage</code>
 */
class GsCodIndiceMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     */
    protected $Codindice = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codindice
     *     @type string $Descrip
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     * @return int
     */
    public function getCodindice()
    {
        return $this->Codindice;
    }

    /**
     * Generated from protobuf field <code>int32 Codindice = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodindice($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codindice = $var;

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

}

