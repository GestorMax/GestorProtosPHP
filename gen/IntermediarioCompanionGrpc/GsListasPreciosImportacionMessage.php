<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsListasPreciosImportacionMessage</code>
 */
class GsListasPreciosImportacionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     */
    protected $Codlista = 0;
    /**
     * Generated from protobuf field <code>int32 Codproducto = 2;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 3;</code>
     */
    protected $Coef = null;
    /**
     * Generated from protobuf field <code>int32 Codmoneda = 4;</code>
     */
    protected $Codmoneda = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codlista
     *     @type int $Codproducto
     *     @type \ProtoMessages\DecimalMessage $Coef
     *     @type int $Codmoneda
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     * @return int
     */
    public function getCodlista()
    {
        return $this->Codlista;
    }

    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodlista($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codlista = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 2;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getCoef()
    {
        return $this->Coef;
    }

    public function hasCoef()
    {
        return isset($this->Coef);
    }

    public function clearCoef()
    {
        unset($this->Coef);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setCoef($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Coef = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codmoneda = 4;</code>
     * @return int
     */
    public function getCodmoneda()
    {
        return $this->Codmoneda;
    }

    /**
     * Generated from protobuf field <code>int32 Codmoneda = 4;</code>
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

