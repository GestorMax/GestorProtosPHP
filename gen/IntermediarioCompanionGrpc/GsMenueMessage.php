<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto

namespace IntermediarioCompanionGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioCompanionGrpc.GsMenueMessage</code>
 */
class GsMenueMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 Codmenu = 1;</code>
     */
    protected $Codmenu = 0;
    /**
     * Generated from protobuf field <code>string Descrip = 2;</code>
     */
    protected $Descrip = '';
    /**
     * Generated from protobuf field <code>string Tipomenu = 3;</code>
     */
    protected $Tipomenu = '';
    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message Codgrupo = 4;</code>
     */
    protected $Codgrupo = null;
    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage MenuName = 5;</code>
     */
    protected $MenuName = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $Codmenu
     *     @type string $Descrip
     *     @type string $Tipomenu
     *     @type \ProtoMessages\Int64Message $Codgrupo
     *     @type \ProtoMessages\StringMessage $MenuName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioCompanionMessagesG::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 Codmenu = 1;</code>
     * @return int|string
     */
    public function getCodmenu()
    {
        return $this->Codmenu;
    }

    /**
     * Generated from protobuf field <code>int64 Codmenu = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCodmenu($var)
    {
        GPBUtil::checkInt64($var);
        $this->Codmenu = $var;

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
     * Generated from protobuf field <code>string Tipomenu = 3;</code>
     * @return string
     */
    public function getTipomenu()
    {
        return $this->Tipomenu;
    }

    /**
     * Generated from protobuf field <code>string Tipomenu = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTipomenu($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tipomenu = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.Int64Message Codgrupo = 4;</code>
     * @return \ProtoMessages\Int64Message|null
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
     * Generated from protobuf field <code>.protoMessages.Int64Message Codgrupo = 4;</code>
     * @param \ProtoMessages\Int64Message $var
     * @return $this
     */
    public function setCodgrupo($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\Int64Message::class);
        $this->Codgrupo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage MenuName = 5;</code>
     * @return \ProtoMessages\StringMessage|null
     */
    public function getMenuName()
    {
        return $this->MenuName;
    }

    public function hasMenuName()
    {
        return isset($this->MenuName);
    }

    public function clearMenuName()
    {
        unset($this->MenuName);
    }

    /**
     * Generated from protobuf field <code>.protoMessages.StringMessage MenuName = 5;</code>
     * @param \ProtoMessages\StringMessage $var
     * @return $this
     */
    public function setMenuName($var)
    {
        GPBUtil::checkMessage($var, \ProtoMessages\StringMessage::class);
        $this->MenuName = $var;

        return $this;
    }

}

