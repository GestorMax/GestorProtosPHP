<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioSharedMessages.FisicosPorVencimientoMessage</code>
 */
class FisicosPorVencimientoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 codempre = 1;</code>
     */
    protected $codempre = 0;
    /**
     * Generated from protobuf field <code>int32 numero = 2;</code>
     */
    protected $numero = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 3;</code>
     */
    protected $fecha = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fechavenc = 4;</code>
     */
    protected $fechavenc = null;
    /**
     * Generated from protobuf field <code>string nombre = 5;</code>
     */
    protected $nombre = '';
    /**
     * Generated from protobuf field <code>string tipooper = 6;</code>
     */
    protected $tipooper = '';
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 7;</code>
     */
    protected $valorcambio = null;
    /**
     * Generated from protobuf field <code>string simbolo = 8;</code>
     */
    protected $simbolo = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codproducto = 9;</code>
     */
    protected $codproducto = null;
    /**
     * Generated from protobuf field <code>string descrip = 10;</code>
     */
    protected $descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage cantparte = 11;</code>
     */
    protected $cantparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidparte = 12;</code>
     */
    protected $unidparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadespartes = 13;</code>
     */
    protected $unidadespartes = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage canttotal = 14;</code>
     */
    protected $canttotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidtotal = 15;</code>
     */
    protected $unidtotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadtotales = 16;</code>
     */
    protected $unidadtotales = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 17;</code>
     */
    protected $importe = null;
    /**
     * Generated from protobuf field <code>double mdebe = 18;</code>
     */
    protected $mdebe = 0.0;
    /**
     * Generated from protobuf field <code>double mhaber = 19;</code>
     */
    protected $mhaber = 0.0;
    /**
     * Generated from protobuf field <code>double debe = 20;</code>
     */
    protected $debe = 0.0;
    /**
     * Generated from protobuf field <code>double haber = 21;</code>
     */
    protected $haber = 0.0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 22;</code>
     */
    protected $percibido = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $codempre
     *     @type int $numero
     *     @type \Google\Protobuf\Timestamp $fecha
     *     @type \Google\Protobuf\Timestamp $fechavenc
     *     @type string $nombre
     *     @type string $tipooper
     *     @type \ProtoMessages\DoubleMessage $valorcambio
     *     @type string $simbolo
     *     @type \ProtoMessages\Int32Message $codproducto
     *     @type string $descrip
     *     @type \ProtoMessages\DoubleMessage $cantparte
     *     @type \ProtoMessages\Int32Message $unidparte
     *     @type \ProtoMessages\StringMessage $unidadespartes
     *     @type \ProtoMessages\DoubleMessage $canttotal
     *     @type \ProtoMessages\Int32Message $unidtotal
     *     @type \ProtoMessages\StringMessage $unidadtotales
     *     @type \ProtoMessages\DoubleMessage $importe
     *     @type float $mdebe
     *     @type float $mhaber
     *     @type float $debe
     *     @type float $haber
     *     @type \ProtoMessages\Int32Message $percibido
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioShared::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 codempre = 1;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->codempre;
    }

    /**
     * Generated from protobuf field <code>int32 codempre = 1;</code>
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
     * Generated from protobuf field <code>int32 numero = 2;</code>
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Generated from protobuf field <code>int32 numero = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkInt32($var);
        $this->numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 3;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp fecha = 3;</code>
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
     * Generated from protobuf field <code>string nombre = 5;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Generated from protobuf field <code>string nombre = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNombre($var)
    {
        GPBUtil::checkString($var, True);
        $this->nombre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tipooper = 6;</code>
     * @return string
     */
    public function getTipooper()
    {
        return $this->tipooper;
    }

    /**
     * Generated from protobuf field <code>string tipooper = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkString($var, True);
        $this->tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 7;</code>
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
     * Generated from protobuf field <code>.protoMessages.DoubleMessage valorcambio = 7;</code>
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
     * Generated from protobuf field <code>string simbolo = 8;</code>
     * @return string
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    /**
     * Generated from protobuf field <code>string simbolo = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSimbolo($var)
    {
        GPBUtil::checkString($var, True);
        $this->simbolo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codproducto = 9;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodproducto()
    {
        return $this->codproducto;
    }

    public function hasCodproducto()
    {
        return isset($this->codproducto);
    }

    public function clearCodproducto()
    {
        unset($this->codproducto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message codproducto = 9;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string descrip = 10;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Generated from protobuf field <code>string descrip = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDescrip($var)
    {
        GPBUtil::checkString($var, True);
        $this->descrip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage cantparte = 11;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getCantparte()
    {
        return $this->cantparte;
    }

    public function hasCantparte()
    {
        return isset($this->cantparte);
    }

    public function clearCantparte()
    {
        unset($this->cantparte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage cantparte = 11;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCantparte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->cantparte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidparte = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUnidparte()
    {
        return $this->unidparte;
    }

    public function hasUnidparte()
    {
        return isset($this->unidparte);
    }

    public function clearUnidparte()
    {
        unset($this->unidparte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidparte = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUnidparte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->unidparte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadespartes = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getUnidadespartes()
    {
        return $this->unidadespartes;
    }

    public function hasUnidadespartes()
    {
        return isset($this->unidadespartes);
    }

    public function clearUnidadespartes()
    {
        unset($this->unidadespartes);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadespartes = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setUnidadespartes($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->unidadespartes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage canttotal = 14;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getCanttotal()
    {
        return $this->canttotal;
    }

    public function hasCanttotal()
    {
        return isset($this->canttotal);
    }

    public function clearCanttotal()
    {
        unset($this->canttotal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage canttotal = 14;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCanttotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->canttotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidtotal = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUnidtotal()
    {
        return $this->unidtotal;
    }

    public function hasUnidtotal()
    {
        return isset($this->unidtotal);
    }

    public function clearUnidtotal()
    {
        unset($this->unidtotal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message unidtotal = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUnidtotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->unidtotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadtotales = 16;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getUnidadtotales()
    {
        return $this->unidadtotales;
    }

    public function hasUnidadtotales()
    {
        return isset($this->unidadtotales);
    }

    public function clearUnidadtotales()
    {
        unset($this->unidadtotales);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage unidadtotales = 16;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setUnidadtotales($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->unidadtotales = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 17;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getImporte()
    {
        return $this->importe;
    }

    public function hasImporte()
    {
        return isset($this->importe);
    }

    public function clearImporte()
    {
        unset($this->importe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage importe = 17;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setImporte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->importe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double mdebe = 18;</code>
     * @return float
     */
    public function getMdebe()
    {
        return $this->mdebe;
    }

    /**
     * Generated from protobuf field <code>double mdebe = 18;</code>
     * @param float $var
     * @return $this
     */
    public function setMdebe($var)
    {
        GPBUtil::checkDouble($var);
        $this->mdebe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double mhaber = 19;</code>
     * @return float
     */
    public function getMhaber()
    {
        return $this->mhaber;
    }

    /**
     * Generated from protobuf field <code>double mhaber = 19;</code>
     * @param float $var
     * @return $this
     */
    public function setMhaber($var)
    {
        GPBUtil::checkDouble($var);
        $this->mhaber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double debe = 20;</code>
     * @return float
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Generated from protobuf field <code>double debe = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setDebe($var)
    {
        GPBUtil::checkDouble($var);
        $this->debe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double haber = 21;</code>
     * @return float
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Generated from protobuf field <code>double haber = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setHaber($var)
    {
        GPBUtil::checkDouble($var);
        $this->haber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 22;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message percibido = 22;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->percibido = $var;

        return $this;
    }

}

