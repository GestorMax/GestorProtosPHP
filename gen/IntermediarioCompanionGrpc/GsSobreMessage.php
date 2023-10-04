<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsSobreMessage</code>
 */
class GsSobreMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Codsobre = 1;</code>
     */
    protected $Codsobre = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string Remitente = 3;</code>
     */
    protected $Remitente = '';
    /**
     * Generated from protobuf field <code>string TipoLetra = 4;</code>
     */
    protected $TipoLetra = '';
    /**
     * Generated from protobuf field <code>int32 SobreAlto = 5;</code>
     */
    protected $SobreAlto = 0;
    /**
     * Generated from protobuf field <code>int32 SobreAncho = 6;</code>
     */
    protected $SobreAncho = 0;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteTamanio = 7;</code>
     */
    protected $RemitenteTamanio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage RemitenteEstilo = 8;</code>
     */
    protected $RemitenteEstilo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteSup = 9;</code>
     */
    protected $RemitenteSup = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteIzq = 10;</code>
     */
    protected $RemitenteIzq = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rotar90 = 11;</code>
     */
    protected $Rotar90 = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioTamanio = 12;</code>
     */
    protected $DestinatarioTamanio = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioEstilo = 13;</code>
     */
    protected $DestinatarioEstilo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioSup = 14;</code>
     */
    protected $DestinatarioSup = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioIzq = 15;</code>
     */
    protected $DestinatarioIzq = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAlto = 16;</code>
     */
    protected $DestinatarioAlto = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAncho = 17;</code>
     */
    protected $DestinatarioAncho = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAncho = 18;</code>
     */
    protected $RemitenteAncho = null;
    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAlto = 19;</code>
     */
    protected $RemitenteAlto = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Codsobre
     *     @type string $Descrip
     *     @type string $Remitente
     *     @type string $TipoLetra
     *     @type int $SobreAlto
     *     @type int $SobreAncho
     *     @type \ProtoMessages\Int32Message $RemitenteTamanio
     *     @type \ProtoMessages\StringMessage $RemitenteEstilo
     *     @type \ProtoMessages\Int32Message $RemitenteSup
     *     @type \ProtoMessages\Int32Message $RemitenteIzq
     *     @type \ProtoMessages\StringMessage $Rotar90
     *     @type \ProtoMessages\Int32Message $DestinatarioTamanio
     *     @type \ProtoMessages\StringMessage $DestinatarioEstilo
     *     @type \ProtoMessages\Int32Message $DestinatarioSup
     *     @type \ProtoMessages\Int32Message $DestinatarioIzq
     *     @type \ProtoMessages\Int32Message $DestinatarioAlto
     *     @type \ProtoMessages\Int32Message $DestinatarioAncho
     *     @type \ProtoMessages\Int32Message $RemitenteAncho
     *     @type \ProtoMessages\Int32Message $RemitenteAlto
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Codsobre = 1;</code>
     * @return int
     */
    public function getCodsobre()
    {
        return $this->Codsobre;
    }

    /**
     * Generated from protobuf field <code>int32 Codsobre = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCodsobre($var)
    {
        GPBUtil::checkInt32($var);
        $this->Codsobre = $var;

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
     * Generated from protobuf field <code>string Remitente = 3;</code>
     * @return string
     */
    public function getRemitente()
    {
        return $this->Remitente;
    }

    /**
     * Generated from protobuf field <code>string Remitente = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemitente($var)
    {
        GPBUtil::checkString($var, True);
        $this->Remitente = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TipoLetra = 4;</code>
     * @return string
     */
    public function getTipoLetra()
    {
        return $this->TipoLetra;
    }

    /**
     * Generated from protobuf field <code>string TipoLetra = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTipoLetra($var)
    {
        GPBUtil::checkString($var, True);
        $this->TipoLetra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 SobreAlto = 5;</code>
     * @return int
     */
    public function getSobreAlto()
    {
        return $this->SobreAlto;
    }

    /**
     * Generated from protobuf field <code>int32 SobreAlto = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSobreAlto($var)
    {
        GPBUtil::checkInt32($var);
        $this->SobreAlto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 SobreAncho = 6;</code>
     * @return int
     */
    public function getSobreAncho()
    {
        return $this->SobreAncho;
    }

    /**
     * Generated from protobuf field <code>int32 SobreAncho = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSobreAncho($var)
    {
        GPBUtil::checkInt32($var);
        $this->SobreAncho = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteTamanio = 7;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getRemitenteTamanio()
    {
        return $this->RemitenteTamanio;
    }

    public function hasRemitenteTamanio()
    {
        return isset($this->RemitenteTamanio);
    }

    public function clearRemitenteTamanio()
    {
        unset($this->RemitenteTamanio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteTamanio = 7;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setRemitenteTamanio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->RemitenteTamanio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage RemitenteEstilo = 8;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getRemitenteEstilo()
    {
        return $this->RemitenteEstilo;
    }

    public function hasRemitenteEstilo()
    {
        return isset($this->RemitenteEstilo);
    }

    public function clearRemitenteEstilo()
    {
        unset($this->RemitenteEstilo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage RemitenteEstilo = 8;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setRemitenteEstilo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->RemitenteEstilo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteSup = 9;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getRemitenteSup()
    {
        return $this->RemitenteSup;
    }

    public function hasRemitenteSup()
    {
        return isset($this->RemitenteSup);
    }

    public function clearRemitenteSup()
    {
        unset($this->RemitenteSup);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteSup = 9;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setRemitenteSup($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->RemitenteSup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteIzq = 10;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getRemitenteIzq()
    {
        return $this->RemitenteIzq;
    }

    public function hasRemitenteIzq()
    {
        return isset($this->RemitenteIzq);
    }

    public function clearRemitenteIzq()
    {
        unset($this->RemitenteIzq);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteIzq = 10;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setRemitenteIzq($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->RemitenteIzq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rotar90 = 11;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getRotar90()
    {
        return $this->Rotar90;
    }

    public function hasRotar90()
    {
        return isset($this->Rotar90);
    }

    public function clearRotar90()
    {
        unset($this->Rotar90);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage Rotar90 = 11;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setRotar90($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->Rotar90 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioTamanio = 12;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDestinatarioTamanio()
    {
        return $this->DestinatarioTamanio;
    }

    public function hasDestinatarioTamanio()
    {
        return isset($this->DestinatarioTamanio);
    }

    public function clearDestinatarioTamanio()
    {
        unset($this->DestinatarioTamanio);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioTamanio = 12;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDestinatarioTamanio($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DestinatarioTamanio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioEstilo = 13;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getDestinatarioEstilo()
    {
        return $this->DestinatarioEstilo;
    }

    public function hasDestinatarioEstilo()
    {
        return isset($this->DestinatarioEstilo);
    }

    public function clearDestinatarioEstilo()
    {
        unset($this->DestinatarioEstilo);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage DestinatarioEstilo = 13;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setDestinatarioEstilo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->DestinatarioEstilo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioSup = 14;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDestinatarioSup()
    {
        return $this->DestinatarioSup;
    }

    public function hasDestinatarioSup()
    {
        return isset($this->DestinatarioSup);
    }

    public function clearDestinatarioSup()
    {
        unset($this->DestinatarioSup);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioSup = 14;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDestinatarioSup($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DestinatarioSup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioIzq = 15;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDestinatarioIzq()
    {
        return $this->DestinatarioIzq;
    }

    public function hasDestinatarioIzq()
    {
        return isset($this->DestinatarioIzq);
    }

    public function clearDestinatarioIzq()
    {
        unset($this->DestinatarioIzq);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioIzq = 15;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDestinatarioIzq($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DestinatarioIzq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAlto = 16;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDestinatarioAlto()
    {
        return $this->DestinatarioAlto;
    }

    public function hasDestinatarioAlto()
    {
        return isset($this->DestinatarioAlto);
    }

    public function clearDestinatarioAlto()
    {
        unset($this->DestinatarioAlto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAlto = 16;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDestinatarioAlto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DestinatarioAlto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAncho = 17;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getDestinatarioAncho()
    {
        return $this->DestinatarioAncho;
    }

    public function hasDestinatarioAncho()
    {
        return isset($this->DestinatarioAncho);
    }

    public function clearDestinatarioAncho()
    {
        unset($this->DestinatarioAncho);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message DestinatarioAncho = 17;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setDestinatarioAncho($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->DestinatarioAncho = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAncho = 18;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getRemitenteAncho()
    {
        return $this->RemitenteAncho;
    }

    public function hasRemitenteAncho()
    {
        return isset($this->RemitenteAncho);
    }

    public function clearRemitenteAncho()
    {
        unset($this->RemitenteAncho);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAncho = 18;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setRemitenteAncho($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->RemitenteAncho = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAlto = 19;</code>
     * @return \ProtoMessages\Int32Message|null
     */
    public function getRemitenteAlto()
    {
        return $this->RemitenteAlto;
    }

    public function hasRemitenteAlto()
    {
        return isset($this->RemitenteAlto);
    }

    public function clearRemitenteAlto()
    {
        unset($this->RemitenteAlto);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int32Message RemitenteAlto = 19;</code>
     * @param \ProtoMessages\Int32Message $var
     * @return $this
     */
    public function setRemitenteAlto($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int32Message::class);
        $this->RemitenteAlto = $var;

        return $this;
    }

}

