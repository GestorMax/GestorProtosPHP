<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsTiposFactContrMessage</code>
 */
class GsTiposFactContrMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codempre = 1;</code>
     */
    protected $Codempre = 0;
    /**
     * Generated from protobuf field <code>int32 Codtipofact = 2;</code>
     */
    protected $Codtipofact = 0;
    /**
     * Generated from protobuf field <code>string TipoFact = 3;</code>
     */
    protected $TipoFact = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioA = 4;</code>
     */
    protected $CodtipotalonarioA = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioB = 5;</code>
     */
    protected $CodtipotalonarioB = null;
    /**
     * Generated from protobuf field <code>string UsarNumeracionArch = 6;</code>
     */
    protected $UsarNumeracionArch = '';
    /**
     * Generated from protobuf field <code>string PrefijoArch = 7;</code>
     */
    protected $PrefijoArch = '';
    /**
     * Generated from protobuf field <code>string Contado = 8;</code>
     */
    protected $Contado = '';
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 9;</code>
     */
    protected $Notas = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodplanVtos = 10;</code>
     */
    protected $CodplanVtos = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodrubroVto = 11;</code>
     */
    protected $CodrubroVto = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codempre
     *     @type int $Codtipofact
     *     @type string $TipoFact
     *     @type \ProtoMessages\Int32Message $CodtipotalonarioA
     *     @type \ProtoMessages\Int32Message $CodtipotalonarioB
     *     @type string $UsarNumeracionArch
     *     @type string $PrefijoArch
     *     @type string $Contado
     *     @type \ProtoMessages\StringMessage $Notas
     *     @type \ProtoMessages\Int32Message $CodplanVtos
     *     @type \ProtoMessages\Int32Message $CodrubroVto
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
     * Generated from protobuf field <code>int32 Codtipofact = 2;</code>
     * @return int
     */
    public function getCodtipofact()
    {
        return $this->Codtipofact;
    }

    /**
     * Generated from protobuf field <code>int32 Codtipofact = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCodtipofact($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codtipofact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoFact = 3;</code>
     * @return string
     */
    public function getTipoFact()
    {
        return $this->TipoFact;
    }

    /**
     * Generated from protobuf field <code>string TipoFact = 3;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioA = 4;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodtipotalonarioA()
    {
        return $this->CodtipotalonarioA;
    }

    public function hasCodtipotalonarioA()
    {
        return isset($this->CodtipotalonarioA);
    }

    public function clearCodtipotalonarioA()
    {
        unset($this->CodtipotalonarioA);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioA = 4;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodtipotalonarioA($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodtipotalonarioA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioB = 5;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodtipotalonarioB()
    {
        return $this->CodtipotalonarioB;
    }

    public function hasCodtipotalonarioB()
    {
        return isset($this->CodtipotalonarioB);
    }

    public function clearCodtipotalonarioB()
    {
        unset($this->CodtipotalonarioB);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodtipotalonarioB = 5;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodtipotalonarioB($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodtipotalonarioB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string UsarNumeracionArch = 6;</code>
     * @return string
     */
    public function getUsarNumeracionArch()
    {
        return $this->UsarNumeracionArch;
    }

    /**
     * Generated from protobuf field <code>string UsarNumeracionArch = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUsarNumeracionArch($var)
    {
        GPBUtil::checkString($var, True);
        $this->UsarNumeracionArch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PrefijoArch = 7;</code>
     * @return string
     */
    public function getPrefijoArch()
    {
        return $this->PrefijoArch;
    }

    /**
     * Generated from protobuf field <code>string PrefijoArch = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefijoArch($var)
    {
        GPBUtil::checkString($var, True);
        $this->PrefijoArch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Contado = 8;</code>
     * @return string
     */
    public function getContado()
    {
        return $this->Contado;
    }

    /**
     * Generated from protobuf field <code>string Contado = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setContado($var)
    {
        GPBUtil::checkString($var, True);
        $this->Contado = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 9;</code>
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
     * Generated from protobuf field <code>.protoMessages.StringMessage Notas = 9;</code>
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
     * Generated from protobuf field <code>.protoMessages.Int32Message CodplanVtos = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodplanVtos()
    {
        return $this->CodplanVtos;
    }

    public function hasCodplanVtos()
    {
        return isset($this->CodplanVtos);
    }

    public function clearCodplanVtos()
    {
        unset($this->CodplanVtos);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodplanVtos = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodplanVtos($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodplanVtos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodrubroVto = 11;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getCodrubroVto()
    {
        return $this->CodrubroVto;
    }

    public function hasCodrubroVto()
    {
        return isset($this->CodrubroVto);
    }

    public function clearCodrubroVto()
    {
        unset($this->CodrubroVto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message CodrubroVto = 11;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setCodrubroVto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->CodrubroVto = $var;

        return $this;
    }

}
