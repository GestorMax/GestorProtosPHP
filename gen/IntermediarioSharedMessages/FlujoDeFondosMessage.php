<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioSharedMessages.FlujoDeFondosMessage</code>
 */
class FlujoDeFondosMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orden = 1;</code>
     */
    protected $orden = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 2;</code>
     */
    protected $codempre = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codctacte = 3;</code>
     */
    protected $codctacte = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 4;</code>
     */
    protected $fechavenc = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp pagoestimado = 5;</code>
     */
    protected $pagoestimado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codpersona = 6;</code>
     */
    protected $codpersona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage persona = 7;</code>
     */
    protected $persona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 8;</code>
     */
    protected $numero = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 9;</code>
     */
    protected $percibido = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codretencion = 10;</code>
     */
    protected $codretencion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 11;</code>
     */
    protected $ordenperc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenrela = 12;</code>
     */
    protected $ordenrela = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codmoneda = 13;</code>
     */
    protected $codmoneda = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipooper = 14;</code>
     */
    protected $tipooper = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 15;</code>
     */
    protected $tipdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 16;</code>
     */
    protected $numdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 17;</code>
     */
    protected $concepto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage simbolo = 18;</code>
     */
    protected $simbolo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 19;</code>
     */
    protected $valorcambio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 20;</code>
     */
    protected $mdebe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 21;</code>
     */
    protected $mhaber = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage debe = 22;</code>
     */
    protected $debe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage haber = 23;</code>
     */
    protected $haber = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 24;</code>
     */
    protected $saldo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message modificado = 25;</code>
     */
    protected $modificado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message color = 26;</code>
     */
    protected $color = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 27;</code>
     */
    protected $fecha = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage cuentadefondos = 28;</code>
     */
    protected $cuentadefondos = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orden
     *     @type \ProtoMessages\Int32Message $codempre
     *     @type \ProtoMessages\Int32Message $codctacte
     *     @type \Google\Protobuf\Timestamp $fechavenc
     *     @type \Google\Protobuf\Timestamp $pagoestimado
     *     @type \ProtoMessages\Int32Message $codpersona
     *     @type \ProtoMessages\StringMessage $persona
     *     @type \ProtoMessages\Int32Message $numero
     *     @type \ProtoMessages\Int32Message $percibido
     *     @type \ProtoMessages\Int32Message $codretencion
     *     @type \ProtoMessages\Int32Message $ordenperc
     *     @type \ProtoMessages\Int32Message $ordenrela
     *     @type \ProtoMessages\Int32Message $codmoneda
     *     @type \ProtoMessages\StringMessage $tipooper
     *     @type \ProtoMessages\StringMessage $tipdoc
     *     @type \ProtoMessages\StringMessage $numdoc
     *     @type \ProtoMessages\StringMessage $concepto
     *     @type \ProtoMessages\StringMessage $simbolo
     *     @type \ProtoMessages\DoubleMessage $valorcambio
     *     @type \ProtoMessages\DoubleMessage $mdebe
     *     @type \ProtoMessages\DoubleMessage $mhaber
     *     @type \ProtoMessages\DoubleMessage $debe
     *     @type \ProtoMessages\DoubleMessage $haber
     *     @type \ProtoMessages\DoubleMessage $saldo
     *     @type \ProtoMessages\Int32Message $modificado
     *     @type \ProtoMessages\Int32Message $color
     *     @type \Google\Protobuf\Timestamp $fecha
     *     @type \ProtoMessages\StringMessage $cuentadefondos
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
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 2;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodempre()
    {
        return $this->codempre;
    }

    public function hasCodempre()
    {
        return isset($this->codempre);
    }

    public function clearCodempre()
    {
        unset($this->codempre);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codempre = 2;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodempre($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codempre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codctacte = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodctacte()
    {
        return $this->codctacte;
    }

    public function hasCodctacte()
    {
        return isset($this->codctacte);
    }

    public function clearCodctacte()
    {
        unset($this->codctacte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codctacte = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodctacte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codctacte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechavenc()
    {
        return $this->fechavenc;
    }

    public function hasFechavenc()
    {
        return isset($this->fechavenc);
    }

    public function clearFechavenc()
    {
        unset($this->fechavenc);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechavenc($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fechavenc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp pagoestimado = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPagoestimado()
    {
        return $this->pagoestimado;
    }

    public function hasPagoestimado()
    {
        return isset($this->pagoestimado);
    }

    public function clearPagoestimado()
    {
        unset($this->pagoestimado);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp pagoestimado = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPagoestimado($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->pagoestimado = $var;

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
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    public function hasNumero()
    {
        return isset($this->numero);
    }

    public function clearNumero()
    {
        unset($this->numero);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message numero = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 9;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 9;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message codretencion = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodretencion()
    {
        return $this->codretencion;
    }

    public function hasCodretencion()
    {
        return isset($this->codretencion);
    }

    public function clearCodretencion()
    {
        unset($this->codretencion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codretencion = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodretencion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codretencion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenperc = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenrela = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getOrdenrela()
    {
        return $this->ordenrela;
    }

    public function hasOrdenrela()
    {
        return isset($this->ordenrela);
    }

    public function clearOrdenrela()
    {
        unset($this->ordenrela);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message ordenrela = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setOrdenrela($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->ordenrela = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codmoneda = 13;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodmoneda()
    {
        return $this->codmoneda;
    }

    public function hasCodmoneda()
    {
        return isset($this->codmoneda);
    }

    public function clearCodmoneda()
    {
        unset($this->codmoneda);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codmoneda = 13;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodmoneda($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codmoneda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipooper = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipooper()
    {
        return $this->tipooper;
    }

    public function hasTipooper()
    {
        return isset($this->tipooper);
    }

    public function clearTipooper()
    {
        unset($this->tipooper);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipooper = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 15;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage tipdoc = 15;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 16;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage numdoc = 16;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 17;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage concepto = 17;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage simbolo = 18;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    public function hasSimbolo()
    {
        return isset($this->simbolo);
    }

    public function clearSimbolo()
    {
        unset($this->simbolo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage simbolo = 18;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setSimbolo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->simbolo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 19;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getValorcambio()
    {
        return $this->valorcambio;
    }

    public function hasValorcambio()
    {
        return isset($this->valorcambio);
    }

    public function clearValorcambio()
    {
        unset($this->valorcambio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 19;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setValorcambio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->valorcambio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 20;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mdebe = 20;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 21;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage mhaber = 21;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage debe = 22;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getDebe()
    {
        return $this->debe;
    }

    public function hasDebe()
    {
        return isset($this->debe);
    }

    public function clearDebe()
    {
        unset($this->debe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage debe = 22;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setDebe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->debe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage haber = 23;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getHaber()
    {
        return $this->haber;
    }

    public function hasHaber()
    {
        return isset($this->haber);
    }

    public function clearHaber()
    {
        unset($this->haber);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage haber = 23;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setHaber($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->haber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 24;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage saldo = 24;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setSaldo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->saldo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message modificado = 25;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    public function hasModificado()
    {
        return isset($this->modificado);
    }

    public function clearModificado()
    {
        unset($this->modificado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message modificado = 25;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setModificado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->modificado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message color = 26;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getColor()
    {
        return $this->color;
    }

    public function hasColor()
    {
        return isset($this->color);
    }

    public function clearColor()
    {
        unset($this->color);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message color = 26;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->color = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 27;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    public function hasFecha()
    {
        return isset($this->fecha);
    }

    public function clearFecha()
    {
        unset($this->fecha);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 27;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecha($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage cuentadefondos = 28;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCuentadefondos()
    {
        return $this->cuentadefondos;
    }

    public function hasCuentadefondos()
    {
        return isset($this->cuentadefondos);
    }

    public function clearCuentadefondos()
    {
        unset($this->cuentadefondos);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage cuentadefondos = 28;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCuentadefondos($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->cuentadefondos = $var;

        return $this;
    }

}

