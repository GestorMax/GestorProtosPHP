<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsOrdenesDetalleg3CMessage</code>
 */
class GsOrdenesDetalleg3CMessage extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>int32 Codcultivo = 4;</code>
     */
    protected $Codcultivo = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 5;</code>
     */
    protected $Codplan = null;
    /**
     * Generated from protobuf field <code>int32 Codproducto = 6;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoEntrega = 7;</code>
     */
    protected $CodremitoEntrega = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoDelovuc = 8;</code>
     */
    protected $CodremitoDelovuc = null;
    /**
     * Generated from protobuf field <code>int32 Coddeposito = 9;</code>
     */
    protected $Coddeposito = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 10;</code>
     */
    protected $Cantparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 11;</code>
     */
    protected $Canttotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 12;</code>
     */
    protected $Coef = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage ProduccionPropia = 13;</code>
     */
    protected $ProduccionPropia = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 14;</code>
     */
    protected $Observ = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Importe = 15;</code>
     */
    protected $Importe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 16;</code>
     */
    protected $Codmoneda = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 17;</code>
     */
    protected $Valorcambio = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codorden
     *     @type int $Numlinea
     *     @type int $Codcultivo
     *     @type \ProtoMessages\Int32Message $Codplan
     *     @type int $Codproducto
     *     @type \ProtoMessages\Int32Message $CodremitoEntrega
     *     @type \ProtoMessages\Int32Message $CodremitoDelovuc
     *     @type int $Coddeposito
     *     @type \ProtoMessages\DecimalMessage $Cantparte
     *     @type \ProtoMessages\DecimalMessage $Canttotal
     *     @type \ProtoMessages\DecimalMessage $Coef
     *     @type \ProtoMessages\StringMessage $ProduccionPropia
     *     @type \ProtoMessages\StringMessage $Observ
     *     @type \ProtoMessages\DecimalMessage $Importe
     *     @type \ProtoMessages\Int32Message $Codmoneda
     *     @type \ProtoMessages\DecimalMessage $Valorcambio
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
     * Generated from protobuf field <code>int32 Codcultivo = 4;</code>
     * @return int
     */
    public function getCodcultivo()
    {
        return $this->Codcultivo;
    }

    /**
     * Generated from protobuf field <code>int32 Codcultivo = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcultivo($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codcultivo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    public function hasCodplan()
    {
        return isset($this->Codplan);
    }

    public function clearCodplan()
    {
        unset($this->Codplan);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codplan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 6;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 6;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoEntrega = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodremitoEntrega()
    {
        return $this->CodremitoEntrega;
    }

    public function hasCodremitoEntrega()
    {
        return isset($this->CodremitoEntrega);
    }

    public function clearCodremitoEntrega()
    {
        unset($this->CodremitoEntrega);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoEntrega = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodremitoEntrega($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodremitoEntrega = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoDelovuc = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodremitoDelovuc()
    {
        return $this->CodremitoDelovuc;
    }

    public function hasCodremitoDelovuc()
    {
        return isset($this->CodremitoDelovuc);
    }

    public function clearCodremitoDelovuc()
    {
        unset($this->CodremitoDelovuc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodremitoDelovuc = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodremitoDelovuc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodremitoDelovuc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Coddeposito = 9;</code>
     * @return int
     */
    public function getCoddeposito()
    {
        return $this->Coddeposito;
    }

    /**
     * Generated from protobuf field <code>int32 Coddeposito = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCoddeposito($var)
    {
        GPBUtil::checkInt32($var);
        $this->Coddeposito = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 10;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Cantparte = 10;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Canttotal = 11;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 12;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 12;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage ProduccionPropia = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getProduccionPropia()
    {
        return $this->ProduccionPropia;
    }

    public function hasProduccionPropia()
    {
        return isset($this->ProduccionPropia);
    }

    public function clearProduccionPropia()
    {
        unset($this->ProduccionPropia);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage ProduccionPropia = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setProduccionPropia($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->ProduccionPropia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 14;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Observ = 14;</code>
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
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Importe = 15;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getImporte()
    {
        return $this->Importe;
    }

    public function hasImporte()
    {
        return isset($this->Importe);
    }

    public function clearImporte()
    {
        unset($this->Importe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Importe = 15;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setImporte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Importe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 16;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodmoneda()
    {
        return $this->Codmoneda;
    }

    public function hasCodmoneda()
    {
        return isset($this->Codmoneda);
    }

    public function clearCodmoneda()
    {
        unset($this->Codmoneda);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 16;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodmoneda($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codmoneda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 17;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getValorcambio()
    {
        return $this->Valorcambio;
    }

    public function hasValorcambio()
    {
        return isset($this->Valorcambio);
    }

    public function clearValorcambio()
    {
        unset($this->Valorcambio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Valorcambio = 17;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setValorcambio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Valorcambio = $var;

        return $this;
    }

}

