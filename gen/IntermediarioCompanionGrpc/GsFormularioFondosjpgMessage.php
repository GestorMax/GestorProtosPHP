<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsFormularioFondosjpgMessage</code>
 */
class GsFormularioFondosjpgMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codformulario = 1;</code>
     */
    protected $Codformulario = 0;
    /**
     * Generated from protobuf field <code>int32 Codempre = 2;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Tipdoc = 3;</code>
     */
    protected $Tipdoc = 0;
    /**
     * Generated from protobuf field <code>string Tipofact = 4;</code>
     */
    protected $Tipofact = '';
    /**
     * Generated from protobuf field <code>bytes Fondo = 5;</code>
     */
    protected $Fondo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codformulario
     *     @type int $Codempre
     *     @type int $Tipdoc
     *     @type string $Tipofact
     *     @type string $Fondo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codformulario = 1;</code>
     * @return int
     */
    public function getCodformulario()
    {
        return $this->Codformulario;
    }

    /**
     * Generated from protobuf field <code>int32 Codformulario = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodformulario($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codformulario = $var;

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
     * Generated from protobuf field <code>int32 Tipdoc = 3;</code>
     * @return int
     */
    public function getTipdoc()
    {
        return $this->Tipdoc;
    }

    /**
     * Generated from protobuf field <code>int32 Tipdoc = 3;</code>
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
     * Generated from protobuf field <code>string Tipofact = 4;</code>
     * @return string
     */
    public function getTipofact()
    {
        return $this->Tipofact;
    }

    /**
     * Generated from protobuf field <code>string Tipofact = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTipofact($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipofact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Fondo = 5;</code>
     * @return string
     */
    public function getFondo()
    {
        return $this->Fondo;
    }

    /**
     * Generated from protobuf field <code>bytes Fondo = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFondo($var)
    {
        GPBUtil::checkString($var, False);
        $this->Fondo = $var;

        return $this;
    }

}

