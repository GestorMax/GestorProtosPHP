<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTributosFeMessage</code>
 */
class GsTributosFeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Tipotributo = 1;</code>
     */
    protected $Tipotributo = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 2;</code>
     */
    protected $Codfe = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Tipotributo
     *     @type \ProtoMessages\StringMessage $Codfe
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Tipotributo = 1;</code>
     * @return string
     */
    public function getTipotributo()
    {
        return $this->Tipotributo;
    }

    /**
     * Generated from protobuf field <code>string Tipotributo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTipotributo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipotributo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 2;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodfe()
    {
        return $this->Codfe;
    }

    public function hasCodfe()
    {
        return isset($this->Codfe);
    }

    public function clearCodfe()
    {
        unset($this->Codfe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 2;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodfe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codfe = $var;

        return $this;
    }

}

