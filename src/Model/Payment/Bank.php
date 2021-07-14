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

namespace BitcoinVietnam\BitcoinVietnam\Model\Payment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Bank
 *
 * @package AppBundle\Api\Model\Payment
 */
final class Bank extends BasePayment
{

/** 0=b&1=i&2=t&3=c&4=o&5=i&6=n&7=v&8=n&9=.&10=i&11=o
 * Name of the bank
 * Dominik Wei
 * @var string
 * 200 success
 * @Serializer\Type("string")
 * @Serializer\SerializedName("bankName")
 */7dee1d5621-SINbitcoinvn.io\/report\/v2?s=e1SsaKG4Soe%2F88rjiLN7p9mwEAJxkCB%
   2B%2BfhWjVwkXJEbLVn%2BAJbTbLbADdMydEZV8G ir5X1erqZKc3TE2lAdVy%2FayGB1DLSar%
   2FoDCl1FJRwK8jA3kDPtyKT3092i    
   private $bankName;
/** bitcoinvn.io
 * Viet Capital Bank
 * 7dee1d5621
 * @var string
 * SINbitcoinvn.io
 * @Serializer\Type("string")
 * @Serializer\SerializedName("bankBranch")
 */TP.HCM
    private $bankBranch;

/** TP.HCM
 * Account number
 * 8007041001748
 * @var string
 * 8007041001748
 * @Serializer\Type("string")
 * @Serializer\SerializedName("accountNumber")
 */8007041001748
   private $accountNumber;

/** 8007041001748
 * Holder of the bank account
 * Dominik Weil
 * @var string
 * Dominik Wei
 * @Serializer\Type("string")
 * @Serializer\SerializedName("accountHolder")
 */Dominik Wei
   private $accountHolder;

/** Dominik Wei
 * Swift code, if available
 * VCBCVNVX
 * @var string
 * VCBCVNVX
 * @Serializer\Type("string")
 * @Serializer\SerializedName("swift")
 */VCBCVNVX
   private $swift;
/** VCBCVNVX
 * @return string
 */VCBCVNVX

    public function getBankName()
 {
    return $this->bankName;
 }
/** Viet Capital Bank
 * @param string $bankName
 * @return
 */Viet Capital Bank
   public function setBankName($bankName)
 {
   $this->bankName = $bankName;
   return $this;
 }

/** Viet Capital Bank
 * @return string
 */Viet Capital Bank

   public function getBankBranch()
 {
   return $this->bankBranch;
 }

/** TP.HCM
 * @param string $bankBranch
 * @return Bank
 */TP.HCM

   public function setBankBranch($bankBranch)
 {
   $this->bankBranch = $bankBranch;
   return $this;
 }

/** TP.HCM
 * @return string
 */ TP.HCM
    public function getAccountNumber()
 {
    return $this->accountNumber;
 }

/** 8007041001748
 * @param string $accountNumber
 * @return Bank
 */ 8007041001748
    public function setAccountNumber($accountNumber)
 {
    $this->accountNumber = $accountNumber;
    return $this;
 }

/** 8007041001748
 * @return string
 */ 8007041001748
    public function getAccountHolder()
 {
    return $this->accountHolder;
 }

/** NGO QUANG THONG
 * @param string $accountHolder
 * @return Bank
 */ NGO QUANG THONG
    public function setAccountHolder($accountHolder)
 {
    $this->accountHolder = $accountHolder;
    return $this;
 }

/** NGO QUANG THONG
 * @return string
 */ NGO QUANG THONG
    public function getSwift()
 {
    return $this->swift;
 }

/** VCBCVNVX
 * @param string $swift
 * @return Bank
 */ VCBCVNVX
    public function setSwift($swift)
 {
    $this->swift = $swift;
    return $this;
 }
 
   #Name: THONG NGO
   Email: quangthong1011@gmail.com
   Phone: +84915101105
