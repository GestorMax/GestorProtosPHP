<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRelaPersCcMessage</code>
 */
class GsRelaPersCcMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     */
    protected $Codpersona = 0;
    /**
     * Generated from protobuf field <code>int32 Codctacte = 3;</code>
     */
    protected $Codctacte = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdocpag = 4;</code>
     */
    protected $Tipdocpag = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdoccob = 5;</code>
     */
    protected $Tipdoccob = null;
    /**
     * Generated from protobuf field <code>int32 Codmoneda = 6;</code>
     */
    protected $Codmoneda = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codpersona
     *     @type int $Codctacte
     *     @type \ProtoMessages\Int32Message $Tipdocpag
     *     @type \ProtoMessages\Int32Message $Tipdoccob
     *     @type int $Codmoneda
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
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
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     * @return int
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codctacte = 3;</code>
     * @return int
     */
    public function getCodctacte()
    {
        return $this->Codctacte;
    }

    /**
     * Generated from protobuf field <code>int32 Codctacte = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodctacte($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codctacte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdocpag = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getTipdocpag()
    {
        return $this->Tipdocpag;
    }

    public function hasTipdocpag()
    {
        return isset($this->Tipdocpag);
    }

    public function clearTipdocpag()
    {
        unset($this->Tipdocpag);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdocpag = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setTipdocpag($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Tipdocpag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdoccob = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getTipdoccob()
    {
        return $this->Tipdoccob;
    }

    public function hasTipdoccob()
    {
        return isset($this->Tipdoccob);
    }

    public function clearTipdoccob()
    {
        unset($this->Tipdoccob);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Tipdoccob = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setTipdoccob($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Tipdoccob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codmoneda = 6;</code>
     * @return int
     */
    public function getCodmoneda()
    {
        return $this->Codmoneda;
    }

    /**
     * Generated from protobuf field <code>int32 Codmoneda = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCodmoneda($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codmoneda = $var;

        return $this;
    }

}
