<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsLimiteCreditoMessage</code>
 */
class GsLimiteCreditoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 CodlimiteCredito = 1;</code>
     */
    protected $CodlimiteCredito = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage LimiteCredito = 3;</code>
     */
    protected $LimiteCredito = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CodlimiteCredito
     *     @type string $Descrip
     *     @type \ProtoMessages\DecimalMessage $LimiteCredito
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 CodlimiteCredito = 1;</code>
     * @return int
     */
    public function getCodlimiteCredito()
    {
        return $this->CodlimiteCredito;
    }

    /**
     * Generated from protobuf field <code>int32 CodlimiteCredito = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodlimiteCredito($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodlimiteCredito = $var;

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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage LimiteCredito = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getLimiteCredito()
    {
        return $this->LimiteCredito;
    }

    public function hasLimiteCredito()
    {
        return isset($this->LimiteCredito);
    }

    public function clearLimiteCredito()
    {
        unset($this->LimiteCredito);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage LimiteCredito = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setLimiteCredito($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->LimiteCredito = $var;

        return $this;
    }

}
