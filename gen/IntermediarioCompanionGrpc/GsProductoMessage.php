<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsProductoMessage</code>
 */
class GsProductoMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
     */
    protected $Codproducto = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidparte = 3;</code>
     */
    protected $Unidparte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidtotal = 4;</code>
     */
    protected $Unidtotal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 5;</code>
     */
    protected $Coef = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Importe = 6;</code>
     */
    protected $Importe = null;
    /**
     * Generated from protobuf field <code>string Prodogrupo = 7;</code>
     */
    protected $Prodogrupo = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 8;</code>
     */
    protected $Codgrupo = null;
    /**
     * Generated from protobuf field <code>string ManejaStock = 9;</code>
     */
    protected $ManejaStock = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoinsumo = 10;</code>
     */
    protected $Codtipoinsumo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Bloqueado = 11;</code>
     */
    protected $Bloqueado = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message Codbarras = 12;</code>
     */
    protected $Codbarras = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Costo = 13;</code>
     */
    protected $Costo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DescripDetallada = 14;</code>
     */
    protected $DescripDetallada = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codiva = 15;</code>
     */
    protected $Codiva = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 16;</code>
     */
    protected $Codfe = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codimportacion = 17;</code>
     */
    protected $Codimportacion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codproducto
     *     @type string $Descrip
     *     @type \ProtoMessages\Int32Message $Unidparte
     *     @type \ProtoMessages\Int32Message $Unidtotal
     *     @type \ProtoMessages\DecimalMessage $Coef
     *     @type \ProtoMessages\DoubleMessage $Importe
     *     @type string $Prodogrupo
     *     @type \ProtoMessages\Int32Message $Codgrupo
     *     @type string $ManejaStock
     *     @type \ProtoMessages\Int32Message $Codtipoinsumo
     *     @type \ProtoMessages\StringMessage $Bloqueado
     *     @type \ProtoMessages\Int64Message $Codbarras
     *     @type \ProtoMessages\DoubleMessage $Costo
     *     @type \ProtoMessages\StringMessage $DescripDetallada
     *     @type \ProtoMessages\Int32Message $Codiva
     *     @type \ProtoMessages\StringMessage $Codfe
     *     @type \ProtoMessages\StringMessage $Codimportacion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
     * @return int
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    /**
     * Generated from protobuf field <code>int32 Codproducto = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codproducto = $var;

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
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidparte = 3;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUnidparte()
    {
        return $this->Unidparte;
    }

    public function hasUnidparte()
    {
        return isset($this->Unidparte);
    }

    public function clearUnidparte()
    {
        unset($this->Unidparte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidparte = 3;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUnidparte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Unidparte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidtotal = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getUnidtotal()
    {
        return $this->Unidtotal;
    }

    public function hasUnidtotal()
    {
        return isset($this->Unidtotal);
    }

    public function clearUnidtotal()
    {
        unset($this->Unidtotal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Unidtotal = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setUnidtotal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Unidtotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 5;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getCoef()
    {
        return $this->Coef;
    }

    public function hasCoef()
    {
        return isset($this->Coef);
    }

    public function clearCoef()
    {
        unset($this->Coef);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage Coef = 5;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setCoef($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->Coef = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Importe = 6;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getImporte()
    {
        return $this->Importe;
    }

    public function hasImporte()
    {
        return isset($this->Importe);
    }

    public function clearImporte()
    {
        unset($this->Importe);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Importe = 6;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setImporte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Importe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Prodogrupo = 7;</code>
     * @return string
     */
    public function getProdogrupo()
    {
        return $this->Prodogrupo;
    }

    /**
     * Generated from protobuf field <code>string Prodogrupo = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setProdogrupo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Prodogrupo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodgrupo()
    {
        return $this->Codgrupo;
    }

    public function hasCodgrupo()
    {
        return isset($this->Codgrupo);
    }

    public function clearCodgrupo()
    {
        unset($this->Codgrupo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codgrupo = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodgrupo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codgrupo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ManejaStock = 9;</code>
     * @return string
     */
    public function getManejaStock()
    {
        return $this->ManejaStock;
    }

    /**
     * Generated from protobuf field <code>string ManejaStock = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setManejaStock($var)
    {
        GPBUtil::checkString($var, True);
        $this->ManejaStock = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoinsumo = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodtipoinsumo()
    {
        return $this->Codtipoinsumo;
    }

    public function hasCodtipoinsumo()
    {
        return isset($this->Codtipoinsumo);
    }

    public function clearCodtipoinsumo()
    {
        unset($this->Codtipoinsumo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoinsumo = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodtipoinsumo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codtipoinsumo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Bloqueado = 11;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getBloqueado()
    {
        return $this->Bloqueado;
    }

    public function hasBloqueado()
    {
        return isset($this->Bloqueado);
    }

    public function clearBloqueado()
    {
        unset($this->Bloqueado);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Bloqueado = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setBloqueado($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Bloqueado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message Codbarras = 12;</code>
     * @return \ProtoMessages\Int64Message|null
     */
    public function getCodbarras()
    {
        return $this->Codbarras;
    }

    public function hasCodbarras()
    {
        return isset($this->Codbarras);
    }

    public function clearCodbarras()
    {
        unset($this->Codbarras);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message Codbarras = 12;</code>
     * @param \ProtoMessages\Int64Message $var
     * @return $this
     */
    public function setCodbarras($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int64Message::class);
        $this->Codbarras = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Costo = 13;</code>
     * @return \ProtoMessages\DoubleMessage|null
     */
    public function getCosto()
    {
        return $this->Costo;
    }

    public function hasCosto()
    {
        return isset($this->Costo);
    }

    public function clearCosto()
    {
        unset($this->Costo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DoubleMessage Costo = 13;</code>
     * @param \ProtoMessages\DoubleMessage $var
     * @return $this
     */
    public function setCosto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DoubleMessage::class);
        $this->Costo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DescripDetallada = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDescripDetallada()
    {
        return $this->DescripDetallada;
    }

    public function hasDescripDetallada()
    {
        return isset($this->DescripDetallada);
    }

    public function clearDescripDetallada()
    {
        unset($this->DescripDetallada);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DescripDetallada = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDescripDetallada($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->DescripDetallada = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codiva = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodiva()
    {
        return $this->Codiva;
    }

    public function hasCodiva()
    {
        return isset($this->Codiva);
    }

    public function clearCodiva()
    {
        unset($this->Codiva);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codiva = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodiva($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codiva = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 16;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 16;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodfe($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codfe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codimportacion = 17;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodimportacion()
    {
        return $this->Codimportacion;
    }

    public function hasCodimportacion()
    {
        return isset($this->Codimportacion);
    }

    public function clearCodimportacion()
    {
        unset($this->Codimportacion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codimportacion = 17;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodimportacion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codimportacion = $var;

        return $this;
    }

}

