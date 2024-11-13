<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsImpuestosCierreMessage</code>
 */
class GsImpuestosCierreMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 2;</code>
     */
    protected $Codimpuesto = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Feccierre = 3;</code>
     */
    protected $Feccierre = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codimpuesto
     *     @type \Google\Protobuf\Timestamp $Feccierre
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
     * Generated from protobuf field <code>int32 Codimpuesto = 2;</code>
     * @return int
     */
    public function getCodimpuesto()
    {
        return $this->Codimpuesto;
    }

    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodimpuesto($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codimpuesto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Feccierre = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFeccierre()
    {
        return $this->Feccierre;
    }

    public function hasFeccierre()
    {
        return isset($this->Feccierre);
    }

    public function clearFeccierre()
    {
        unset($this->Feccierre);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Feccierre = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFeccierre($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Feccierre = $var;

        return $this;
    }

}

