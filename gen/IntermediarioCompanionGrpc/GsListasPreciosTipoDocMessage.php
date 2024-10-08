<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsListasPreciosTipoDocMessage</code>
 */
class GsListasPreciosTipoDocMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codlista = 1;</code>
     */
    protected $Codlista = 0;
    /**
     * Generated from protobuf field <code>int32 Tipdoc = 2;</code>
     */
    protected $Tipdoc = 0;
    /**
     * Generated from protobuf field <code>string PuntosVenta = 3;</code>
     */
    protected $PuntosVenta = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codlista
     *     @type int $Tipdoc
     *     @type string $PuntosVenta
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
     * Generated from protobuf field <code>int32 Tipdoc = 2;</code>
     * @return int
     */
    public function getTipdoc()
    {
        return $this->Tipdoc;
    }

    /**
     * Generated from protobuf field <code>int32 Tipdoc = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTipdoc($var)
    {
        GPBUtil::checkInt32($var);
        $this->Tipdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PuntosVenta = 3;</code>
     * @return string
     */
    public function getPuntosVenta()
    {
        return $this->PuntosVenta;
    }

    /**
     * Generated from protobuf field <code>string PuntosVenta = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPuntosVenta($var)
    {
        GPBUtil::checkString($var, True);
        $this->PuntosVenta = $var;

        return $this;
    }

}

