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
 * Class Order
 * @package BitcoinVietnam\BitcoinVietnam\Model
 */
class Order
{
    /**
     * Order ID
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * Type of order
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * Order fees
     *
     * @var Fees
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Fees")
     * @Serializer\SerializedName("fees")
     */
    private $fees;

    /**
     * Exchange rate
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("rate")
     */
    private $rate;

    /**
     * Amount in crypto currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cryptoAmount")
     */
    private $cryptoAmount;

    /**
     * Amount in fiat currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fiatAmount")
     */
    private $fiatAmount;

    /**
     * @var Payout
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payout")
     * @Serializer\SerializedName("payout")
     */
    private $payout;

    /**
     * @var Payment
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payment")
     * @Serializer\SerializedName("payment")
     */
    private $payment;

    /**
     * Time of order creation
     *
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("createdAt")
     */
    private $created;

    /**
     * True when paid
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("paid")
     */
    private $paid;

    /**
     * Time of order payment
     *
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("paidAt")
     */
    private $paidAt;

    /**
     * True when open
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("open")
     */
    private $open;

    /**
     * True when cancelled
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cancelled")
     */
    private $cancelled;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Order
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Fees
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param Fees $fees
     * @return Order
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return Order
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCryptoAmount()
    {
        return $this->cryptoAmount;
    }

    /**
     * @param float $cryptoAmount
     * @return Order
     */
    public function setCryptoAmount($cryptoAmount)
    {
        $this->cryptoAmount = $cryptoAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFiatAmount()
    {
        return $this->fiatAmount;
    }

    /**
     * @param float $fiatAmount
     * @return Order
     */
    public function setFiatAmount($fiatAmount)
    {
        $this->fiatAmount = $fiatAmount;
        return $this;
    }

    /**
     * @return Payout
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @param Payout $payout
     * @return Order
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;
        return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return Order
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Order
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPaid()
    {
        return $this->paid;
    }

    /**
     * @param boolean $paid
     * @return Order
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * @param \DateTime $paidAt
     * @return Order
     */
    public function setPaidAt($paidAt)
    {
        $this->paidAt = $paidAt;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isOpen()
    {
        return $this->open;
    }

    /**
     * @param boolean $open
     * @return Order
     */
    public function setOpen($open)
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param boolean $cancelled
     * @return Order
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
        return $this;
    }
}