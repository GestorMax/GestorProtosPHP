<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsEstablecimientosg3CMessage</code>
 */
class GsEstablecimientosg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 1;</code>
     */
    protected $Codestablecimiento = 0;
    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>string Nombre = 3;</code>
     */
    protected $Nombre = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codciudad = 4;</code>
     */
    protected $Codciudad = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codzona = 5;</code>
     */
    protected $Codzona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Coddestinoteorico = 6;</code>
     */
    protected $Coddestinoteorico = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Direccion = 7;</code>
     */
    protected $Direccion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Renspa = 8;</code>
     */
    protected $Renspa = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codestablecimiento
     *     @type int $Codempre
     *     @type string $Nombre
     *     @type \ProtoMessages\Int32Message $Codciudad
     *     @type \ProtoMessages\Int32Message $Codzona
     *     @type \ProtoMessages\Int32Message $Coddestinoteorico
     *     @type \ProtoMessages\StringMessage $Direccion
     *     @type \ProtoMessages\StringMessage $Renspa
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 1;</code>
     * @return int
     */
    public function getCodestablecimiento()
    {
        return $this->Codestablecimiento;
    }

    /**
     * Generated from protobuf field <code>int32 Codestablecimiento = 1;</code>
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
     * Generated from protobuf field <code>string Nombre = 3;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 3;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codciudad = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodciudad()
    {
        return $this->Codciudad;
    }

    public function hasCodciudad()
    {
        return isset($this->Codciudad);
    }

    public function clearCodciudad()
    {
        unset($this->Codciudad);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codciudad = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodciudad($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codciudad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codzona = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodzona()
    {
        return $this->Codzona;
    }

    public function hasCodzona()
    {
        return isset($this->Codzona);
    }

    public function clearCodzona()
    {
        unset($this->Codzona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codzona = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodzona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codzona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Coddestinoteorico = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCoddestinoteorico()
    {
        return $this->Coddestinoteorico;
    }

    public function hasCoddestinoteorico()
    {
        return isset($this->Coddestinoteorico);
    }

    public function clearCoddestinoteorico()
    {
        unset($this->Coddestinoteorico);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Coddestinoteorico = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCoddestinoteorico($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Coddestinoteorico = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Direccion = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    public function hasDireccion()
    {
        return isset($this->Direccion);
    }

    public function clearDireccion()
    {
        unset($this->Direccion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Direccion = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDireccion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Direccion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Renspa = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getRenspa()
    {
        return $this->Renspa;
    }

    public function hasRenspa()
    {
        return isset($this->Renspa);
    }

    public function clearRenspa()
    {
        unset($this->Renspa);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Renspa = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setRenspa($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Renspa = $var;

        return $this;
    }

}
