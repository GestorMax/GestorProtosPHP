<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsLotesNovedadeMessage</code>
 */
class GsLotesNovedadeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codremate = 1;</code>
     */
    protected $Codremate = 0;
    /**
     * Generated from protobuf field <code>int32 Codlote = 2;</code>
     */
    protected $Codlote = 0;
    /**
     * Generated from protobuf field <code>string Tipooper = 3;</code>
     */
    protected $Tipooper = '';
    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 4;</code>
     */
    protected $Codimpuesto = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valorcalc = 5;</code>
     */
    protected $Valorcalc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Guia = 6;</code>
     */
    protected $Guia = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codremate
     *     @type int $Codlote
     *     @type string $Tipooper
     *     @type int $Codimpuesto
     *     @type \ProtoMessages\DoubleMessage $Valorcalc
     *     @type \ProtoMessages\StringMessage $Guia
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codremate = 1;</code>
     * @return int
     */
    public function getCodremate()
    {
        return $this->Codremate;
    }

    /**
     * Generated from protobuf field <code>int32 Codremate = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodremate($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codremate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codlote = 2;</code>
     * @return int
     */
    public function getCodlote()
    {
        return $this->Codlote;
    }

    /**
     * Generated from protobuf field <code>int32 Codlote = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodlote($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codlote = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Tipooper = 3;</code>
     * @return string
     */
    public function getTipooper()
    {
        return $this->Tipooper;
    }

    /**
     * Generated from protobuf field <code>string Tipooper = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 4;</code>
     * @return int
     */
    public function getCodimpuesto()
    {
        return $this->Codimpuesto;
    }

    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 4;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valorcalc = 5;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getValorcalc()
    {
        return $this->Valorcalc;
    }

    public function hasValorcalc()
    {
        return isset($this->Valorcalc);
    }

    public function clearValorcalc()
    {
        unset($this->Valorcalc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valorcalc = 5;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setValorcalc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Valorcalc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Guia = 6;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getGuia()
    {
        return $this->Guia;
    }

    public function hasGuia()
    {
        return isset($this->Guia);
    }

    public function clearGuia()
    {
        unset($this->Guia);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Guia = 6;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setGuia($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Guia = $var;

        return $this;
    }

}

