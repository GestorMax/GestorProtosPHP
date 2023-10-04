<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsCiudadesg3CMessage</code>
 */
class GsCiudadesg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codciudad = 1;</code>
     */
    protected $Codciudad = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codprov = 3;</code>
     */
    protected $Codprov = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codciudad
     *     @type string $Descrip
     *     @type \ProtoMessages\StringMessage $Codprov
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codciudad = 1;</code>
     * @return int
     */
    public function getCodciudad()
    {
        return $this->Codciudad;
    }

    /**
     * Generated from protobuf field <code>int32 Codciudad = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodciudad($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codciudad = $var;

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
     * Generated from protobuf field <code>.protoMessages.StringMessage Codprov = 3;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodprov()
    {
        return $this->Codprov;
    }

    public function hasCodprov()
    {
        return isset($this->Codprov);
    }

    public function clearCodprov()
    {
        unset($this->Codprov);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codprov = 3;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodprov($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codprov = $var;

        return $this;
    }

}

