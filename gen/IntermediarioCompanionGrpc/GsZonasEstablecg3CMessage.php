<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsZonasEstablecg3CMessage</code>
 */
class GsZonasEstablecg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codzona = 1;</code>
     */
    protected $Codzona = 0;
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
     *     @type int $Codzona
     *     @type string $Descrip
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codzona = 1;</code>
     * @return int
     */
    public function getCodzona()
    {
        return $this->Codzona;
    }

    /**
     * Generated from protobuf field <code>int32 Codzona = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodzona($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codzona = $var;

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

