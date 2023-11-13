<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPasesClasifMessage</code>
 */
class GsPasesClasifMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codclasif = 1;</code>
     */
    protected $Codclasif = 0;
    /**
     * Generated from protobuf field <code>string Clasif = 2;</code>
     */
    protected $Clasif = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codclasif
     *     @type string $Clasif
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codclasif = 1;</code>
     * @return int
     */
    public function getCodclasif()
    {
        return $this->Codclasif;
    }

    /**
     * Generated from protobuf field <code>int32 Codclasif = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodclasif($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codclasif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Clasif = 2;</code>
     * @return string
     */
    public function getClasif()
    {
        return $this->Clasif;
    }

    /**
     * Generated from protobuf field <code>string Clasif = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClasif($var)
    {
        GPBUtil::checkString($var, True);
        $this->Clasif = $var;

        return $this;
    }

}
