<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsImpuestoMessage</code>
 */
class GsImpuestoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 1;</code>
     */
    protected $Codimpuesto = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 3;</code>
     */
    protected $Concepto = null;
    /**
     * Generated from protobuf field <code>string Impogrupo = 4;</code>
     */
    protected $Impogrupo = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 5;</code>
     */
    protected $Codgrupo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Tasa = 6;</code>
     */
    protected $Tasa = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipooper = 7;</code>
     */
    protected $Tipooper = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Gravada = 8;</code>
     */
    protected $Gravada = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 9;</code>
     */
    protected $Codfiscal = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigDesde = 10;</code>
     */
    protected $VigDesde = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigHasta = 11;</code>
     */
    protected $VigHasta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipocalc = 12;</code>
     */
    protected $Tipocalc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codivafe = 13;</code>
     */
    protected $Codivafe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipotributoFe = 14;</code>
     */
    protected $TipotributoFe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcentAplicar = 15;</code>
     */
    protected $PorcentAplicar = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Padron = 16;</code>
     */
    protected $Padron = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaError = 17;</code>
     */
    protected $TasaError = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfelsp = 18;</code>
     */
    protected $Codfelsp = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg13 = 19;</code>
     */
    protected $TasaCateg13 = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg47 = 20;</code>
     */
    protected $TasaCateg47 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codimpuesto
     *     @type string $Descrip
     *     @type \ProtoMessages\StringMessage $Concepto
     *     @type string $Impogrupo
     *     @type \ProtoMessages\Int32Message $Codgrupo
     *     @type \ProtoMessages\DoubleMessage $Tasa
     *     @type \ProtoMessages\StringMessage $Tipooper
     *     @type \ProtoMessages\StringMessage $Gravada
     *     @type \ProtoMessages\StringMessage $Codfiscal
     *     @type \Google\Protobuf\Timestamp $VigDesde
     *     @type \Google\Protobuf\Timestamp $VigHasta
     *     @type \ProtoMessages\StringMessage $Tipocalc
     *     @type \ProtoMessages\StringMessage $Codivafe
     *     @type \ProtoMessages\StringMessage $TipotributoFe
     *     @type \ProtoMessages\DoubleMessage $PorcentAplicar
     *     @type \ProtoMessages\StringMessage $Padron
     *     @type \ProtoMessages\DoubleMessage $TasaError
     *     @type \ProtoMessages\StringMessage $Codfelsp
     *     @type \ProtoMessages\DoubleMessage $TasaCateg13
     *     @type \ProtoMessages\DoubleMessage $TasaCateg47
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 1;</code>
     * @return int
     */
    public function getCodimpuesto()
    {
        return $this->Codimpuesto;
    }

    /**
     * Generated from protobuf field <code>int32 Codimpuesto = 1;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 3;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getConcepto()
    {
        return $this->Concepto;
    }

    public function hasConcepto()
    {
        return isset($this->Concepto);
    }

    public function clearConcepto()
    {
        unset($this->Concepto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Concepto = 3;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setConcepto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Concepto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Impogrupo = 4;</code>
     * @return string
     */
    public function getImpogrupo()
    {
        return $this->Impogrupo;
    }

    /**
     * Generated from protobuf field <code>string Impogrupo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setImpogrupo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Impogrupo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodgrupo()
    {
        return $this->Codgrupo;
    }

    public function hasCodgrupo()
    {
        return isset($this->Codgrupo);
    }

    public function clearCodgrupo()
    {
        unset($this->Codgrupo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodgrupo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codgrupo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Tasa = 6;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getTasa()
    {
        return $this->Tasa;
    }

    public function hasTasa()
    {
        return isset($this->Tasa);
    }

    public function clearTasa()
    {
        unset($this->Tasa);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Tasa = 6;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setTasa($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Tasa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipooper = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipooper()
    {
        return $this->Tipooper;
    }

    public function hasTipooper()
    {
        return isset($this->Tipooper);
    }

    public function clearTipooper()
    {
        unset($this->Tipooper);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipooper = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Gravada = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getGravada()
    {
        return $this->Gravada;
    }

    public function hasGravada()
    {
        return isset($this->Gravada);
    }

    public function clearGravada()
    {
        unset($this->Gravada);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Gravada = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setGravada($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Gravada = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodfiscal()
    {
        return $this->Codfiscal;
    }

    public function hasCodfiscal()
    {
        return isset($this->Codfiscal);
    }

    public function clearCodfiscal()
    {
        unset($this->Codfiscal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodfiscal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codfiscal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigDesde = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVigDesde()
    {
        return $this->VigDesde;
    }

    public function hasVigDesde()
    {
        return isset($this->VigDesde);
    }

    public function clearVigDesde()
    {
        unset($this->VigDesde);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigDesde = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVigDesde($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->VigDesde = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigHasta = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVigHasta()
    {
        return $this->VigHasta;
    }

    public function hasVigHasta()
    {
        return isset($this->VigHasta);
    }

    public function clearVigHasta()
    {
        unset($this->VigHasta);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp VigHasta = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVigHasta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->VigHasta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipocalc = 12;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipocalc()
    {
        return $this->Tipocalc;
    }

    public function hasTipocalc()
    {
        return isset($this->Tipocalc);
    }

    public function clearTipocalc()
    {
        unset($this->Tipocalc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Tipocalc = 12;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipocalc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Tipocalc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codivafe = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodivafe()
    {
        return $this->Codivafe;
    }

    public function hasCodivafe()
    {
        return isset($this->Codivafe);
    }

    public function clearCodivafe()
    {
        unset($this->Codivafe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codivafe = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodivafe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codivafe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipotributoFe = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipotributoFe()
    {
        return $this->TipotributoFe;
    }

    public function hasTipotributoFe()
    {
        return isset($this->TipotributoFe);
    }

    public function clearTipotributoFe()
    {
        unset($this->TipotributoFe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipotributoFe = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipotributoFe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipotributoFe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcentAplicar = 15;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getPorcentAplicar()
    {
        return $this->PorcentAplicar;
    }

    public function hasPorcentAplicar()
    {
        return isset($this->PorcentAplicar);
    }

    public function clearPorcentAplicar()
    {
        unset($this->PorcentAplicar);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcentAplicar = 15;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setPorcentAplicar($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->PorcentAplicar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Padron = 16;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getPadron()
    {
        return $this->Padron;
    }

    public function hasPadron()
    {
        return isset($this->Padron);
    }

    public function clearPadron()
    {
        unset($this->Padron);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Padron = 16;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setPadron($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Padron = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaError = 17;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getTasaError()
    {
        return $this->TasaError;
    }

    public function hasTasaError()
    {
        return isset($this->TasaError);
    }

    public function clearTasaError()
    {
        unset($this->TasaError);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaError = 17;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setTasaError($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->TasaError = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfelsp = 18;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodfelsp()
    {
        return $this->Codfelsp;
    }

    public function hasCodfelsp()
    {
        return isset($this->Codfelsp);
    }

    public function clearCodfelsp()
    {
        unset($this->Codfelsp);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfelsp = 18;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodfelsp($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codfelsp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg13 = 19;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getTasaCateg13()
    {
        return $this->TasaCateg13;
    }

    public function hasTasaCateg13()
    {
        return isset($this->TasaCateg13);
    }

    public function clearTasaCateg13()
    {
        unset($this->TasaCateg13);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg13 = 19;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setTasaCateg13($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->TasaCateg13 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg47 = 20;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getTasaCateg47()
    {
        return $this->TasaCateg47;
    }

    public function hasTasaCateg47()
    {
        return isset($this->TasaCateg47);
    }

    public function clearTasaCateg47()
    {
        unset($this->TasaCateg47);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage TasaCateg47 = 20;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setTasaCateg47($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->TasaCateg47 = $var;

        return $this;
    }

}

