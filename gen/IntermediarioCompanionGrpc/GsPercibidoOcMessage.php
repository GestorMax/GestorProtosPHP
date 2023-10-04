<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPercibidoOcMessage</code>
 */
class GsPercibidoOcMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Percibido = 2;</code>
     */
    protected $Percibido = 0;
    /**
     * Generated from protobuf field <code>int32 OrdenCobro = 3;</code>
     */
    protected $OrdenCobro = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Percibido
     *     @type int $OrdenCobro
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
     * Generated from protobuf field <code>int32 Percibido = 2;</code>
     * @return int
     */
    public function getPercibido()
    {
        return $this->Percibido;
    }

    /**
     * Generated from protobuf field <code>int32 Percibido = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkInt32($var);
        $this->Percibido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 OrdenCobro = 3;</code>
     * @return int
     */
    public function getOrdenCobro()
    {
        return $this->OrdenCobro;
    }

    /**
     * Generated from protobuf field <code>int32 OrdenCobro = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOrdenCobro($var)
    {
        GPBUtil::checkInt32($var);
        $this->OrdenCobro = $var;

        return $this;
    }

}

