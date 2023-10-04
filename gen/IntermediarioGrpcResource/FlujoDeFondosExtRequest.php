<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Resource/Messages.proto

namespace IntermediarioGrpcResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioGrpcResource.FlujoDeFondosExtRequest</code>
 */
class FlujoDeFondosExtRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string soloGestion = 1;</code>
     */
    protected $soloGestion = '';
    /**
     * Generated from protobuf field <code>bool incluirSaldosIniciales = 2;</code>
     */
    protected $incluirSaldosIniciales = false;
    /**
     * Generated from protobuf field <code>bool incluirOperativos = 3;</code>
     */
    protected $incluirOperativos = false;
    /**
     * Generated from protobuf field <code>bool incluirFinancieros = 4;</code>
     */
    protected $incluirFinancieros = false;
    /**
     * Generated from protobuf field <code>bool incluirVencidos = 5;</code>
     */
    protected $incluirVencidos = false;
    /**
     * Generated from protobuf field <code>bool incluirAVencer = 6;</code>
     */
    protected $incluirAVencer = false;
    /**
     * Generated from protobuf field <code>bool incluirImportesPositivos = 7;</code>
     */
    protected $incluirImportesPositivos = false;
    /**
     * Generated from protobuf field <code>bool incluirImportesNegativos = 8;</code>
     */
    protected $incluirImportesNegativos = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $soloGestion
     *     @type bool $incluirSaldosIniciales
     *     @type bool $incluirOperativos
     *     @type bool $incluirFinancieros
     *     @type bool $incluirVencidos
     *     @type bool $incluirAVencer
     *     @type bool $incluirImportesPositivos
     *     @type bool $incluirImportesNegativos
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Resource\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string soloGestion = 1;</code>
     * @return string
     */
    public function getSoloGestion()
    {
        return $this->soloGestion;
    }

    /**
     * Generated from protobuf field <code>string soloGestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSoloGestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->soloGestion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirSaldosIniciales = 2;</code>
     * @return bool
     */
    public function getIncluirSaldosIniciales()
    {
        return $this->incluirSaldosIniciales;
    }

    /**
     * Generated from protobuf field <code>bool incluirSaldosIniciales = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirSaldosIniciales($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirSaldosIniciales = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirOperativos = 3;</code>
     * @return bool
     */
    public function getIncluirOperativos()
    {
        return $this->incluirOperativos;
    }

    /**
     * Generated from protobuf field <code>bool incluirOperativos = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirOperativos($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirOperativos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirFinancieros = 4;</code>
     * @return bool
     */
    public function getIncluirFinancieros()
    {
        return $this->incluirFinancieros;
    }

    /**
     * Generated from protobuf field <code>bool incluirFinancieros = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirFinancieros($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirFinancieros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirVencidos = 5;</code>
     * @return bool
     */
    public function getIncluirVencidos()
    {
        return $this->incluirVencidos;
    }

    /**
     * Generated from protobuf field <code>bool incluirVencidos = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirVencidos($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirVencidos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirAVencer = 6;</code>
     * @return bool
     */
    public function getIncluirAVencer()
    {
        return $this->incluirAVencer;
    }

    /**
     * Generated from protobuf field <code>bool incluirAVencer = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirAVencer($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirAVencer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirImportesPositivos = 7;</code>
     * @return bool
     */
    public function getIncluirImportesPositivos()
    {
        return $this->incluirImportesPositivos;
    }

    /**
     * Generated from protobuf field <code>bool incluirImportesPositivos = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirImportesPositivos($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirImportesPositivos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incluirImportesNegativos = 8;</code>
     * @return bool
     */
    public function getIncluirImportesNegativos()
    {
        return $this->incluirImportesNegativos;
    }

    /**
     * Generated from protobuf field <code>bool incluirImportesNegativos = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncluirImportesNegativos($var)
    {
        GPBUtil::checkBool($var);
        $this->incluirImportesNegativos = $var;

        return $this;
    }

}

