<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRelacionesOperativoMessage</code>
 */
class GsRelacionesOperativoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     */
    protected $Numero = 0;
    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>string TipooperRel = 4;</code>
     */
    protected $TipooperRel = '';
    /**
     * Generated from protobuf field <code>int32 NumeroRel = 5;</code>
     */
    protected $NumeroRel = 0;
    /**
     * Generated from protobuf field <code>int32 NumlineaRel = 6;</code>
     */
    protected $NumlineaRel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Numero
     *     @type int $Numlinea
     *     @type string $TipooperRel
     *     @type int $NumeroRel
     *     @type int $NumlineaRel
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
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     * @return int
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Generated from protobuf field <code>int32 Numero = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumero($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @return int
     */
    public function getNumlinea()
    {
        return $this->Numlinea;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlinea($var)
    {
        GPBUtil::checkInt32($var);
        $this->Numlinea = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipooperRel = 4;</code>
     * @return string
     */
    public function getTipooperRel()
    {
        return $this->TipooperRel;
    }

    /**
     * Generated from protobuf field <code>string TipooperRel = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTipooperRel($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipooperRel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroRel = 5;</code>
     * @return int
     */
    public function getNumeroRel()
    {
        return $this->NumeroRel;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroRel = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumeroRel($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumeroRel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaRel = 6;</code>
     * @return int
     */
    public function getNumlineaRel()
    {
        return $this->NumlineaRel;
    }

    /**
     * Generated from protobuf field <code>int32 NumlineaRel = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNumlineaRel($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumlineaRel = $var;

        return $this;
    }

}

