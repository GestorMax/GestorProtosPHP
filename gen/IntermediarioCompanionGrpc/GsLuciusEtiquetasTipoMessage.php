<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsLuciusEtiquetasTipoMessage</code>
 */
class GsLuciusEtiquetasTipoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtipoetiquetalucius = 1;</code>
     */
    protected $Codtipoetiquetalucius = 0;
    /**
     * Generated from protobuf field <code>string TipoEtiquetaLucius = 2;</code>
     */
    protected $TipoEtiquetaLucius = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codtipoetiquetalucius
     *     @type string $TipoEtiquetaLucius
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoetiquetalucius = 1;</code>
     * @return int
     */
    public function getCodtipoetiquetalucius()
    {
        return $this->Codtipoetiquetalucius;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoetiquetalucius = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipoetiquetalucius($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipoetiquetalucius = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoEtiquetaLucius = 2;</code>
     * @return string
     */
    public function getTipoEtiquetaLucius()
    {
        return $this->TipoEtiquetaLucius;
    }

    /**
     * Generated from protobuf field <code>string TipoEtiquetaLucius = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoEtiquetaLucius($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoEtiquetaLucius = $var;

        return $this;
    }

}

