<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: IntermediarioGrpc/Shared/IntermediarioShared.proto

namespace IntermediarioSharedMessages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>intermediarioSharedMessages.ConnectLogMessage</code>
 */
class ConnectLogMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     */
    protected $Id = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp LogDate = 2;</code>
     */
    protected $LogDate = null;
    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogType LogType = 3;</code>
     */
    protected $LogType = 0;
    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogSender Sender = 4;</code>
     */
    protected $Sender = 0;
    /**
     * Generated from protobuf field <code>string Text = 5;</code>
     */
    protected $Text = '';
    /**
     * Generated from protobuf field <code>string AdditionalInfo = 6;</code>
     */
    protected $AdditionalInfo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Id
     *     @type \Google\Protobuf\Timestamp $LogDate
     *     @type int $LogType
     *     @type int $Sender
     *     @type string $Text
     *     @type string $AdditionalInfo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntermediarioGrpc\Shared\IntermediarioShared::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp LogDate = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLogDate()
    {
        return $this->LogDate;
    }

    public function hasLogDate()
    {
        return isset($this->LogDate);
    }

    public function clearLogDate()
    {
        unset($this->LogDate);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp LogDate = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLogDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->LogDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogType LogType = 3;</code>
     * @return int
     */
    public function getLogType()
    {
        return $this->LogType;
    }

    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogType LogType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLogType($var)
    {
        GPBUtil::checkEnum($var, \IntermediarioSharedMessages\ConnectLogType::class);
        $this->LogType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogSender Sender = 4;</code>
     * @return int
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * Generated from protobuf field <code>.intermediarioSharedMessages.ConnectLogSender Sender = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkEnum($var, \IntermediarioSharedMessages\ConnectLogSender::class);
        $this->Sender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Text = 5;</code>
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Generated from protobuf field <code>string Text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->Text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AdditionalInfo = 6;</code>
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Generated from protobuf field <code>string AdditionalInfo = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->AdditionalInfo = $var;

        return $this;
    }

}

