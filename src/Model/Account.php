<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\BitcoinVietnam\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Account
 * @package AppBundle\Api\Model\Order
 */
class  Account
{
    /**
     * Account ID
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * Account name
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * Account email
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    private $email;

    /**
     * Monthly trading limit in crypto currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tradingLimit")
     */
    private $tradingLimit;

    /**
     * What is already used up of the trading limit
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("volumeUsed")
     */
    private $volumeUsed;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Account
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return float
     */
    public function getTradingLimit()
    {
        return $this->tradingLimit;
    }

    /**
     * @param float $tradingLimit
     * @return Account
     */
    public function setTradingLimit($tradingLimit)
    {
        $this->tradingLimit = $tradingLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolumeUsed()
    {
        return $this->volumeUsed;
    }

    /**
     * @param float $volumeUsed
     * @return Account
     */
    public function setVolumeUsed($volumeUsed)
    {
        $this->volumeUsed = $volumeUsed;
        return $this;
    }
}