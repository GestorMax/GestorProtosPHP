<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPasesCuentaMessage</code>
 */
class GsPasesCuentaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     */
    protected $Codpase = 0;
    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     */
    protected $Prioridad = 0;
    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     */
    protected $Codplan = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentadebe = 5;</code>
     */
    protected $Codcuentadebe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentahaber = 6;</code>
     */
    protected $Codcuentahaber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codpase
     *     @type int $Prioridad
     *     @type int $Codplan
     *     @type \ProtoMessages\Int32Message $Codcuentadebe
     *     @type \ProtoMessages\Int32Message $Codcuentahaber
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
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     * @return int
     */
    public function getCodpase()
    {
        return $this->Codpase;
    }

    /**
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpase($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     * @return int
     */
    public function getPrioridad()
    {
        return $this->Prioridad;
    }

    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPrioridad($var)
    {
        GPBUtil::checkInt32($var);
        $this->Prioridad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     * @return int
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codplan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentadebe = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuentadebe()
    {
        return $this->Codcuentadebe;
    }

    public function hasCodcuentadebe()
    {
        return isset($this->Codcuentadebe);
    }

    public function clearCodcuentadebe()
    {
        unset($this->Codcuentadebe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentadebe = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuentadebe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codcuentadebe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentahaber = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuentahaber()
    {
        return $this->Codcuentahaber;
    }

    public function hasCodcuentahaber()
    {
        return isset($this->Codcuentahaber);
    }

    public function clearCodcuentahaber()
    {
        unset($this->Codcuentahaber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcuentahaber = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuentahaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codcuentahaber = $var;

        return $this;
    }

}

