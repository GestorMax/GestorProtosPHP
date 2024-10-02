<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRemitosFacturaMessage</code>
 */
class GsRemitosFacturaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 NumeroFact = 2;</code>
     */
    protected $NumeroFact = 0;
    /**
     * Generated from protobuf field <code>int32 NumlineaFact = 3;</code>
     */
    protected $NumlineaFact = 0;
    /**
     * Generated from protobuf field <code>int32 NumeroRemito = 4;</code>
     */
    protected $NumeroRemito = 0;
    /**
     * Generated from protobuf field <code>int32 NumlineaRemito = 5;</code>
     */
    protected $NumlineaRemito = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $NumeroFact
     *     @type int $NumlineaFact
     *     @type int $NumeroRemito
     *     @type int $NumlineaRemito
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
     * Generated from protobuf field <code>int32 NumeroFact = 2;</code>
     * @return int
     */
    public function getNumeroFact()
    {
        return $this->NumeroFact;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroFact = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumeroFact($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumeroFact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaFact = 3;</code>
     * @return int
     */
    public function getNumlineaFact()
    {
        return $this->NumlineaFact;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaFact = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlineaFact($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumlineaFact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroRemito = 4;</code>
     * @return int
     */
    public function getNumeroRemito()
    {
        return $this->NumeroRemito;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroRemito = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumeroRemito($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumeroRemito = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaRemito = 5;</code>
     * @return int
     */
    public function getNumlineaRemito()
    {
        return $this->NumlineaRemito;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaRemito = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlineaRemito($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumlineaRemito = $var;

        return $this;
    }

}

