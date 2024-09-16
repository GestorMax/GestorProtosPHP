<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsProductosElaboradosDetalleMessage</code>
 */
class GsProductosElaboradosDetalleMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 CodprodElab = 1;</code>
     */
    protected $CodprodElab = 0;
    /**
     * Generated from protobuf field <code>int32 Numlinea = 2;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>int32 Codproducto = 3;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantparte = 4;</code>
     */
    protected $Cantparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Canttotal = 5;</code>
     */
    protected $Canttotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 6;</code>
     */
    protected $Coef = null;
    /**
     * Generated from protobuf field <code>int32 Dia = 7;</code>
     */
    protected $Dia = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 8;</code>
     */
    protected $Observ = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantneta = 9;</code>
     */
    protected $Cantneta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CodprodElab
     *     @type int $Numlinea
     *     @type int $Codproducto
     *     @type \ProtoMessages\DoubleMessage $Cantparte
     *     @type \ProtoMessages\DoubleMessage $Canttotal
     *     @type \ProtoMessages\DecimalMessage $Coef
     *     @type int $Dia
     *     @type \ProtoMessages\StringMessage $Observ
     *     @type \ProtoMessages\DoubleMessage $Cantneta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 CodprodElab = 1;</code>
     * @return int
     */
    public function getCodprodElab()
    {
        return $this->CodprodElab;
    }

    /**
     * Generated from protobuf field <code>int32 CodprodElab = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodprodElab($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodprodElab = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 2;</code>
     * @return int
     */
    public function getNumlinea()
    {
        return $this->Numlinea;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 2;</code>
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
     * Generated from protobuf field <code>int32 Codproducto = 3;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 3;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantparte = 4;</code>
     * @return \ProtoMessages\DoubleMessage|null
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantparte = 4;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCantparte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Cantparte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Canttotal = 5;</code>
     * @return \ProtoMessages\DoubleMessage|null
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Canttotal = 5;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCanttotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Canttotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 6;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 6;</code>
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
     * Generated from protobuf field <code>int32 Dia = 7;</code>
     * @return int
     */
    public function getDia()
    {
        return $this->Dia;
    }

    /**
     * Generated from protobuf field <code>int32 Dia = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDia($var)
    {
        GPBUtil::checkInt32($var);
        $this->Dia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getObserv()
    {
        return $this->Observ;
    }

    public function hasObserv()
    {
        return isset($this->Observ);
    }

    public function clearObserv()
    {
        unset($this->Observ);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setObserv($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Observ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantneta = 9;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getCantneta()
    {
        return $this->Cantneta;
    }

    public function hasCantneta()
    {
        return isset($this->Cantneta);
    }

    public function clearCantneta()
    {
        unset($this->Cantneta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Cantneta = 9;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCantneta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Cantneta = $var;

        return $this;
    }

}

