<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsOrdenesg3CMessage</code>
 */
class GsOrdenesg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codorden = 2;</code>
     */
    protected $Codorden = 0;
    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 3;</code>
     */
    protected $Codestablecimiento = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcampania = 4;</code>
     */
    protected $Codcampania = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroOrden = 5;</code>
     */
    protected $NroOrden = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcontratista = 7;</code>
     */
    protected $Codcontratista = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 8;</code>
     */
    protected $Codresponsable = null;
    /**
     * Generated from protobuf field <code>string TipoOrden = 9;</code>
     */
    protected $TipoOrden = '';
    /**
     * Generated from protobuf field <code>string Estado = 10;</code>
     */
    protected $Estado = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 11;</code>
     */
    protected $Observ = null;
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
     * Generated from protobuf field <code>.protoMessages.StringMessage AplicDirecta = 18;</code>
     */
    protected $AplicDirecta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codorden
     *     @type int $Codestablecimiento
     *     @type \ProtoMessages\Int32Message $Codcampania
     *     @type \ProtoMessages\StringMessage $NroOrden
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type \ProtoMessages\Int32Message $Codcontratista
     *     @type \ProtoMessages\Int32Message $Codresponsable
     *     @type string $TipoOrden
     *     @type string $Estado
     *     @type \ProtoMessages\StringMessage $Observ
     *     @type \Google\Protobuf\Timestamp $FecAlta
     *     @type \ProtoMessages\Int32Message $UsrAlta
     *     @type \Google\Protobuf\Timestamp $FecModif
     *     @type \ProtoMessages\Int32Message $UsrModif
     *     @type \Google\Protobuf\Timestamp $FecBaja
     *     @type \ProtoMessages\Int32Message $UsrBaja
     *     @type \ProtoMessages\StringMessage $AplicDirecta
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
     * Generated from protobuf field <code>int32 Codorden = 2;</code>
     * @return int
     */
    public function getCodorden()
    {
        return $this->Codorden;
    }

    /**
     * Generated from protobuf field <code>int32 Codorden = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodorden($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codorden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 3;</code>
     * @return int
     */
    public function getCodestablecimiento()
    {
        return $this->Codestablecimiento;
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 3;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcampania = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcampania()
    {
        return $this->Codcampania;
    }

    public function hasCodcampania()
    {
        return isset($this->Codcampania);
    }

    public function clearCodcampania()
    {
        unset($this->Codcampania);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcampania = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcampania($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codcampania = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroOrden = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNroOrden()
    {
        return $this->NroOrden;
    }

    public function hasNroOrden()
    {
        return isset($this->NroOrden);
    }

    public function clearNroOrden()
    {
        unset($this->NroOrden);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage NroOrden = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNroOrden($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->NroOrden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcontratista = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodcontratista()
    {
        return $this->Codcontratista;
    }

    public function hasCodcontratista()
    {
        return isset($this->Codcontratista);
    }

    public function clearCodcontratista()
    {
        unset($this->Codcontratista);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codcontratista = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodcontratista($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codcontratista = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodresponsable()
    {
        return $this->Codresponsable;
    }

    public function hasCodresponsable()
    {
        return isset($this->Codresponsable);
    }

    public function clearCodresponsable()
    {
        unset($this->Codresponsable);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codresponsable = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodresponsable($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codresponsable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoOrden = 9;</code>
     * @return string
     */
    public function getTipoOrden()
    {
        return $this->TipoOrden;
    }

    /**
     * Generated from protobuf field <code>string TipoOrden = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoOrden($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoOrden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Estado = 10;</code>
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Generated from protobuf field <code>string Estado = 10;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage AplicDirecta = 18;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getAplicDirecta()
    {
        return $this->AplicDirecta;
    }

    public function hasAplicDirecta()
    {
        return isset($this->AplicDirecta);
    }

    public function clearAplicDirecta()
    {
        unset($this->AplicDirecta);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage AplicDirecta = 18;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setAplicDirecta($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->AplicDirecta = $var;

        return $this;
    }

}

