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

use BitcoinVietnam\BitcoinVietnam\Model\Payment\Bank;
use BitcoinVietnam\BitcoinVietnam\Model\Payment\Bitcoin;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Payment
 * @package BitcoinVietnam\BitcoinVietnam\Model
 */
class Payment
{
    /**
     * @var Bank
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payment\Bank")
     * @Serializer\SerializedName("bank")
     */
    private $bank;

    /**
     * @var Bitcoin
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payment\Bitcoin")
     * @Serializer\SerializedName("bitcoin")
     */
    private $bitcoin;

    /**
     * @return Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param Bank $bank
     * @return Payment
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return Bitcoin
     */
    public function getBitcoin()
    {
        return $this->bitcoin;
    }

    /**
     * @param Bitcoin $bitcoin
     * @return Payment
     */
    public function setBitcoin($bitcoin)
    {
        $this->bitcoin = $bitcoin;
        return $this;
    }
}