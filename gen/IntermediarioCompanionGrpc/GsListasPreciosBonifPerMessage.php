<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsListasPreciosBonifPerMessage</code>
 */
class GsListasPreciosBonifPerMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     */
    protected $Codlista = 0;
    /**
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     */
    protected $Codpersona = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifVentas = 3;</code>
     */
    protected $BonifVentas = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifCompras = 4;</code>
     */
    protected $BonifCompras = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifPases = 5;</code>
     */
    protected $BonifPases = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codlista
     *     @type int $Codpersona
     *     @type \ProtoMessages\DecimalMessage $BonifVentas
     *     @type \ProtoMessages\DecimalMessage $BonifCompras
     *     @type \ProtoMessages\DecimalMessage $BonifPases
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     * @return int
     */
    public function getCodlista()
    {
        return $this->Codlista;
    }

    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodlista($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codlista = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     * @return int
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    /**
     * Generated from protobuf field <code>int32 Codpersona = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifVentas = 3;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifVentas()
    {
        return $this->BonifVentas;
    }

    public function hasBonifVentas()
    {
        return isset($this->BonifVentas);
    }

    public function clearBonifVentas()
    {
        unset($this->BonifVentas);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifVentas = 3;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifVentas($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->BonifVentas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifCompras = 4;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifCompras()
    {
        return $this->BonifCompras;
    }

    public function hasBonifCompras()
    {
        return isset($this->BonifCompras);
    }

    public function clearBonifCompras()
    {
        unset($this->BonifCompras);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifCompras = 4;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifCompras($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->BonifCompras = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifPases = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getBonifPases()
    {
        return $this->BonifPases;
    }

    public function hasBonifPases()
    {
        return isset($this->BonifPases);
    }

    public function clearBonifPases()
    {
        unset($this->BonifPases);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage BonifPases = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setBonifPases($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->BonifPases = $var;

        return $this;
    }

}

