<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Resource/Messages.proto

namespace IntermediarioGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioGrpcResource.PriceImporterProductRequest</code>
 */
class PriceImporterProductRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .intermediarioCompanionGrpc.GsListasPreciosDetalleMessage values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\IntermediarioCompanionGrpc\GsListasPreciosDetalleMessage>|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .intermediarioCompanionGrpc.GsListasPreciosDetalleMessage values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .intermediarioCompanionGrpc.GsListasPreciosDetalleMessage values = 2;</code>
     * @param array<\IntermediarioCompanionGrpc\GsListasPreciosDetalleMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IntermediarioCompanionGrpc\GsListasPreciosDetalleMessage::class);
        $this->values = $arr;

        return $this;
    }

}

