<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsBienDeUsoMessage</code>
 */
class GsBienDeUsoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codbien = 2;</code>
     */
    protected $Codbien = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>double Importe = 4;</code>
     */
    protected $Importe = 0.0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautgst = 6;</code>
     */
    protected $Vidautgst = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valresgst = 7;</code>
     */
    protected $Valresgst = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautcnt = 8;</code>
     */
    protected $Vidautcnt = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Valrescnt = 9;</code>
     */
    protected $Valrescnt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechabaja = 10;</code>
     */
    protected $Fechabaja = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concbaja = 11;</code>
     */
    protected $Concbaja = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codbien
     *     @type string $Descrip
     *     @type float $Importe
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type \ProtoMessages\Int32Message $Vidautgst
     *     @type \ProtoMessages\DoubleMessage $Valresgst
     *     @type \ProtoMessages\Int32Message $Vidautcnt
     *     @type \ProtoMessages\Int32Message $Valrescnt
     *     @type \Google\Protobuf\Timestamp $Fechabaja
     *     @type \ProtoMessages\StringMessage $Concbaja
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
     * Generated from protobuf field <code>int32 Codbien = 2;</code>
     * @return int
     */
    public function getCodbien()
    {
        return $this->Codbien;
    }

    /**
     * Generated from protobuf field <code>int32 Codbien = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodbien($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codbien = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
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
     * Generated from protobuf field <code>double Importe = 4;</code>
     * @return float
     */
    public function getImporte()
    {
        return $this->Importe;
    }

    /**
     * Generated from protobuf field <code>double Importe = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setImporte($var)
    {
        GPBUtil::checkDouble($var);
        $this->Importe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    public function hasFecha()
    {
        return isset($this->Fecha);
    }

    public function clearFecha()
    {
        unset($this->Fecha);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecha($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautgst = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getVidautgst()
    {
        return $this->Vidautgst;
    }

    public function hasVidautgst()
    {
        return isset($this->Vidautgst);
    }

    public function clearVidautgst()
    {
        unset($this->Vidautgst);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautgst = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setVidautgst($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Vidautgst = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valresgst = 7;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getValresgst()
    {
        return $this->Valresgst;
    }

    public function hasValresgst()
    {
        return isset($this->Valresgst);
    }

    public function clearValresgst()
    {
        unset($this->Valresgst);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Valresgst = 7;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setValresgst($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Valresgst = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautcnt = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getVidautcnt()
    {
        return $this->Vidautcnt;
    }

    public function hasVidautcnt()
    {
        return isset($this->Vidautcnt);
    }

    public function clearVidautcnt()
    {
        unset($this->Vidautcnt);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Vidautcnt = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setVidautcnt($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Vidautcnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Valrescnt = 9;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getValrescnt()
    {
        return $this->Valrescnt;
    }

    public function hasValrescnt()
    {
        return isset($this->Valrescnt);
    }

    public function clearValrescnt()
    {
        unset($this->Valrescnt);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Valrescnt = 9;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setValrescnt($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Valrescnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechabaja = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechabaja()
    {
        return $this->Fechabaja;
    }

    public function hasFechabaja()
    {
        return isset($this->Fechabaja);
    }

    public function clearFechabaja()
    {
        unset($this->Fechabaja);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fechabaja = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechabaja($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fechabaja = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concbaja = 11;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getConcbaja()
    {
        return $this->Concbaja;
    }

    public function hasConcbaja()
    {
        return isset($this->Concbaja);
    }

    public function clearConcbaja()
    {
        unset($this->Concbaja);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concbaja = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setConcbaja($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Concbaja = $var;

        return $this;
    }

}

