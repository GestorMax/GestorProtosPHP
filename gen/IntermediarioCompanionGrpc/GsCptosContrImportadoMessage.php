<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsCptosContrImportadoMessage</code>
 */
class GsCptosContrImportadoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codimportacion = 2;</code>
     */
    protected $Codimportacion = 0;
    /**
     * Generated from protobuf field <code>int32 Codperscontr = 3;</code>
     */
    protected $Codperscontr = 0;
    /**
     * Generated from protobuf field <code>string Nombre = 4;</code>
     */
    protected $Nombre = '';
    /**
     * Generated from protobuf field <code>string Cuit = 5;</code>
     */
    protected $Cuit = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
     */
    protected $Fecha = null;
    /**
     * Generated from protobuf field <code>string TipoDoc = 7;</code>
     */
    protected $TipoDoc = '';
    /**
     * Generated from protobuf field <code>string TipoFact = 8;</code>
     */
    protected $TipoFact = '';
    /**
     * Generated from protobuf field <code>int32 NroFact = 9;</code>
     */
    protected $NroFact = 0;
    /**
     * Generated from protobuf field <code>int32 Numlinea = 10;</code>
     */
    protected $Numlinea = 0;
    /**
     * Generated from protobuf field <code>int32 CantCptos = 11;</code>
     */
    protected $CantCptos = 0;
    /**
     * Generated from protobuf field <code>string CodcptoContrato = 12;</code>
     */
    protected $CodcptoContrato = '';
    /**
     * Generated from protobuf field <code>string Concepto = 13;</code>
     */
    protected $Concepto = '';
    /**
     * Generated from protobuf field <code>double Total = 14;</code>
     */
    protected $Total = 0.0;
    /**
     * Generated from protobuf field <code>double NoGravado = 15;</code>
     */
    protected $NoGravado = 0.0;
    /**
     * Generated from protobuf field <code>double Gravado21 = 16;</code>
     */
    protected $Gravado21 = 0.0;
    /**
     * Generated from protobuf field <code>double Iva21 = 17;</code>
     */
    protected $Iva21 = 0.0;
    /**
     * Generated from protobuf field <code>double Gravado27 = 18;</code>
     */
    protected $Gravado27 = 0.0;
    /**
     * Generated from protobuf field <code>double Iva27 = 19;</code>
     */
    protected $Iva27 = 0.0;
    /**
     * Generated from protobuf field <code>double Gravado105 = 20;</code>
     */
    protected $Gravado105 = 0.0;
    /**
     * Generated from protobuf field <code>double Iva105 = 21;</code>
     */
    protected $Iva105 = 0.0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroG3 = 22;</code>
     */
    protected $NumeroG3 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codimportacion
     *     @type int $Codperscontr
     *     @type string $Nombre
     *     @type string $Cuit
     *     @type \Google\Protobuf\Timestamp $Fecha
     *     @type string $TipoDoc
     *     @type string $TipoFact
     *     @type int $NroFact
     *     @type int $Numlinea
     *     @type int $CantCptos
     *     @type string $CodcptoContrato
     *     @type string $Concepto
     *     @type float $Total
     *     @type float $NoGravado
     *     @type float $Gravado21
     *     @type float $Iva21
     *     @type float $Gravado27
     *     @type float $Iva27
     *     @type float $Gravado105
     *     @type float $Iva105
     *     @type \ProtoMessages\Int32Message $NumeroG3
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
     * Generated from protobuf field <code>int32 Codimportacion = 2;</code>
     * @return int
     */
    public function getCodimportacion()
    {
        return $this->Codimportacion;
    }

    /**
     * Generated from protobuf field <code>int32 Codimportacion = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodimportacion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codimportacion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codperscontr = 3;</code>
     * @return int
     */
    public function getCodperscontr()
    {
        return $this->Codperscontr;
    }

    /**
     * Generated from protobuf field <code>int32 Codperscontr = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCodperscontr($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codperscontr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 4;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Generated from protobuf field <code>string Nombre = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNombre($var)
    {
        GPBUtil::checkString($var, True);
        $this->Nombre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Cuit = 5;</code>
     * @return string
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * Generated from protobuf field <code>string Cuit = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    public function hasFecha()
    {
        return isset($this->Fecha);
    }

    public function clearFecha()
    {
        unset($this->Fecha);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp Fecha = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFecha($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->Fecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoDoc = 7;</code>
     * @return string
     */
    public function getTipoDoc()
    {
        return $this->TipoDoc;
    }

    /**
     * Generated from protobuf field <code>string TipoDoc = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoDoc($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoDoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoFact = 8;</code>
     * @return string
     */
    public function getTipoFact()
    {
        return $this->TipoFact;
    }

    /**
     * Generated from protobuf field <code>string TipoFact = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoFact($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoFact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 NroFact = 9;</code>
     * @return int
     */
    public function getNroFact()
    {
        return $this->NroFact;
    }

    /**
     * Generated from protobuf field <code>int32 NroFact = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNroFact($var)
    {
        GPBUtil::checkInt32($var);
        $this->NroFact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 10;</code>
     * @return int
     */
    public function getNumlinea()
    {
        return $this->Numlinea;
    }

    /**
     * Generated from protobuf field <code>int32 Numlinea = 10;</code>
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
     * Generated from protobuf field <code>int32 CantCptos = 11;</code>
     * @return int
     */
    public function getCantCptos()
    {
        return $this->CantCptos;
    }

    /**
     * Generated from protobuf field <code>int32 CantCptos = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCantCptos($var)
    {
        GPBUtil::checkInt32($var);
        $this->CantCptos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CodcptoContrato = 12;</code>
     * @return string
     */
    public function getCodcptoContrato()
    {
        return $this->CodcptoContrato;
    }

    /**
     * Generated from protobuf field <code>string CodcptoContrato = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCodcptoContrato($var)
    {
        GPBUtil::checkString($var, True);
        $this->CodcptoContrato = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Concepto = 13;</code>
     * @return string
     */
    public function getConcepto()
    {
        return $this->Concepto;
    }

    /**
     * Generated from protobuf field <code>string Concepto = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setConcepto($var)
    {
        GPBUtil::checkString($var, True);
        $this->Concepto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Total = 14;</code>
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Generated from protobuf field <code>double Total = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkDouble($var);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double NoGravado = 15;</code>
     * @return float
     */
    public function getNoGravado()
    {
        return $this->NoGravado;
    }

    /**
     * Generated from protobuf field <code>double NoGravado = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setNoGravado($var)
    {
        GPBUtil::checkDouble($var);
        $this->NoGravado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Gravado21 = 16;</code>
     * @return float
     */
    public function getGravado21()
    {
        return $this->Gravado21;
    }

    /**
     * Generated from protobuf field <code>double Gravado21 = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setGravado21($var)
    {
        GPBUtil::checkDouble($var);
        $this->Gravado21 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Iva21 = 17;</code>
     * @return float
     */
    public function getIva21()
    {
        return $this->Iva21;
    }

    /**
     * Generated from protobuf field <code>double Iva21 = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setIva21($var)
    {
        GPBUtil::checkDouble($var);
        $this->Iva21 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Gravado27 = 18;</code>
     * @return float
     */
    public function getGravado27()
    {
        return $this->Gravado27;
    }

    /**
     * Generated from protobuf field <code>double Gravado27 = 18;</code>
     * @param float $var
     * @return $this
     */
    public function setGravado27($var)
    {
        GPBUtil::checkDouble($var);
        $this->Gravado27 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Iva27 = 19;</code>
     * @return float
     */
    public function getIva27()
    {
        return $this->Iva27;
    }

    /**
     * Generated from protobuf field <code>double Iva27 = 19;</code>
     * @param float $var
     * @return $this
     */
    public function setIva27($var)
    {
        GPBUtil::checkDouble($var);
        $this->Iva27 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Gravado105 = 20;</code>
     * @return float
     */
    public function getGravado105()
    {
        return $this->Gravado105;
    }

    /**
     * Generated from protobuf field <code>double Gravado105 = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setGravado105($var)
    {
        GPBUtil::checkDouble($var);
        $this->Gravado105 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Iva105 = 21;</code>
     * @return float
     */
    public function getIva105()
    {
        return $this->Iva105;
    }

    /**
     * Generated from protobuf field <code>double Iva105 = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setIva105($var)
    {
        GPBUtil::checkDouble($var);
        $this->Iva105 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroG3 = 22;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getNumeroG3()
    {
        return $this->NumeroG3;
    }

    public function hasNumeroG3()
    {
        return isset($this->NumeroG3);
    }

    public function clearNumeroG3()
    {
        unset($this->NumeroG3);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message NumeroG3 = 22;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setNumeroG3($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->NumeroG3 = $var;

        return $this;
    }

}

