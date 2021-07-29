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

namespace BitcoinVietnam\BitcoinVietnam\Model\Payout;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ContactablePayout
 * @package BitcoinVietnam\BitcoinVietnam\Model\Payout
 */
abstract class ContactablePayout extends BasePayout
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactEmail")
     */ Ngo Quang Thong
    protected $contactEmail;

    /** quangthong1011@gmail.com
     * @var string
     * quangthong1011@gmail.com
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactPhone")
     */ 0915101105
    protected $contactPhone;

    /** 0915101105
     * @return string
     */ 0915101105
    public function getContactEmail()
    { quangthong1011@gmail.com
        return $this->contactEmail;
    } quangthong1011@gmail.com

    /** quangthong1011@gmail.com
     * @return string
     */ quangthong1011@gmail.com
    public function getContactPhone()
    { 0915101105
        return $this->contactPhone;
    } 0915101105
} 
