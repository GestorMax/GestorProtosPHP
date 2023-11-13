<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsMovsHaciendag3CMessage</code>
 */
class GsMovsHaciendag3CMessage extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string TipoMov = 3;</code>
     */
    protected $TipoMov = '';
    /**
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
     */
    protected $Codproducto = 0;
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproddest = 8;</code>
     */
    protected $Codproddest = null;
    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 9;</code>
     */
    protected $Codestablecimiento = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codestdest = 10;</code>
     */
    protected $Codestdest = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 11;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 12;</code>
     */
    protected $FecAlta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 13;</code>
     */
    protected $UsrAlta = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 14;</code>
     */
    protected $FecModif = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 15;</code>
     */
    protected $UsrModif = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 16;</code>
     */
    protected $FecBaja = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 17;</code>
     */
    protected $UsrBaja = null;
    /**
     * Generated from protobuf field <code>string Estado = 18;</code>
     */
    protected $Estado = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 19;</code>
     */
    protected $Observ = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codmovimiento
     *     @type string $TipoMov
     *     @type int $Codproducto
     *     @type \ProtoMessages\DecimalMessage $Cantparte
     *     @type \ProtoMessages\DecimalMessage $Canttotal
     *     @type \ProtoMessages\DecimalMessage $Coef
     *     @type \ProtoMessages\Int32Message $Codproddest
     *     @type int $Codestablecimiento
     *     @type \ProtoMessages\Int32Message $Codestdest
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type \Google\Protobuf\Timestamp $FecAlta
     *     @type \ProtoMessages\Int32Message $UsrAlta
     *     @type \Google\Protobuf\Timestamp $FecModif
     *     @type \ProtoMessages\Int32Message $UsrModif
     *     @type \Google\Protobuf\Timestamp $FecBaja
     *     @type \ProtoMessages\Int32Message $UsrBaja
     *     @type string $Estado
     *     @type \ProtoMessages\StringMessage $Observ
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
     * Generated from protobuf field <code>string TipoMov = 3;</code>
     * @return string
     */
    public function getTipoMov()
    {
        return $this->TipoMov;
    }

    /**
     * Generated from protobuf field <code>string TipoMov = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoMov($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoMov = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 4;</code>
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

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproddest = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodproddest()
    {
        return $this->Codproddest;
    }

    public function hasCodproddest()
    {
        return isset($this->Codproddest);
    }

    public function clearCodproddest()
    {
        unset($this->Codproddest);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproddest = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodproddest($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codproddest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 9;</code>
     * @return int
     */
    public function getCodestablecimiento()
    {
        return $this->Codestablecimiento;
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCodestablecimiento($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codestablecimiento = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codestdest = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodestdest()
    {
        return $this->Codestdest;
    }

    public function hasCodestdest()
    {
        return isset($this->Codestdest);
    }

    public function clearCodestdest()
    {
        unset($this->Codestdest);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codestdest = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodestdest($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codestdest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 11;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 11;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecAlta()
    {
        return $this->FecAlta;
    }

    public function hasFecAlta()
    {
        return isset($this->FecAlta);
    }

    public function clearFecAlta()
    {
        unset($this->FecAlta);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecAlta = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecAlta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecAlta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 13;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrAlta()
    {
        return $this->UsrAlta;
    }

    public function hasUsrAlta()
    {
        return isset($this->UsrAlta);
    }

    public function clearUsrAlta()
    {
        unset($this->UsrAlta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrAlta = 13;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrAlta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrAlta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 14;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecModif()
    {
        return $this->FecModif;
    }

    public function hasFecModif()
    {
        return isset($this->FecModif);
    }

    public function clearFecModif()
    {
        unset($this->FecModif);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecModif = 14;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecModif($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecModif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrModif()
    {
        return $this->UsrModif;
    }

    public function hasUsrModif()
    {
        return isset($this->UsrModif);
    }

    public function clearUsrModif()
    {
        unset($this->UsrModif);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrModif = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrModif($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrModif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecBaja()
    {
        return $this->FecBaja;
    }

    public function hasFecBaja()
    {
        return isset($this->FecBaja);
    }

    public function clearFecBaja()
    {
        unset($this->FecBaja);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FecBaja = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecBaja($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FecBaja = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 17;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUsrBaja()
    {
        return $this->UsrBaja;
    }

    public function hasUsrBaja()
    {
        return isset($this->UsrBaja);
    }

    public function clearUsrBaja()
    {
        unset($this->UsrBaja);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message UsrBaja = 17;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUsrBaja($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->UsrBaja = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Estado = 18;</code>
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Generated from protobuf field <code>string Estado = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setEstado($var)
    {
        GPBUtil::checkString($var, True);
        $this->Estado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 19;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 19;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setObserv($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Observ = $var;

        return $this;
    }

}
