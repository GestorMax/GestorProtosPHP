<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTipoDocMessage</code>
 */
class GsTipoDocMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     */
    protected $Codigo = 0;
    /**
     * Generated from protobuf field <code>string Tipdoc = 2;</code>
     */
    protected $Tipdoc = '';
    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string Invierte = 4;</code>
     */
    protected $Invierte = '';
    /**
     * Generated from protobuf field <code>string Compras = 5;</code>
     */
    protected $Compras = '';
    /**
     * Generated from protobuf field <code>string Ventas = 6;</code>
     */
    protected $Ventas = '';
    /**
     * Generated from protobuf field <code>string Percibido = 7;</code>
     */
    protected $Percibido = '';
    /**
     * Generated from protobuf field <code>string EmiteCheque = 8;</code>
     */
    protected $EmiteCheque = '';
    /**
     * Generated from protobuf field <code>string ValoresTerceros = 9;</code>
     */
    protected $ValoresTerceros = '';
    /**
     * Generated from protobuf field <code>string Habilitado = 10;</code>
     */
    protected $Habilitado = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codbarras = 11;</code>
     */
    protected $Codbarras = null;
    /**
     * Generated from protobuf field <code>string ComprasLn = 12;</code>
     */
    protected $ComprasLn = '';
    /**
     * Generated from protobuf field <code>string VentasLn = 13;</code>
     */
    protected $VentasLn = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 14;</code>
     */
    protected $Codfiscal = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codciti = 15;</code>
     */
    protected $Codciti = null;
    /**
     * Generated from protobuf field <code>string Remitos = 16;</code>
     */
    protected $Remitos = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codiibb = 17;</code>
     */
    protected $Codiibb = null;
    /**
     * Generated from protobuf field <code>string ChequeDiferido = 18;</code>
     */
    protected $ChequeDiferido = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDocFactElectr = 19;</code>
     */
    protected $TipoDocFactElectr = null;
    /**
     * Generated from protobuf field <code>string Cosecha = 20;</code>
     */
    protected $Cosecha = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CodregSellos = 21;</code>
     */
    protected $CodregSellos = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 22;</code>
     */
    protected $Codfe = null;
    /**
     * Generated from protobuf field <code>string ControlaRemito = 23;</code>
     */
    protected $ControlaRemito = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioA = 24;</code>
     */
    protected $CodformularioA = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioB = 25;</code>
     */
    protected $CodformularioB = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LiquidoProd = 26;</code>
     */
    protected $LiquidoProd = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codlsp = 27;</code>
     */
    protected $Codlsp = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoconceptos = 28;</code>
     */
    protected $Codtipoconceptos = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage ControlaStock = 29;</code>
     */
    protected $ControlaStock = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codigo
     *     @type string $Tipdoc
     *     @type string $Descrip
     *     @type string $Invierte
     *     @type string $Compras
     *     @type string $Ventas
     *     @type string $Percibido
     *     @type string $EmiteCheque
     *     @type string $ValoresTerceros
     *     @type string $Habilitado
     *     @type \ProtoMessages\StringMessage $Codbarras
     *     @type string $ComprasLn
     *     @type string $VentasLn
     *     @type \ProtoMessages\StringMessage $Codfiscal
     *     @type \ProtoMessages\StringMessage $Codciti
     *     @type string $Remitos
     *     @type \ProtoMessages\StringMessage $Codiibb
     *     @type string $ChequeDiferido
     *     @type \ProtoMessages\StringMessage $TipoDocFactElectr
     *     @type string $Cosecha
     *     @type \ProtoMessages\StringMessage $CodregSellos
     *     @type \ProtoMessages\StringMessage $Codfe
     *     @type string $ControlaRemito
     *     @type \ProtoMessages\Int32Message $CodformularioA
     *     @type \ProtoMessages\Int32Message $CodformularioB
     *     @type \ProtoMessages\StringMessage $LiquidoProd
     *     @type \ProtoMessages\StringMessage $Codlsp
     *     @type \ProtoMessages\Int32Message $Codtipoconceptos
     *     @type \ProtoMessages\StringMessage $ControlaStock
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     * @return int
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * Generated from protobuf field <code>int32 Codigo = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodigo($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codigo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Tipdoc = 2;</code>
     * @return string
     */
    public function getTipdoc()
    {
        return $this->Tipdoc;
    }

    /**
     * Generated from protobuf field <code>string Tipdoc = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTipdoc($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
     * @return string
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Generated from protobuf field <code>string Descrip = 3;</code>
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
     * Generated from protobuf field <code>string Invierte = 4;</code>
     * @return string
     */
    public function getInvierte()
    {
        return $this->Invierte;
    }

    /**
     * Generated from protobuf field <code>string Invierte = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInvierte($var)
    {
        GPBUtil::checkString($var, True);
        $this->Invierte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Compras = 5;</code>
     * @return string
     */
    public function getCompras()
    {
        return $this->Compras;
    }

    /**
     * Generated from protobuf field <code>string Compras = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCompras($var)
    {
        GPBUtil::checkString($var, True);
        $this->Compras = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Ventas = 6;</code>
     * @return string
     */
    public function getVentas()
    {
        return $this->Ventas;
    }

    /**
     * Generated from protobuf field <code>string Ventas = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setVentas($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ventas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Percibido = 7;</code>
     * @return string
     */
    public function getPercibido()
    {
        return $this->Percibido;
    }

    /**
     * Generated from protobuf field <code>string Percibido = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPercibido($var)
    {
        GPBUtil::checkString($var, True);
        $this->Percibido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EmiteCheque = 8;</code>
     * @return string
     */
    public function getEmiteCheque()
    {
        return $this->EmiteCheque;
    }

    /**
     * Generated from protobuf field <code>string EmiteCheque = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEmiteCheque($var)
    {
        GPBUtil::checkString($var, True);
        $this->EmiteCheque = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ValoresTerceros = 9;</code>
     * @return string
     */
    public function getValoresTerceros()
    {
        return $this->ValoresTerceros;
    }

    /**
     * Generated from protobuf field <code>string ValoresTerceros = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setValoresTerceros($var)
    {
        GPBUtil::checkString($var, True);
        $this->ValoresTerceros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Habilitado = 10;</code>
     * @return string
     */
    public function getHabilitado()
    {
        return $this->Habilitado;
    }

    /**
     * Generated from protobuf field <code>string Habilitado = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setHabilitado($var)
    {
        GPBUtil::checkString($var, True);
        $this->Habilitado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codbarras = 11;</code>
     * @return \ProtoMessages\StringMessage|null
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Codbarras = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodbarras($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codbarras = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ComprasLn = 12;</code>
     * @return string
     */
    public function getComprasLn()
    {
        return $this->ComprasLn;
    }

    /**
     * Generated from protobuf field <code>string ComprasLn = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setComprasLn($var)
    {
        GPBUtil::checkString($var, True);
        $this->ComprasLn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string VentasLn = 13;</code>
     * @return string
     */
    public function getVentasLn()
    {
        return $this->VentasLn;
    }

    /**
     * Generated from protobuf field <code>string VentasLn = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setVentasLn($var)
    {
        GPBUtil::checkString($var, True);
        $this->VentasLn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodfiscal()
    {
        return $this->Codfiscal;
    }

    public function hasCodfiscal()
    {
        return isset($this->Codfiscal);
    }

    public function clearCodfiscal()
    {
        unset($this->Codfiscal);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfiscal = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodfiscal($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codfiscal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codciti = 15;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodciti()
    {
        return $this->Codciti;
    }

    public function hasCodciti()
    {
        return isset($this->Codciti);
    }

    public function clearCodciti()
    {
        unset($this->Codciti);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codciti = 15;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodciti($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codciti = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Remitos = 16;</code>
     * @return string
     */
    public function getRemitos()
    {
        return $this->Remitos;
    }

    /**
     * Generated from protobuf field <code>string Remitos = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setRemitos($var)
    {
        GPBUtil::checkString($var, True);
        $this->Remitos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codiibb = 17;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodiibb()
    {
        return $this->Codiibb;
    }

    public function hasCodiibb()
    {
        return isset($this->Codiibb);
    }

    public function clearCodiibb()
    {
        unset($this->Codiibb);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codiibb = 17;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodiibb($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codiibb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ChequeDiferido = 18;</code>
     * @return string
     */
    public function getChequeDiferido()
    {
        return $this->ChequeDiferido;
    }

    /**
     * Generated from protobuf field <code>string ChequeDiferido = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setChequeDiferido($var)
    {
        GPBUtil::checkString($var, True);
        $this->ChequeDiferido = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDocFactElectr = 19;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipoDocFactElectr()
    {
        return $this->TipoDocFactElectr;
    }

    public function hasTipoDocFactElectr()
    {
        return isset($this->TipoDocFactElectr);
    }

    public function clearTipoDocFactElectr()
    {
        unset($this->TipoDocFactElectr);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoDocFactElectr = 19;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipoDocFactElectr($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipoDocFactElectr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Cosecha = 20;</code>
     * @return string
     */
    public function getCosecha()
    {
        return $this->Cosecha;
    }

    /**
     * Generated from protobuf field <code>string Cosecha = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setCosecha($var)
    {
        GPBUtil::checkString($var, True);
        $this->Cosecha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CodregSellos = 21;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodregSellos()
    {
        return $this->CodregSellos;
    }

    public function hasCodregSellos()
    {
        return isset($this->CodregSellos);
    }

    public function clearCodregSellos()
    {
        unset($this->CodregSellos);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage CodregSellos = 21;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodregSellos($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->CodregSellos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 22;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Codfe = 22;</code>
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
     * Generated from protobuf field <code>string ControlaRemito = 23;</code>
     * @return string
     */
    public function getControlaRemito()
    {
        return $this->ControlaRemito;
    }

    /**
     * Generated from protobuf field <code>string ControlaRemito = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setControlaRemito($var)
    {
        GPBUtil::checkString($var, True);
        $this->ControlaRemito = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioA = 24;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodformularioA()
    {
        return $this->CodformularioA;
    }

    public function hasCodformularioA()
    {
        return isset($this->CodformularioA);
    }

    public function clearCodformularioA()
    {
        unset($this->CodformularioA);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioA = 24;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodformularioA($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodformularioA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioB = 25;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodformularioB()
    {
        return $this->CodformularioB;
    }

    public function hasCodformularioB()
    {
        return isset($this->CodformularioB);
    }

    public function clearCodformularioB()
    {
        unset($this->CodformularioB);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodformularioB = 25;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodformularioB($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodformularioB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LiquidoProd = 26;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getLiquidoProd()
    {
        return $this->LiquidoProd;
    }

    public function hasLiquidoProd()
    {
        return isset($this->LiquidoProd);
    }

    public function clearLiquidoProd()
    {
        unset($this->LiquidoProd);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage LiquidoProd = 26;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setLiquidoProd($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->LiquidoProd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codlsp = 27;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getCodlsp()
    {
        return $this->Codlsp;
    }

    public function hasCodlsp()
    {
        return isset($this->Codlsp);
    }

    public function clearCodlsp()
    {
        unset($this->Codlsp);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Codlsp = 27;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setCodlsp($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Codlsp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoconceptos = 28;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodtipoconceptos()
    {
        return $this->Codtipoconceptos;
    }

    public function hasCodtipoconceptos()
    {
        return isset($this->Codtipoconceptos);
    }

    public function clearCodtipoconceptos()
    {
        unset($this->Codtipoconceptos);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codtipoconceptos = 28;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodtipoconceptos($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codtipoconceptos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage ControlaStock = 29;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getControlaStock()
    {
        return $this->ControlaStock;
    }

    public function hasControlaStock()
    {
        return isset($this->ControlaStock);
    }

    public function clearControlaStock()
    {
        unset($this->ControlaStock);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage ControlaStock = 29;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setControlaStock($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->ControlaStock = $var;

        return $this;
    }

}
