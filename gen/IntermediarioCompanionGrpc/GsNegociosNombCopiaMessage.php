<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsNegociosNombCopiaMessage</code>
 */
class GsNegociosNombCopiaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 CodplanNegocios = 2;</code>
     */
    protected $CodplanNegocios = 0;
    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 3;</code>
     */
    protected $CodcuentaNegocios = 0;
    /**
     * Generated from protobuf field <code>string Tipooper = 4;</code>
     */
    protected $Tipooper = '';
    /**
     * Generated from protobuf field <code>int32 Copia = 5;</code>
     */
    protected $Copia = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 6;</code>
     */
    protected $Descrip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $CodplanNegocios
     *     @type int $CodcuentaNegocios
     *     @type string $Tipooper
     *     @type int $Copia
     *     @type string $Descrip
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
     * Generated from protobuf field <code>int32 CodplanNegocios = 2;</code>
     * @return int
     */
    public function getCodplanNegocios()
    {
        return $this->CodplanNegocios;
    }

    /**
     * Generated from protobuf field <code>int32 CodplanNegocios = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodplanNegocios($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodplanNegocios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 3;</code>
     * @return int
     */
    public function getCodcuentaNegocios()
    {
        return $this->CodcuentaNegocios;
    }

    /**
     * Generated from protobuf field <code>int32 CodcuentaNegocios = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodcuentaNegocios($var)
    {
        GPBUtil::checkInt32($var);
        $this->CodcuentaNegocios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Tipooper = 4;</code>
     * @return string
     */
    public function getTipooper()
    {
        return $this->Tipooper;
    }

    /**
     * Generated from protobuf field <code>string Tipooper = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTipooper($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipooper = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Copia = 5;</code>
     * @return int
     */
    public function getCopia()
    {
        return $this->Copia;
    }

    /**
     * Generated from protobuf field <code>int32 Copia = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCopia($var)
    {
        GPBUtil::checkInt32($var);
        $this->Copia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 6;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescrip($var)
    {
        GPBUtil::checkString($var, True);
        $this->Descrip = $var;

        return $this;
    }

}

