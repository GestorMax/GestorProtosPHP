<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsImportarPaseMessage</code>
 */
class GsImportarPaseMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Idimportacion = 2;</code>
     */
    protected $Idimportacion = 0;
    /**
     * Generated from protobuf field <code>int32 Idreferencia = 3;</code>
     */
    protected $Idreferencia = 0;
    /**
     * Generated from protobuf field <code>int32 Idagrupapase = 4;</code>
     */
    protected $Idagrupapase = 0;
    /**
     * Generated from protobuf field <code>int32 NumeroGestor = 5;</code>
     */
    protected $NumeroGestor = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Idimportacion
     *     @type int $Idreferencia
     *     @type int $Idagrupapase
     *     @type int $NumeroGestor
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
     * Generated from protobuf field <code>int32 Idimportacion = 2;</code>
     * @return int
     */
    public function getIdimportacion()
    {
        return $this->Idimportacion;
    }

    /**
     * Generated from protobuf field <code>int32 Idimportacion = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIdimportacion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Idimportacion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Idreferencia = 3;</code>
     * @return int
     */
    public function getIdreferencia()
    {
        return $this->Idreferencia;
    }

    /**
     * Generated from protobuf field <code>int32 Idreferencia = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIdreferencia($var)
    {
        GPBUtil::checkInt32($var);
        $this->Idreferencia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Idagrupapase = 4;</code>
     * @return int
     */
    public function getIdagrupapase()
    {
        return $this->Idagrupapase;
    }

    /**
     * Generated from protobuf field <code>int32 Idagrupapase = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIdagrupapase($var)
    {
        GPBUtil::checkInt32($var);
        $this->Idagrupapase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroGestor = 5;</code>
     * @return int
     */
    public function getNumeroGestor()
    {
        return $this->NumeroGestor;
    }

    /**
     * Generated from protobuf field <code>int32 NumeroGestor = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumeroGestor($var)
    {
        GPBUtil::checkInt32($var);
        $this->NumeroGestor = $var;

        return $this;
    }

}

