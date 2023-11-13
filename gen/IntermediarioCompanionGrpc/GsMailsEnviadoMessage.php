<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsMailsEnviadoMessage</code>
 */
class GsMailsEnviadoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codenvio = 1;</code>
     */
    protected $Codenvio = 0;
    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Numero = 3;</code>
     */
    protected $Numero = 0;
    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 4;</code>
     */
    protected $Codtipoaviso = 0;
    /**
     * Generated from protobuf field <code>int32 Codaviso = 5;</code>
     */
    protected $Codaviso = 0;
    /**
     * Generated from protobuf field <code>int32 Orden = 6;</code>
     */
    protected $Orden = 0;
    /**
     * Generated from protobuf field <code>int32 NroEnvio = 7;</code>
     */
    protected $NroEnvio = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEnvio = 8;</code>
     */
    protected $FechaEnvio = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEvento = 9;</code>
     */
    protected $FechaEvento = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatarios = 10;</code>
     */
    protected $Destinatarios = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codenvio
     *     @type int $Codempre
     *     @type int $Numero
     *     @type int $Codtipoaviso
     *     @type int $Codaviso
     *     @type int $Orden
     *     @type int $NroEnvio
     *     @type \Google\Protobuf\Timestamp $FechaEnvio
     *     @type \Google\Protobuf\Timestamp $FechaEvento
     *     @type \ProtoMessages\StringMessage $Destinatarios
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codenvio = 1;</code>
     * @return int
     */
    public function getCodenvio()
    {
        return $this->Codenvio;
    }

    /**
     * Generated from protobuf field <code>int32 Codenvio = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodenvio($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codenvio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     * @return int
     */
    public function getCodempre()
    {
        return $this->Codempre;
    }

    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
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
     * Generated from protobuf field <code>int32 Numero = 3;</code>
     * @return int
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Generated from protobuf field <code>int32 Numero = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 4;</code>
     * @return int
     */
    public function getCodtipoaviso()
    {
        return $this->Codtipoaviso;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipoaviso($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipoaviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codaviso = 5;</code>
     * @return int
     */
    public function getCodaviso()
    {
        return $this->Codaviso;
    }

    /**
     * Generated from protobuf field <code>int32 Codaviso = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCodaviso($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codaviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 6;</code>
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * Generated from protobuf field <code>int32 Orden = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOrden($var)
    {
        GPBUtil::checkInt32($var);
        $this->Orden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NroEnvio = 7;</code>
     * @return int
     */
    public function getNroEnvio()
    {
        return $this->NroEnvio;
    }

    /**
     * Generated from protobuf field <code>int32 NroEnvio = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNroEnvio($var)
    {
        GPBUtil::checkInt32($var);
        $this->NroEnvio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEnvio = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechaEnvio()
    {
        return $this->FechaEnvio;
    }

    public function hasFechaEnvio()
    {
        return isset($this->FechaEnvio);
    }

    public function clearFechaEnvio()
    {
        unset($this->FechaEnvio);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEnvio = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechaEnvio($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FechaEnvio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEvento = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFechaEvento()
    {
        return $this->FechaEvento;
    }

    public function hasFechaEvento()
    {
        return isset($this->FechaEvento);
    }

    public function clearFechaEvento()
    {
        unset($this->FechaEvento);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp FechaEvento = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFechaEvento($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->FechaEvento = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatarios = 10;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDestinatarios()
    {
        return $this->Destinatarios;
    }

    public function hasDestinatarios()
    {
        return isset($this->Destinatarios);
    }

    public function clearDestinatarios()
    {
        unset($this->Destinatarios);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatarios = 10;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDestinatarios($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Destinatarios = $var;

        return $this;
    }

}
