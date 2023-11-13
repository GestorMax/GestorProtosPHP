<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsAvisosMailMessage</code>
 */
class GsAvisosMailMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     */
    protected $Codtipoaviso = 0;
    /**
     * Generated from protobuf field <code>int32 Codaviso = 2;</code>
     */
    protected $Codaviso = 0;
    /**
     * Generated from protobuf field <code>string TipoAviso = 3;</code>
     */
    protected $TipoAviso = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasAviso = 4;</code>
     */
    protected $DiasAviso = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Reenvios = 5;</code>
     */
    protected $Reenvios = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasReenvios = 6;</code>
     */
    protected $DiasReenvios = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatario = 7;</code>
     */
    protected $Destinatario = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioMail = 8;</code>
     */
    protected $DestinatarioMail = null;
    /**
     * Generated from protobuf field <code>string EnviarTitular = 9;</code>
     */
    protected $EnviarTitular = '';
    /**
     * Generated from protobuf field <code>string EnviarCuenta = 10;</code>
     */
    protected $EnviarCuenta = '';
    /**
     * Generated from protobuf field <code>string EnviarRepresent = 11;</code>
     */
    protected $EnviarRepresent = '';
    /**
     * Generated from protobuf field <code>string EnviarResumencta = 12;</code>
     */
    protected $EnviarResumencta = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TextoMail = 13;</code>
     */
    protected $TextoMail = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Asunto = 14;</code>
     */
    protected $Asunto = null;
    /**
     * Generated from protobuf field <code>string EnviarResponsable = 15;</code>
     */
    protected $EnviarResponsable = '';
    /**
     * Generated from protobuf field <code>string IncluirPersonas = 16;</code>
     */
    protected $IncluirPersonas = '';
    /**
     * Generated from protobuf field <code>string VentasLn = 17;</code>
     */
    protected $VentasLn = '';
    /**
     * Generated from protobuf field <code>string ComprasLn = 18;</code>
     */
    protected $ComprasLn = '';
    /**
     * Generated from protobuf field <code>string Compras = 19;</code>
     */
    protected $Compras = '';
    /**
     * Generated from protobuf field <code>string ComprasInv = 20;</code>
     */
    protected $ComprasInv = '';
    /**
     * Generated from protobuf field <code>string Ventas = 21;</code>
     */
    protected $Ventas = '';
    /**
     * Generated from protobuf field <code>string VentasInv = 22;</code>
     */
    protected $VentasInv = '';
    /**
     * Generated from protobuf field <code>string Ingresos = 23;</code>
     */
    protected $Ingresos = '';
    /**
     * Generated from protobuf field <code>string Egresos = 24;</code>
     */
    protected $Egresos = '';
    /**
     * Generated from protobuf field <code>string AntIngresos = 25;</code>
     */
    protected $AntIngresos = '';
    /**
     * Generated from protobuf field <code>string AntEgresos = 26;</code>
     */
    protected $AntEgresos = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage AgruparMails = 27;</code>
     */
    protected $AgruparMails = null;
    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MinImporte = 28;</code>
     */
    protected $MinImporte = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FinAviso = 29;</code>
     */
    protected $FinAviso = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codtipoaviso
     *     @type int $Codaviso
     *     @type string $TipoAviso
     *     @type \ProtoMessages\Int32Message $DiasAviso
     *     @type \ProtoMessages\Int32Message $Reenvios
     *     @type \ProtoMessages\Int32Message $DiasReenvios
     *     @type \ProtoMessages\StringMessage $Destinatario
     *     @type \ProtoMessages\StringMessage $DestinatarioMail
     *     @type string $EnviarTitular
     *     @type string $EnviarCuenta
     *     @type string $EnviarRepresent
     *     @type string $EnviarResumencta
     *     @type \ProtoMessages\StringMessage $TextoMail
     *     @type \ProtoMessages\StringMessage $Asunto
     *     @type string $EnviarResponsable
     *     @type string $IncluirPersonas
     *     @type string $VentasLn
     *     @type string $ComprasLn
     *     @type string $Compras
     *     @type string $ComprasInv
     *     @type string $Ventas
     *     @type string $VentasInv
     *     @type string $Ingresos
     *     @type string $Egresos
     *     @type string $AntIngresos
     *     @type string $AntEgresos
     *     @type \ProtoMessages\StringMessage $AgruparMails
     *     @type \ProtoMessages\DecimalMessage $MinImporte
     *     @type \ProtoMessages\Int32Message $FinAviso
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     * @return int
     */
    public function getCodtipoaviso()
    {
        return $this->Codtipoaviso;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipoaviso = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipoaviso($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipoaviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Codaviso = 2;</code>
     * @return int
     */
    public function getCodaviso()
    {
        return $this->Codaviso;
    }

    /**
     * Generated from protobuf field <code>int32 Codaviso = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodaviso($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codaviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoAviso = 3;</code>
     * @return string
     */
    public function getTipoAviso()
    {
        return $this->TipoAviso;
    }

    /**
     * Generated from protobuf field <code>string TipoAviso = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoAviso($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoAviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasAviso = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDiasAviso()
    {
        return $this->DiasAviso;
    }

    public function hasDiasAviso()
    {
        return isset($this->DiasAviso);
    }

    public function clearDiasAviso()
    {
        unset($this->DiasAviso);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasAviso = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDiasAviso($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DiasAviso = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Reenvios = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getReenvios()
    {
        return $this->Reenvios;
    }

    public function hasReenvios()
    {
        return isset($this->Reenvios);
    }

    public function clearReenvios()
    {
        unset($this->Reenvios);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Reenvios = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setReenvios($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Reenvios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasReenvios = 6;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDiasReenvios()
    {
        return $this->DiasReenvios;
    }

    public function hasDiasReenvios()
    {
        return isset($this->DiasReenvios);
    }

    public function clearDiasReenvios()
    {
        unset($this->DiasReenvios);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DiasReenvios = 6;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDiasReenvios($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DiasReenvios = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatario = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDestinatario()
    {
        return $this->Destinatario;
    }

    public function hasDestinatario()
    {
        return isset($this->Destinatario);
    }

    public function clearDestinatario()
    {
        unset($this->Destinatario);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Destinatario = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDestinatario($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Destinatario = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioMail = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDestinatarioMail()
    {
        return $this->DestinatarioMail;
    }

    public function hasDestinatarioMail()
    {
        return isset($this->DestinatarioMail);
    }

    public function clearDestinatarioMail()
    {
        unset($this->DestinatarioMail);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioMail = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDestinatarioMail($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->DestinatarioMail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EnviarTitular = 9;</code>
     * @return string
     */
    public function getEnviarTitular()
    {
        return $this->EnviarTitular;
    }

    /**
     * Generated from protobuf field <code>string EnviarTitular = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEnviarTitular($var)
    {
        GPBUtil::checkString($var, True);
        $this->EnviarTitular = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EnviarCuenta = 10;</code>
     * @return string
     */
    public function getEnviarCuenta()
    {
        return $this->EnviarCuenta;
    }

    /**
     * Generated from protobuf field <code>string EnviarCuenta = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEnviarCuenta($var)
    {
        GPBUtil::checkString($var, True);
        $this->EnviarCuenta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EnviarRepresent = 11;</code>
     * @return string
     */
    public function getEnviarRepresent()
    {
        return $this->EnviarRepresent;
    }

    /**
     * Generated from protobuf field <code>string EnviarRepresent = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setEnviarRepresent($var)
    {
        GPBUtil::checkString($var, True);
        $this->EnviarRepresent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EnviarResumencta = 12;</code>
     * @return string
     */
    public function getEnviarResumencta()
    {
        return $this->EnviarResumencta;
    }

    /**
     * Generated from protobuf field <code>string EnviarResumencta = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setEnviarResumencta($var)
    {
        GPBUtil::checkString($var, True);
        $this->EnviarResumencta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TextoMail = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTextoMail()
    {
        return $this->TextoMail;
    }

    public function hasTextoMail()
    {
        return isset($this->TextoMail);
    }

    public function clearTextoMail()
    {
        unset($this->TextoMail);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TextoMail = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTextoMail($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TextoMail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Asunto = 14;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getAsunto()
    {
        return $this->Asunto;
    }

    public function hasAsunto()
    {
        return isset($this->Asunto);
    }

    public function clearAsunto()
    {
        unset($this->Asunto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Asunto = 14;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setAsunto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Asunto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EnviarResponsable = 15;</code>
     * @return string
     */
    public function getEnviarResponsable()
    {
        return $this->EnviarResponsable;
    }

    /**
     * Generated from protobuf field <code>string EnviarResponsable = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setEnviarResponsable($var)
    {
        GPBUtil::checkString($var, True);
        $this->EnviarResponsable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string IncluirPersonas = 16;</code>
     * @return string
     */
    public function getIncluirPersonas()
    {
        return $this->IncluirPersonas;
    }

    /**
     * Generated from protobuf field <code>string IncluirPersonas = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setIncluirPersonas($var)
    {
        GPBUtil::checkString($var, True);
        $this->IncluirPersonas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string VentasLn = 17;</code>
     * @return string
     */
    public function getVentasLn()
    {
        return $this->VentasLn;
    }

    /**
     * Generated from protobuf field <code>string VentasLn = 17;</code>
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
     * Generated from protobuf field <code>string ComprasLn = 18;</code>
     * @return string
     */
    public function getComprasLn()
    {
        return $this->ComprasLn;
    }

    /**
     * Generated from protobuf field <code>string ComprasLn = 18;</code>
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
     * Generated from protobuf field <code>string Compras = 19;</code>
     * @return string
     */
    public function getCompras()
    {
        return $this->Compras;
    }

    /**
     * Generated from protobuf field <code>string Compras = 19;</code>
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
     * Generated from protobuf field <code>string ComprasInv = 20;</code>
     * @return string
     */
    public function getComprasInv()
    {
        return $this->ComprasInv;
    }

    /**
     * Generated from protobuf field <code>string ComprasInv = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setComprasInv($var)
    {
        GPBUtil::checkString($var, True);
        $this->ComprasInv = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Ventas = 21;</code>
     * @return string
     */
    public function getVentas()
    {
        return $this->Ventas;
    }

    /**
     * Generated from protobuf field <code>string Ventas = 21;</code>
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
     * Generated from protobuf field <code>string VentasInv = 22;</code>
     * @return string
     */
    public function getVentasInv()
    {
        return $this->VentasInv;
    }

    /**
     * Generated from protobuf field <code>string VentasInv = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setVentasInv($var)
    {
        GPBUtil::checkString($var, True);
        $this->VentasInv = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Ingresos = 23;</code>
     * @return string
     */
    public function getIngresos()
    {
        return $this->Ingresos;
    }

    /**
     * Generated from protobuf field <code>string Ingresos = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setIngresos($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ingresos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Egresos = 24;</code>
     * @return string
     */
    public function getEgresos()
    {
        return $this->Egresos;
    }

    /**
     * Generated from protobuf field <code>string Egresos = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setEgresos($var)
    {
        GPBUtil::checkString($var, True);
        $this->Egresos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AntIngresos = 25;</code>
     * @return string
     */
    public function getAntIngresos()
    {
        return $this->AntIngresos;
    }

    /**
     * Generated from protobuf field <code>string AntIngresos = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setAntIngresos($var)
    {
        GPBUtil::checkString($var, True);
        $this->AntIngresos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AntEgresos = 26;</code>
     * @return string
     */
    public function getAntEgresos()
    {
        return $this->AntEgresos;
    }

    /**
     * Generated from protobuf field <code>string AntEgresos = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setAntEgresos($var)
    {
        GPBUtil::checkString($var, True);
        $this->AntEgresos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage AgruparMails = 27;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getAgruparMails()
    {
        return $this->AgruparMails;
    }

    public function hasAgruparMails()
    {
        return isset($this->AgruparMails);
    }

    public function clearAgruparMails()
    {
        unset($this->AgruparMails);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage AgruparMails = 27;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setAgruparMails($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->AgruparMails = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MinImporte = 28;</code>
     * @return \ProtoMessages\DecimalMessage|null
     */
    public function getMinImporte()
    {
        return $this->MinImporte;
    }

    public function hasMinImporte()
    {
        return isset($this->MinImporte);
    }

    public function clearMinImporte()
    {
        unset($this->MinImporte);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.DecimalMessage MinImporte = 28;</code>
     * @param \ProtoMessages\DecimalMessage $var
     * @return $this
     */
    public function setMinImporte($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\DecimalMessage::class);
        $this->MinImporte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FinAviso = 29;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getFinAviso()
    {
        return $this->FinAviso;
    }

    public function hasFinAviso()
    {
        return isset($this->FinAviso);
    }

    public function clearFinAviso()
    {
        unset($this->FinAviso);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message FinAviso = 29;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setFinAviso($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->FinAviso = $var;

        return $this;
    }

}
