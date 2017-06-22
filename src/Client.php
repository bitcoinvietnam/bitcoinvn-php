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
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order as OrderPostOrder;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\PayoutInterface;
use BitcoinVietnam\BitcoinVietnam\Request\RequestInterface;
use BitcoinVietnam\BitcoinVietnam\Response\BaseResponse;
use BitcoinVietnam\BitcoinVietnam\Response\Order\GetOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Order\GetOrders;
use BitcoinVietnam\BitcoinVietnam\Response\Order\PatchOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Order\PostOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Ticker\GetTicker;
use GuzzleHttp\Exception\ClientException;
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
     * @var string
     */
    private $url;

    /**
     * @var Factory
     */
    private $factory;

    /**
     * Client constructor.
     * @param $apiKey
     * @param string $url
     */
    public function __construct($apiKey, $url = BitcoinVietnam::API_URL)
    {
        $this->apiKey = $apiKey;
        $this->url = $url;
        $this->factory = Factory::create();
    }

    // TICKER //

    /**
     * @return GetTicker
     */
    public function getTicker()
    {
        return $this->factory->utils()->serializer()->deserialize(
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
        return $this->factory->utils()->serializer()->deserialize(
            $this
                ->sendRequest($this->factory->request()->order()->getOrder($id), 'GET')
                ->getBody()
                ->getContents(),
            GetOrder::class,
            'json'
        );
    }

    /**
     * @param bool $open
     * @param bool $cancelled
     * @param array $parameters
     * @return GetOrders
     */
    public function getOrders($open = true, $cancelled = false, $parameters = [])
    {
        $requestModel = $this->factory->request()->order()->getOrders($open, $cancelled);
        foreach ($parameters as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($requestModel, $setter)) {
                $requestModel->$setter($value);
            }
        }

        return $this->factory->utils()->serializer()->deserialize(
            $this
                ->sendRequest($requestModel, 'GET')
                ->getBody()
                ->getContents(),
            GetOrders::class,
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
        return $this->factory->utils()->serializer()->deserialize(
            $this
                ->sendRequest($this->factory->request()->order()->patchOrder($id)->setOrder($patchOrder), 'PATCH')
                ->getBody()
                ->getContents(),
            PatchOrder::class,
            'json'
        );
    }

    /**
     * @param OrderPostOrder $postOrder
     * @param PayoutInterface $payout
     * @return PostOrder
     */
    public function postOrder(OrderPostOrder $postOrder, PayoutInterface $payout)
    {
        $postOrder->getPayout()->setPayout($payout);
        $requestModel = $this->factory->request()->order()->postOrder()->setOrder($postOrder);

        return $this->factory->utils()->serializer()->deserialize(
            $this
                ->sendRequest($requestModel, 'POST')
                ->getBody()
                ->getContents(),
            PostOrder::class,
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
        try {
            return $this->factory->utils()->guzzle()->request($method, $this->url . $request->getPath(), [
                'headers' => ['Content-Type' => 'application/json', 'APIKEY' => $this->apiKey],
                'json' => $this->factory->utils()->serializer()->toArray($request)
            ]);
        } catch (ClientException $exception) {
            return $exception->getResponse();
        }
    }
}