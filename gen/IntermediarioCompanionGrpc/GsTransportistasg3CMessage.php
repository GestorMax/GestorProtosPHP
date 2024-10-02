<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTransportistasg3CMessage</code>
 */
class GsTransportistasg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtransportista = 1;</code>
     */
    protected $Codtransportista = 0;
    /**
     * Generated from protobuf field <code>string Nombre = 2;</code>
     */
    protected $Nombre = '';
    /**
     * Generated from protobuf field <code>int32 Codempresa = 3;</code>
     */
    protected $Codempresa = 0;
    /**
     * Generated from protobuf field <code>string PatenteCamion = 4;</code>
     */
    protected $PatenteCamion = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage PatenteAcoplado = 5;</code>
     */
    protected $PatenteAcoplado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 6;</code>
     */
    protected $Cuit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codtransportista
     *     @type string $Nombre
     *     @type int $Codempresa
     *     @type string $PatenteCamion
     *     @type \ProtoMessages\StringMessage $PatenteAcoplado
     *     @type \ProtoMessages\StringMessage $Cuit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtransportista = 1;</code>
     * @return int
     */
    public function getCodtransportista()
    {
        return $this->Codtransportista;
    }

    /**
     * Generated from protobuf field <code>int32 Codtransportista = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtransportista($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtransportista = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 2;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNombre($var)
    {
        GPBUtil::checkString($var, True);
        $this->Nombre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codempresa = 3;</code>
     * @return int
     */
    public function getCodempresa()
    {
        return $this->Codempresa;
    }

    /**
     * Generated from protobuf field <code>int32 Codempresa = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodempresa($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codempresa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PatenteCamion = 4;</code>
     * @return string
     */
    public function getPatenteCamion()
    {
        return $this->PatenteCamion;
    }

    /**
     * Generated from protobuf field <code>string PatenteCamion = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPatenteCamion($var)
    {
        GPBUtil::checkString($var, True);
        $this->PatenteCamion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage PatenteAcoplado = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getPatenteAcoplado()
    {
        return $this->PatenteAcoplado;
    }

    public function hasPatenteAcoplado()
    {
        return isset($this->PatenteAcoplado);
    }

    public function clearPatenteAcoplado()
    {
        unset($this->PatenteAcoplado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage PatenteAcoplado = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setPatenteAcoplado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->PatenteAcoplado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 6;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    public function hasCuit()
    {
        return isset($this->Cuit);
    }

    public function clearCuit()
    {
        unset($this->Cuit);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Cuit = 6;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCuit($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Cuit = $var;

        return $this;
    }

}

