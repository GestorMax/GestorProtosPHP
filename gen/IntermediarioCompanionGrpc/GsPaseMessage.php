<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsPaseMessage</code>
 */
class GsPaseMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     */
    protected $Codpase = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Titulo = 3;</code>
     */
    protected $Titulo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descripcion = 4;</code>
     */
    protected $Descripcion = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 5;</code>
     */
    protected $Numdoc = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPase = 6;</code>
     */
    protected $TipoPase = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 7;</code>
     */
    protected $Notas = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codlista = 8;</code>
     */
    protected $Codlista = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 9;</code>
     */
    protected $Codmoneda = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 10;</code>
     */
    protected $Codproducto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 11;</code>
     */
    protected $Codpersona = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codclasif = 12;</code>
     */
    protected $Codclasif = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codpase
     *     @type \ProtoMessages\StringMessage $Titulo
     *     @type \ProtoMessages\StringMessage $Descripcion
     *     @type \ProtoMessages\StringMessage $Numdoc
     *     @type \ProtoMessages\StringMessage $TipoPase
     *     @type \ProtoMessages\StringMessage $Notas
     *     @type \ProtoMessages\Int32Message $Codlista
     *     @type \ProtoMessages\Int32Message $Codmoneda
     *     @type \ProtoMessages\Int32Message $Codproducto
     *     @type \ProtoMessages\Int32Message $Codpersona
     *     @type \ProtoMessages\Int32Message $Codclasif
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
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     * @return int
     */
    public function getCodpase()
    {
        return $this->Codpase;
    }

    /**
     * Generated from protobuf field <code>int32 Codpase = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodpase($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codpase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Titulo = 3;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    public function hasTitulo()
    {
        return isset($this->Titulo);
    }

    public function clearTitulo()
    {
        unset($this->Titulo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Titulo = 3;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTitulo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Titulo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descripcion = 4;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    public function hasDescripcion()
    {
        return isset($this->Descripcion);
    }

    public function clearDescripcion()
    {
        unset($this->Descripcion);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Descripcion = 4;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDescripcion($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Descripcion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNumdoc()
    {
        return $this->Numdoc;
    }

    public function hasNumdoc()
    {
        return isset($this->Numdoc);
    }

    public function clearNumdoc()
    {
        unset($this->Numdoc);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Numdoc = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNumdoc($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Numdoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPase = 6;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getTipoPase()
    {
        return $this->TipoPase;
    }

    public function hasTipoPase()
    {
        return isset($this->TipoPase);
    }

    public function clearTipoPase()
    {
        unset($this->TipoPase);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage TipoPase = 6;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setTipoPase($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->TipoPase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 7;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getNotas()
    {
        return $this->Notas;
    }

    public function hasNotas()
    {
        return isset($this->Notas);
    }

    public function clearNotas()
    {
        unset($this->Notas);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 7;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setNotas($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Notas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codlista = 8;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodlista()
    {
        return $this->Codlista;
    }

    public function hasCodlista()
    {
        return isset($this->Codlista);
    }

    public function clearCodlista()
    {
        unset($this->Codlista);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codlista = 8;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodlista($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codlista = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 9;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodmoneda()
    {
        return $this->Codmoneda;
    }

    public function hasCodmoneda()
    {
        return isset($this->Codmoneda);
    }

    public function clearCodmoneda()
    {
        unset($this->Codmoneda);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codmoneda = 9;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodmoneda($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codmoneda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodproducto()
    {
        return $this->Codproducto;
    }

    public function hasCodproducto()
    {
        return isset($this->Codproducto);
    }

    public function clearCodproducto()
    {
        unset($this->Codproducto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codproducto = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodproducto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codproducto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 11;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodpersona()
    {
        return $this->Codpersona;
    }

    public function hasCodpersona()
    {
        return isset($this->Codpersona);
    }

    public function clearCodpersona()
    {
        unset($this->Codpersona);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codpersona = 11;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodpersona($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codpersona = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codclasif = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodclasif()
    {
        return $this->Codclasif;
    }

    public function hasCodclasif()
    {
        return isset($this->Codclasif);
    }

    public function clearCodclasif()
    {
        unset($this->Codclasif);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message Codclasif = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodclasif($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->Codclasif = $var;

        return $this;
    }

}

