<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsUsuarioMessage</code>
 */
class GsUsuarioMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codusuario = 1;</code>
     */
    protected $Codusuario = 0;
    /**
     * Generated from protobuf field <code>string Nombre = 2;</code>
     */
    protected $Nombre = '';
    /**
     * Generated from protobuf field <code>string Alias = 3;</code>
     */
    protected $Alias = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage EMail = 4;</code>
     */
    protected $EMail = null;
    /**
     * Generated from protobuf field <code>string Habilitado = 5;</code>
     */
    protected $Habilitado = '';
    /**
     * Generated from protobuf field <code>bytes Contrasenia = 6;</code>
     */
    protected $Contrasenia = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FirmaMail = 7;</code>
     */
    protected $FirmaMail = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codsucursal = 8;</code>
     */
    protected $Codsucursal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloPasesConfig = 9;</code>
     */
    protected $SoloPasesConfig = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloGestion = 10;</code>
     */
    protected $SoloGestion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage GestorIdUser = 11;</code>
     */
    protected $GestorIdUser = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codusuario
     *     @type string $Nombre
     *     @type string $Alias
     *     @type \ProtoMessages\StringMessage $EMail
     *     @type string $Habilitado
     *     @type string $Contrasenia
     *     @type \ProtoMessages\StringMessage $FirmaMail
     *     @type \ProtoMessages\Int32Message $Codsucursal
     *     @type \ProtoMessages\StringMessage $SoloPasesConfig
     *     @type \ProtoMessages\StringMessage $SoloGestion
     *     @type \ProtoMessages\StringMessage $GestorIdUser
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codusuario = 1;</code>
     * @return int
     */
    public function getCodusuario()
    {
        return $this->Codusuario;
    }

    /**
     * Generated from protobuf field <code>int32 Codusuario = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodusuario($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codusuario = $var;

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
     * Generated from protobuf field <code>string Alias = 3;</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->Alias;
    }

    /**
     * Generated from protobuf field <code>string Alias = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->Alias = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage EMail = 4;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    public function hasEMail()
    {
        return isset($this->EMail);
    }

    public function clearEMail()
    {
        unset($this->EMail);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage EMail = 4;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setEMail($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->EMail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Habilitado = 5;</code>
     * @return string
     */
    public function getHabilitado()
    {
        return $this->Habilitado;
    }

    /**
     * Generated from protobuf field <code>string Habilitado = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHabilitado($var)
    {
        GPBUtil::checkString($var, True);
        $this->Habilitado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Contrasenia = 6;</code>
     * @return string
     */
    public function getContrasenia()
    {
        return $this->Contrasenia;
    }

    /**
     * Generated from protobuf field <code>bytes Contrasenia = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setContrasenia($var)
    {
        GPBUtil::checkString($var, False);
        $this->Contrasenia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FirmaMail = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getFirmaMail()
    {
        return $this->FirmaMail;
    }

    public function hasFirmaMail()
    {
        return isset($this->FirmaMail);
    }

    public function clearFirmaMail()
    {
        unset($this->FirmaMail);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage FirmaMail = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setFirmaMail($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->FirmaMail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codsucursal = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodsucursal()
    {
        return $this->Codsucursal;
    }

    public function hasCodsucursal()
    {
        return isset($this->Codsucursal);
    }

    public function clearCodsucursal()
    {
        unset($this->Codsucursal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codsucursal = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodsucursal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codsucursal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloPasesConfig = 9;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getSoloPasesConfig()
    {
        return $this->SoloPasesConfig;
    }

    public function hasSoloPasesConfig()
    {
        return isset($this->SoloPasesConfig);
    }

    public function clearSoloPasesConfig()
    {
        unset($this->SoloPasesConfig);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloPasesConfig = 9;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setSoloPasesConfig($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->SoloPasesConfig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloGestion = 10;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getSoloGestion()
    {
        return $this->SoloGestion;
    }

    public function hasSoloGestion()
    {
        return isset($this->SoloGestion);
    }

    public function clearSoloGestion()
    {
        unset($this->SoloGestion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage SoloGestion = 10;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setSoloGestion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->SoloGestion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage GestorIdUser = 11;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getGestorIdUser()
    {
        return $this->GestorIdUser;
    }

    public function hasGestorIdUser()
    {
        return isset($this->GestorIdUser);
    }

    public function clearGestorIdUser()
    {
        unset($this->GestorIdUser);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage GestorIdUser = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setGestorIdUser($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->GestorIdUser = $var;

        return $this;
    }

}
