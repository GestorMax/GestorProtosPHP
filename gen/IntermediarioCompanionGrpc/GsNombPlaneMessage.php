<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsNombPlaneMessage</code>
 */
class GsNombPlaneMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codplan = 1;</code>
     */
    protected $Codplan = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultEjercicio = 3;</code>
     */
    protected $CtaResultEjercicio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultAnteriores = 4;</code>
     */
    protected $CtaResultAnteriores = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaRedond = 5;</code>
     */
    protected $CtaPerdidaRedond = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaRedond = 6;</code>
     */
    protected $CtaGananciaRedond = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaDifCambio = 7;</code>
     */
    protected $CtaPerdidaDifCambio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaDifCambio = 8;</code>
     */
    protected $CtaGananciaDifCambio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPlan = 9;</code>
     */
    protected $TipoPlan = null;
    /**
     * Generated from protobuf field <code>string BloquearCtas = 10;</code>
     */
    protected $BloquearCtas = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codempre = 11;</code>
     */
    protected $Codempre = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codplan
     *     @type string $Descrip
     *     @type \ProtoMessages\Int32Message $CtaResultEjercicio
     *     @type \ProtoMessages\Int32Message $CtaResultAnteriores
     *     @type \ProtoMessages\Int32Message $CtaPerdidaRedond
     *     @type \ProtoMessages\Int32Message $CtaGananciaRedond
     *     @type \ProtoMessages\Int32Message $CtaPerdidaDifCambio
     *     @type \ProtoMessages\Int32Message $CtaGananciaDifCambio
     *     @type \ProtoMessages\StringMessage $TipoPlan
     *     @type string $BloquearCtas
     *     @type \ProtoMessages\Int32Message $Codempre
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 1;</code>
     * @return int
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    /**
     * Generated from protobuf field <code>int32 Codplan = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codplan = $var;

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
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultEjercicio = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaResultEjercicio()
    {
        return $this->CtaResultEjercicio;
    }

    public function hasCtaResultEjercicio()
    {
        return isset($this->CtaResultEjercicio);
    }

    public function clearCtaResultEjercicio()
    {
        unset($this->CtaResultEjercicio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultEjercicio = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaResultEjercicio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaResultEjercicio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultAnteriores = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaResultAnteriores()
    {
        return $this->CtaResultAnteriores;
    }

    public function hasCtaResultAnteriores()
    {
        return isset($this->CtaResultAnteriores);
    }

    public function clearCtaResultAnteriores()
    {
        unset($this->CtaResultAnteriores);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaResultAnteriores = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaResultAnteriores($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaResultAnteriores = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaRedond = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaPerdidaRedond()
    {
        return $this->CtaPerdidaRedond;
    }

    public function hasCtaPerdidaRedond()
    {
        return isset($this->CtaPerdidaRedond);
    }

    public function clearCtaPerdidaRedond()
    {
        unset($this->CtaPerdidaRedond);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaRedond = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaPerdidaRedond($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaPerdidaRedond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaRedond = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaGananciaRedond()
    {
        return $this->CtaGananciaRedond;
    }

    public function hasCtaGananciaRedond()
    {
        return isset($this->CtaGananciaRedond);
    }

    public function clearCtaGananciaRedond()
    {
        unset($this->CtaGananciaRedond);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaRedond = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaGananciaRedond($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaGananciaRedond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaDifCambio = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaPerdidaDifCambio()
    {
        return $this->CtaPerdidaDifCambio;
    }

    public function hasCtaPerdidaDifCambio()
    {
        return isset($this->CtaPerdidaDifCambio);
    }

    public function clearCtaPerdidaDifCambio()
    {
        unset($this->CtaPerdidaDifCambio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaPerdidaDifCambio = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaPerdidaDifCambio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaPerdidaDifCambio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaDifCambio = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCtaGananciaDifCambio()
    {
        return $this->CtaGananciaDifCambio;
    }

    public function hasCtaGananciaDifCambio()
    {
        return isset($this->CtaGananciaDifCambio);
    }

    public function clearCtaGananciaDifCambio()
    {
        unset($this->CtaGananciaDifCambio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CtaGananciaDifCambio = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCtaGananciaDifCambio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CtaGananciaDifCambio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPlan = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipoPlan()
    {
        return $this->TipoPlan;
    }

    public function hasTipoPlan()
    {
        return isset($this->TipoPlan);
    }

    public function clearTipoPlan()
    {
        unset($this->TipoPlan);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPlan = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipoPlan($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipoPlan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BloquearCtas = 10;</code>
     * @return string
     */
    public function getBloquearCtas()
    {
        return $this->BloquearCtas;
    }

    /**
     * Generated from protobuf field <code>string BloquearCtas = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setBloquearCtas($var)
    {
        GPBUtil::checkString($var, True);
        $this->BloquearCtas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codempre = 11;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    public function hasCodempre()
    {
        return isset($this->Codempre);
    }

    public function clearCodempre()
    {
        unset($this->Codempre);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codempre = 11;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodempre($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codempre = $var;

        return $this;
    }

}

