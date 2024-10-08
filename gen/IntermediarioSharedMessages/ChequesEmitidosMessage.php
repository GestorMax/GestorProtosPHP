<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioSharedMessages.ChequesEmitidosMessage</code>
 */
class ChequesEmitidosMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orden = 1;</code>
     */
    protected $orden = 0;
    /**
     * Generated from protobuf field <code>int32 codempre = 2;</code>
     */
    protected $codempre = 0;
    /**
     * Generated from protobuf field <code>string clave = 3;</code>
     */
    protected $clave = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcuenta = 4;</code>
     */
    protected $codcuenta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage descripcta = 5;</code>
     */
    protected $descripcta = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 6;</code>
     */
    protected $codpersona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage persona = 7;</code>
     */
    protected $persona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 8;</code>
     */
    protected $percibido = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 9;</code>
     */
    protected $ordenperc = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registro = 10;</code>
     */
    protected $registro = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecemision = 11;</code>
     */
    protected $fecemision = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 12;</code>
     */
    protected $tipdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     */
    protected $numdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 14;</code>
     */
    protected $concepto = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechabanco = 15;</code>
     */
    protected $fechabanco = null;
    /**
     * Generated from protobuf field <code>string diferido = 16;</code>
     */
    protected $diferido = '';
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 17;</code>
     */
    protected $mdebe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 18;</code>
     */
    protected $mhaber = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 19;</code>
     */
    protected $saldo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orden
     *     @type int $codempre
     *     @type string $clave
     *     @type \ProtoMessages\Int32Message $codcuenta
     *     @type \ProtoMessages\StringMessage $descripcta
     *     @type \ProtoMessages\Int32Message $codpersona
     *     @type \ProtoMessages\StringMessage $persona
     *     @type \ProtoMessages\Int32Message $percibido
     *     @type \ProtoMessages\Int32Message $ordenperc
     *     @type \Google\Protobuf\Timestamp $registro
     *     @type \Google\Protobuf\Timestamp $fecemision
     *     @type \ProtoMessages\StringMessage $tipdoc
     *     @type \ProtoMessages\StringMessage $numdoc
     *     @type \ProtoMessages\StringMessage $concepto
     *     @type \Google\Protobuf\Timestamp $fechabanco
     *     @type string $diferido
     *     @type \ProtoMessages\DoubleMessage $mdebe
     *     @type \ProtoMessages\DoubleMessage $mhaber
     *     @type \ProtoMessages\DoubleMessage $saldo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioShared::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 orden = 1;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Generated from protobuf field <code>int32 orden = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOrden($var)
    {
        GPBUtil::checkInt32($var);
        $this->orden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 codempre = 2;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->codempre;
    }

    /**
     * Generated from protobuf field <code>int32 codempre = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodempre($var)
    {
        GPBUtil::checkInt32($var);
        $this->codempre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clave = 3;</code>
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Generated from protobuf field <code>string clave = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClave($var)
    {
        GPBUtil::checkString($var, True);
        $this->clave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcuenta = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcuenta()
    {
        return $this->codcuenta;
    }

    public function hasCodcuenta()
    {
        return isset($this->codcuenta);
    }

    public function clearCodcuenta()
    {
        unset($this->codcuenta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codcuenta = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcuenta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codcuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage descripcta = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDescripcta()
    {
        return $this->descripcta;
    }

    public function hasDescripcta()
    {
        return isset($this->descripcta);
    }

    public function clearDescripcta()
    {
        unset($this->descripcta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage descripcta = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDescripcta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->descripcta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodpersona()
    {
        return $this->codpersona;
    }

    public function hasCodpersona()
    {
        return isset($this->codpersona);
    }

    public function clearCodpersona()
    {
        unset($this->codpersona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage persona = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getPersona()
    {
        return $this->persona;
    }

    public function hasPersona()
    {
        return isset($this->persona);
    }

    public function clearPersona()
    {
        unset($this->persona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage persona = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setPersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->persona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getPercibido()
    {
        return $this->percibido;
    }

    public function hasPercibido()
    {
        return isset($this->percibido);
    }

    public function clearPercibido()
    {
        unset($this->percibido);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->percibido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 9;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getOrdenperc()
    {
        return $this->ordenperc;
    }

    public function hasOrdenperc()
    {
        return isset($this->ordenperc);
    }

    public function clearOrdenperc()
    {
        unset($this->ordenperc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 9;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setOrdenperc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->ordenperc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registro = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    public function hasRegistro()
    {
        return isset($this->registro);
    }

    public function clearRegistro()
    {
        unset($this->registro);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registro = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRegistro($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->registro = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecemision = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecemision()
    {
        return $this->fecemision;
    }

    public function hasFecemision()
    {
        return isset($this->fecemision);
    }

    public function clearFecemision()
    {
        unset($this->fecemision);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecemision = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecemision($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fecemision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 12;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipdoc()
    {
        return $this->tipdoc;
    }

    public function hasTipdoc()
    {
        return isset($this->tipdoc);
    }

    public function clearTipdoc()
    {
        unset($this->tipdoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 12;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipdoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->tipdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNumdoc()
    {
        return $this->numdoc;
    }

    public function hasNumdoc()
    {
        return isset($this->numdoc);
    }

    public function clearNumdoc()
    {
        unset($this->numdoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNumdoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->numdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    public function hasConcepto()
    {
        return isset($this->concepto);
    }

    public function clearConcepto()
    {
        unset($this->concepto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setConcepto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->concepto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechabanco = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechabanco()
    {
        return $this->fechabanco;
    }

    public function hasFechabanco()
    {
        return isset($this->fechabanco);
    }

    public function clearFechabanco()
    {
        unset($this->fechabanco);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechabanco = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechabanco($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fechabanco = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string diferido = 16;</code>
     * @return string
     */
    public function getDiferido()
    {
        return $this->diferido;
    }

    /**
     * Generated from protobuf field <code>string diferido = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setDiferido($var)
    {
        GPBUtil::checkString($var, True);
        $this->diferido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 17;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getMdebe()
    {
        return $this->mdebe;
    }

    public function hasMdebe()
    {
        return isset($this->mdebe);
    }

    public function clearMdebe()
    {
        unset($this->mdebe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 17;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setMdebe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->mdebe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 18;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getMhaber()
    {
        return $this->mhaber;
    }

    public function hasMhaber()
    {
        return isset($this->mhaber);
    }

    public function clearMhaber()
    {
        unset($this->mhaber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 18;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setMhaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->mhaber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 19;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function hasSaldo()
    {
        return isset($this->saldo);
    }

    public function clearSaldo()
    {
        unset($this->saldo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 19;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setSaldo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->saldo = $var;

        return $this;
    }

}

