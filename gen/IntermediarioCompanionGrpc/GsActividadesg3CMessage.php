<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsActividadesg3CMessage</code>
 */
class GsActividadesg3CMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codactividad = 1;</code>
     */
    protected $Codactividad = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 3;</code>
     */
    protected $Codproducto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     */
    protected $PrecioTn = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codactividad
     *     @type string $Descrip
     *     @type \ProtoMessages\Int32Message $Codproducto
     *     @type \ProtoMessages\DecimalMessage $PrecioTn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codactividad = 1;</code>
     * @return int
     */
    public function getCodactividad()
    {
        return $this->Codactividad;
    }

    /**
     * Generated from protobuf field <code>int32 Codactividad = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodactividad($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codactividad = $var;

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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    public function hasCodproducto()
    {
        return isset($this->Codproducto);
    }

    public function clearCodproducto()
    {
        unset($this->Codproducto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getPrecioTn()
    {
        return $this->PrecioTn;
    }

    public function hasPrecioTn()
    {
        return isset($this->PrecioTn);
    }

    public function clearPrecioTn()
    {
        unset($this->PrecioTn);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage PrecioTn = 4;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setPrecioTn($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->PrecioTn = $var;

        return $this;
    }

}

