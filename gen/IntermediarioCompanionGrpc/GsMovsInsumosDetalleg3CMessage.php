<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsMovsInsumosDetalleg3CMessage</code>
 */
class GsMovsInsumosDetalleg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codmovimiento = 2;</code>
     */
    protected $Codmovimiento = 0;
    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 4;</code>
     */
    protected $Codproducto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 5;</code>
     */
    protected $Cantparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 6;</code>
     */
    protected $Canttotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 7;</code>
     */
    protected $Coef = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codmovimiento
     *     @type int $Numlinea
     *     @type \ProtoMessages\Int32Message $Codproducto
     *     @type \ProtoMessages\DecimalMessage $Cantparte
     *     @type \ProtoMessages\DecimalMessage $Canttotal
     *     @type \ProtoMessages\DecimalMessage $Coef
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
     * Generated from protobuf field <code>int32 Codmovimiento = 2;</code>
     * @return int
     */
    public function getCodmovimiento()
    {
        return $this->Codmovimiento;
    }

    /**
     * Generated from protobuf field <code>int32 Codmovimiento = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodmovimiento($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codmovimiento = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @return int
     */
    public function getNumlinea()
    {
        return $this->Numlinea;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlinea($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numlinea = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    public function hasCodproducto()
    {
        return isset($this->Codproducto);
    }

    public function clearCodproducto()
    {
        unset($this->Codproducto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getCantparte()
    {
        return $this->Cantparte;
    }

    public function hasCantparte()
    {
        return isset($this->Cantparte);
    }

    public function clearCantparte()
    {
        unset($this->Cantparte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setCantparte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Cantparte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 6;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getCanttotal()
    {
        return $this->Canttotal;
    }

    public function hasCanttotal()
    {
        return isset($this->Canttotal);
    }

    public function clearCanttotal()
    {
        unset($this->Canttotal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 6;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setCanttotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Canttotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 7;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 7;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setCoef($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Coef = $var;

        return $this;
    }

}

