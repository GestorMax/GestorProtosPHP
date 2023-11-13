<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsModifPadronesIibbMessage</code>
 */
class GsModifPadronesIibbMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Anio = 1;</code>
     */
    protected $Anio = 0;
    /**
     * Generated from protobuf field <code>int32 Mes = 2;</code>
     */
    protected $Mes = 0;
    /**
     * Generated from protobuf field <code>string Cuit = 3;</code>
     */
    protected $Cuit = '';
    /**
     * Generated from protobuf field <code>float Percepcion = 4;</code>
     */
    protected $Percepcion = 0.0;
    /**
     * Generated from protobuf field <code>float Retencion = 5;</code>
     */
    protected $Retencion = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Anio
     *     @type int $Mes
     *     @type string $Cuit
     *     @type float $Percepcion
     *     @type float $Retencion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Anio = 1;</code>
     * @return int
     */
    public function getAnio()
    {
        return $this->Anio;
    }

    /**
     * Generated from protobuf field <code>int32 Anio = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAnio($var)
    {
        GPBUtil::checkInt32($var);
        $this->Anio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Mes = 2;</code>
     * @return int
     */
    public function getMes()
    {
        return $this->Mes;
    }

    /**
     * Generated from protobuf field <code>int32 Mes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMes($var)
    {
        GPBUtil::checkInt32($var);
        $this->Mes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Cuit = 3;</code>
     * @return string
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * Generated from protobuf field <code>string Cuit = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCuit($var)
    {
        GPBUtil::checkString($var, True);
        $this->Cuit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Percepcion = 4;</code>
     * @return float
     */
    public function getPercepcion()
    {
        return $this->Percepcion;
    }

    /**
     * Generated from protobuf field <code>float Percepcion = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPercepcion($var)
    {
        GPBUtil::checkFloat($var);
        $this->Percepcion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Retencion = 5;</code>
     * @return float
     */
    public function getRetencion()
    {
        return $this->Retencion;
    }

    /**
     * Generated from protobuf field <code>float Retencion = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRetencion($var)
    {
        GPBUtil::checkFloat($var);
        $this->Retencion = $var;

        return $this;
    }

}
