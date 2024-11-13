<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsCtasCtesCuentaMessage</code>
 */
class GsCtasCtesCuentaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codctacte = 2;</code>
     */
    protected $Codctacte = 0;
    /**
     * Generated from protobuf field <code>int32 Prioridad = 3;</code>
     */
    protected $Prioridad = 0;
    /**
     * Generated from protobuf field <code>int32 Codplan = 4;</code>
     */
    protected $Codplan = 0;
    /**
     * Generated from protobuf field <code>int32 Codcuenta = 5;</code>
     */
    protected $Codcuenta = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDif = 6;</code>
     */
    protected $CodcuentaDif = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDifHaber = 7;</code>
     */
    protected $CodcuentaDifHaber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codctacte
     *     @type int $Prioridad
     *     @type int $Codplan
     *     @type int $Codcuenta
     *     @type \ProtoMessages\Int32Message $CodcuentaDif
     *     @type \ProtoMessages\Int32Message $CodcuentaDifHaber
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
     * Generated from protobuf field <code>int32 Codctacte = 2;</code>
     * @return int
     */
    public function getCodctacte()
    {
        return $this->Codctacte;
    }

    /**
     * Generated from protobuf field <code>int32 Codctacte = 2;</code>
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
     * Generated from protobuf field <code>int32 Codcuenta = 5;</code>
     * @return int
     */
    public function getCodcuenta()
    {
        return $this->Codcuenta;
    }

    /**
     * Generated from protobuf field <code>int32 Codcuenta = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcuenta($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDif = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuentaDif()
    {
        return $this->CodcuentaDif;
    }

    public function hasCodcuentaDif()
    {
        return isset($this->CodcuentaDif);
    }

    public function clearCodcuentaDif()
    {
        unset($this->CodcuentaDif);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDif = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuentaDif($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodcuentaDif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDifHaber = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuentaDifHaber()
    {
        return $this->CodcuentaDifHaber;
    }

    public function hasCodcuentaDifHaber()
    {
        return isset($this->CodcuentaDifHaber);
    }

    public function clearCodcuentaDifHaber()
    {
        unset($this->CodcuentaDifHaber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodcuentaDifHaber = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuentaDifHaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodcuentaDifHaber = $var;

        return $this;
    }

}

