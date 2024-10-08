<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsRetencioneMessage</code>
 */
class GsRetencioneMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codretencion = 1;</code>
     */
    protected $Codretencion = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codacreedor = 3;</code>
     */
    protected $Codacreedor = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codimpuesto = 4;</code>
     */
    protected $Codimpuesto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage RetencionMinima = 5;</code>
     */
    protected $RetencionMinima = null;
    /**
     * Generated from protobuf field <code>string TipoReten = 6;</code>
     */
    protected $TipoReten = '';
    /**
     * Generated from protobuf field <code>string UsaRubros = 7;</code>
     */
    protected $UsaRubros = '';
    /**
     * Generated from protobuf field <code>string UsaZonas = 8;</code>
     */
    protected $UsaZonas = '';
    /**
     * Generated from protobuf field <code>string TieneAcreedor = 9;</code>
     */
    protected $TieneAcreedor = '';
    /**
     * Generated from protobuf field <code>string Calculo = 10;</code>
     */
    protected $Calculo = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codinterno = 11;</code>
     */
    protected $Codinterno = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     */
    protected $Codplan = null;
    /**
     * Generated from protobuf field <code>string Obligatoria = 13;</code>
     */
    protected $Obligatoria = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DiscriminaFaena = 14;</code>
     */
    protected $DiscriminaFaena = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcAgropecuaria = 15;</code>
     */
    protected $PorcAgropecuaria = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcMatarife = 16;</code>
     */
    protected $PorcMatarife = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codjurisdicc = 17;</code>
     */
    protected $Codjurisdicc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CalcularSobrePago = 18;</code>
     */
    protected $CalcularSobrePago = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codcondicion = 19;</code>
     */
    protected $Codcondicion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codretencion
     *     @type string $Descrip
     *     @type \ProtoMessages\Int32Message $Codacreedor
     *     @type \ProtoMessages\Int32Message $Codimpuesto
     *     @type \ProtoMessages\DecimalMessage $RetencionMinima
     *     @type string $TipoReten
     *     @type string $UsaRubros
     *     @type string $UsaZonas
     *     @type string $TieneAcreedor
     *     @type string $Calculo
     *     @type \ProtoMessages\StringMessage $Codinterno
     *     @type \ProtoMessages\Int32Message $Codplan
     *     @type string $Obligatoria
     *     @type \ProtoMessages\StringMessage $DiscriminaFaena
     *     @type \ProtoMessages\DoubleMessage $PorcAgropecuaria
     *     @type \ProtoMessages\DoubleMessage $PorcMatarife
     *     @type \ProtoMessages\StringMessage $Codjurisdicc
     *     @type \ProtoMessages\StringMessage $CalcularSobrePago
     *     @type \ProtoMessages\StringMessage $Codcondicion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codretencion = 1;</code>
     * @return int
     */
    public function getCodretencion()
    {
        return $this->Codretencion;
    }

    /**
     * Generated from protobuf field <code>int32 Codretencion = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodretencion($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codretencion = $var;

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
     * Generated from protobuf field <code>.protoMessages.Int32Message Codacreedor = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodacreedor()
    {
        return $this->Codacreedor;
    }

    public function hasCodacreedor()
    {
        return isset($this->Codacreedor);
    }

    public function clearCodacreedor()
    {
        unset($this->Codacreedor);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codacreedor = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodacreedor($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codacreedor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codimpuesto = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodimpuesto()
    {
        return $this->Codimpuesto;
    }

    public function hasCodimpuesto()
    {
        return isset($this->Codimpuesto);
    }

    public function clearCodimpuesto()
    {
        unset($this->Codimpuesto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codimpuesto = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodimpuesto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codimpuesto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage RetencionMinima = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getRetencionMinima()
    {
        return $this->RetencionMinima;
    }

    public function hasRetencionMinima()
    {
        return isset($this->RetencionMinima);
    }

    public function clearRetencionMinima()
    {
        unset($this->RetencionMinima);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage RetencionMinima = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setRetencionMinima($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->RetencionMinima = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoReten = 6;</code>
     * @return string
     */
    public function getTipoReten()
    {
        return $this->TipoReten;
    }

    /**
     * Generated from protobuf field <code>string TipoReten = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoReten($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoReten = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string UsaRubros = 7;</code>
     * @return string
     */
    public function getUsaRubros()
    {
        return $this->UsaRubros;
    }

    /**
     * Generated from protobuf field <code>string UsaRubros = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUsaRubros($var)
    {
        GPBUtil::checkString($var, True);
        $this->UsaRubros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string UsaZonas = 8;</code>
     * @return string
     */
    public function getUsaZonas()
    {
        return $this->UsaZonas;
    }

    /**
     * Generated from protobuf field <code>string UsaZonas = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUsaZonas($var)
    {
        GPBUtil::checkString($var, True);
        $this->UsaZonas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TieneAcreedor = 9;</code>
     * @return string
     */
    public function getTieneAcreedor()
    {
        return $this->TieneAcreedor;
    }

    /**
     * Generated from protobuf field <code>string TieneAcreedor = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTieneAcreedor($var)
    {
        GPBUtil::checkString($var, True);
        $this->TieneAcreedor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Calculo = 10;</code>
     * @return string
     */
    public function getCalculo()
    {
        return $this->Calculo;
    }

    /**
     * Generated from protobuf field <code>string Calculo = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCalculo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Calculo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codinterno = 11;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodinterno()
    {
        return $this->Codinterno;
    }

    public function hasCodinterno()
    {
        return isset($this->Codinterno);
    }

    public function clearCodinterno()
    {
        unset($this->Codinterno);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codinterno = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodinterno($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codinterno = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodplan()
    {
        return $this->Codplan;
    }

    public function hasCodplan()
    {
        return isset($this->Codplan);
    }

    public function clearCodplan()
    {
        unset($this->Codplan);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codplan = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodplan($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codplan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Obligatoria = 13;</code>
     * @return string
     */
    public function getObligatoria()
    {
        return $this->Obligatoria;
    }

    /**
     * Generated from protobuf field <code>string Obligatoria = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setObligatoria($var)
    {
        GPBUtil::checkString($var, True);
        $this->Obligatoria = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DiscriminaFaena = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDiscriminaFaena()
    {
        return $this->DiscriminaFaena;
    }

    public function hasDiscriminaFaena()
    {
        return isset($this->DiscriminaFaena);
    }

    public function clearDiscriminaFaena()
    {
        unset($this->DiscriminaFaena);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DiscriminaFaena = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDiscriminaFaena($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->DiscriminaFaena = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcAgropecuaria = 15;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getPorcAgropecuaria()
    {
        return $this->PorcAgropecuaria;
    }

    public function hasPorcAgropecuaria()
    {
        return isset($this->PorcAgropecuaria);
    }

    public function clearPorcAgropecuaria()
    {
        unset($this->PorcAgropecuaria);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcAgropecuaria = 15;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setPorcAgropecuaria($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->PorcAgropecuaria = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcMatarife = 16;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getPorcMatarife()
    {
        return $this->PorcMatarife;
    }

    public function hasPorcMatarife()
    {
        return isset($this->PorcMatarife);
    }

    public function clearPorcMatarife()
    {
        unset($this->PorcMatarife);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage PorcMatarife = 16;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setPorcMatarife($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->PorcMatarife = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codjurisdicc = 17;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodjurisdicc()
    {
        return $this->Codjurisdicc;
    }

    public function hasCodjurisdicc()
    {
        return isset($this->Codjurisdicc);
    }

    public function clearCodjurisdicc()
    {
        unset($this->Codjurisdicc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codjurisdicc = 17;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodjurisdicc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codjurisdicc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CalcularSobrePago = 18;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCalcularSobrePago()
    {
        return $this->CalcularSobrePago;
    }

    public function hasCalcularSobrePago()
    {
        return isset($this->CalcularSobrePago);
    }

    public function clearCalcularSobrePago()
    {
        unset($this->CalcularSobrePago);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CalcularSobrePago = 18;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCalcularSobrePago($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->CalcularSobrePago = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codcondicion = 19;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodcondicion()
    {
        return $this->Codcondicion;
    }

    public function hasCodcondicion()
    {
        return isset($this->Codcondicion);
    }

    public function clearCodcondicion()
    {
        unset($this->Codcondicion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codcondicion = 19;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodcondicion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codcondicion = $var;

        return $this;
    }

}

