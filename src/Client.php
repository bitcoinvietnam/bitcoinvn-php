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

namespace BitcoinVietnam\BitcoinVietnam;

use BitcoinVietnam\BitcoinVietnam\Request\Order\PatchOrder\Order as OrderPatchOrder;
use BitcoinVietnam\BitcoinVietnam\Request\RequestInterface;
use BitcoinVietnam\BitcoinVietnam\Response\Order\GetOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Order\PatchOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Ticker\GetTicker;
use JMS\Serializer\Serializer;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 * @package BitcoinVietnam
 */
class Client
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var bool
     */
    private $test;

    /**
     * @var string
     */
    private $url;

    /**
     * @var Factory
     */
    private $factory;

    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Client constructor.
     * @param string $apiKey
     * @param bool $test
     */
    public function __construct($apiKey, $test = false)
    {
        $this->apiKey = $apiKey;
        $this->test = $test;
        $this->url = $this->test === true ? BitcoinVietnam::APU_URL_TEST : BitcoinVietnam::API_URL;
        $this->factory = Factory::create();
    }

    // TICKER //

    /**
     * @return GetTicker
     */
    public function getTicker()
    {
        return $this->serializer()->deserialize(
            $this->sendRequest($this->factory->request()->ticker()->getTicker(), 'GET')->getBody()->getContents(),
            GetTicker::class,
            'json'
        );
    }

    // END TICKER //

    // ORDER

    /**
     * @param string $id
     * @return GetOrder
     */
    public function getOrder($id)
    {
        return $this->serializer()->deserialize(
            $this
                ->sendRequest($this->factory->request()->order()->getOrder($id), 'GET')
                ->getBody()
                ->getContents(),
            GetOrder::class,
            'json'
        );
    }

    /**
     * @param string $id
     * @param OrderPatchOrder $patchOrder
     * @return PatchOrder
     */
    public function patchOrder($id, OrderPatchOrder $patchOrder)
    {
        return $this->serializer()->deserialize(
            $this
                ->sendRequest($this->factory->request()->order()->patchOrder($id)->setOrder($patchOrder), 'PATCH')
                ->getBody()
                ->getContents(),
            PatchOrder::class,
            'json'
        );

    }

    // END ORDER

    /**
     * @param RequestInterface $request
     * @param string $method
     * @return ResponseInterface
     */
    private function sendRequest(RequestInterface $request, $method)
    {
        return $this->guzzle()->request($method, $this->url . $request->getPath(), [
            'headers' => ['Content-Type' => 'application/json', 'APIKEY' => $this->apiKey],
            'json' => $this->serializer()->toArray($request)
        ]);
    }


    /**
     * @return \GuzzleHttp\Client
     */
    private function guzzle()
    {
        return isset($this->guzzle) ? $this->guzzle : ($this->guzzle = $this->factory->utils()->guzzle());
    }

    /**
     * @return Serializer
     */
    private function serializer()
    {
        return isset($this->serializer) ? $this->serializer : ($this->serializer = $this->factory->utils()->serializer());
    }
}