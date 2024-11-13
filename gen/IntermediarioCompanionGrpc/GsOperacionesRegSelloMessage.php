<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsOperacionesRegSelloMessage</code>
 */
class GsOperacionesRegSelloMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 PrioridadNegocios = 2;</code>
     */
    protected $PrioridadNegocios = 0;
    /**
     * Generated from protobuf field <code>int32 CodplanNegocios = 3;</code>
     */
    protected $CodplanNegocios = 0;
    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 4;</code>
     */
    protected $CodcuentaNegocios = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codoperacion = 5;</code>
     */
    protected $Codoperacion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LugarOrigen = 6;</code>
     */
    protected $LugarOrigen = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $PrioridadNegocios
     *     @type int $CodplanNegocios
     *     @type int $CodcuentaNegocios
     *     @type \ProtoMessages\Int32Message $Codoperacion
     *     @type \ProtoMessages\StringMessage $LugarOrigen
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
     * Generated from protobuf field <code>int32 PrioridadNegocios = 2;</code>
     * @return int
     */
    public function getPrioridadNegocios()
    {
        return $this->PrioridadNegocios;
    }

    /**
     * Generated from protobuf field <code>int32 PrioridadNegocios = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPrioridadNegocios($var)
    {
        GPBUtil::checkInt32($var);
        $this->PrioridadNegocios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CodplanNegocios = 3;</code>
     * @return int
     */
    public function getCodplanNegocios()
    {
        return $this->CodplanNegocios;
    }

    /**
     * Generated from protobuf field <code>int32 CodplanNegocios = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodplanNegocios($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodplanNegocios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 4;</code>
     * @return int
     */
    public function getCodcuentaNegocios()
    {
        return $this->CodcuentaNegocios;
    }

    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcuentaNegocios($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodcuentaNegocios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codoperacion = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodoperacion()
    {
        return $this->Codoperacion;
    }

    public function hasCodoperacion()
    {
        return isset($this->Codoperacion);
    }

    public function clearCodoperacion()
    {
        unset($this->Codoperacion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codoperacion = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodoperacion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codoperacion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LugarOrigen = 6;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getLugarOrigen()
    {
        return $this->LugarOrigen;
    }

    public function hasLugarOrigen()
    {
        return isset($this->LugarOrigen);
    }

    public function clearLugarOrigen()
    {
        unset($this->LugarOrigen);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LugarOrigen = 6;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setLugarOrigen($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->LugarOrigen = $var;

        return $this;
    }

}

