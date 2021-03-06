<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqAddrs</code>
 */
class ReqAddrs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>
     */
    private $addrs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $addrs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddrs()
    {
        return $this->addrs;
    }

    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddrs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->addrs = $arr;

        return $this;
    }

}

