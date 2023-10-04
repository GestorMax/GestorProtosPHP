<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRazaMessage</code>
 */
class GsRazaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codraza = 1;</code>
     */
    protected $Codraza = 0;
    /**
     * Generated from protobuf field <code>string Raza = 2;</code>
     */
    protected $Raza = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codafip = 3;</code>
     */
    protected $Codafip = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codraza
     *     @type string $Raza
     *     @type \ProtoMessages\Int32Message $Codafip
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codraza = 1;</code>
     * @return int
     */
    public function getCodraza()
    {
        return $this->Codraza;
    }

    /**
     * Generated from protobuf field <code>int32 Codraza = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodraza($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codraza = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Raza = 2;</code>
     * @return string
     */
    public function getRaza()
    {
        return $this->Raza;
    }

    /**
     * Generated from protobuf field <code>string Raza = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRaza($var)
    {
        GPBUtil::checkString($var, True);
        $this->Raza = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codafip = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodafip()
    {
        return $this->Codafip;
    }

    public function hasCodafip()
    {
        return isset($this->Codafip);
    }

    public function clearCodafip()
    {
        unset($this->Codafip);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codafip = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodafip($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codafip = $var;

        return $this;
    }

}

