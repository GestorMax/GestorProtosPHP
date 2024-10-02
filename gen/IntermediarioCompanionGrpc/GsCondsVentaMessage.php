<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsCondsVentaMessage</code>
 */
class GsCondsVentaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 CodcondVenta = 1;</code>
     */
    protected $CodcondVenta = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string Defecto = 3;</code>
     */
    protected $Defecto = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasDiferidoVentas = 4;</code>
     */
    protected $DiasDiferidoVentas = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CodcondVenta
     *     @type string $Descrip
     *     @type string $Defecto
     *     @type \ProtoMessages\Int32Message $DiasDiferidoVentas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 CodcondVenta = 1;</code>
     * @return int
     */
    public function getCodcondVenta()
    {
        return $this->CodcondVenta;
    }

    /**
     * Generated from protobuf field <code>int32 CodcondVenta = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcondVenta($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodcondVenta = $var;

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
     * Generated from protobuf field <code>string Defecto = 3;</code>
     * @return string
     */
    public function getDefecto()
    {
        return $this->Defecto;
    }

    /**
     * Generated from protobuf field <code>string Defecto = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDefecto($var)
    {
        GPBUtil::checkString($var, True);
        $this->Defecto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasDiferidoVentas = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDiasDiferidoVentas()
    {
        return $this->DiasDiferidoVentas;
    }

    public function hasDiasDiferidoVentas()
    {
        return isset($this->DiasDiferidoVentas);
    }

    public function clearDiasDiferidoVentas()
    {
        unset($this->DiasDiferidoVentas);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasDiferidoVentas = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDiasDiferidoVentas($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DiasDiferidoVentas = $var;

        return $this;
    }

}

