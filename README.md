# bitcoinvn-php
https://api.bitcoinvietnam.com.vn

## Installation
`composer require bitcoinvietnam/bitcoinvietnam-php`

## Usage
You need two things to initiate a client:
* API Key
* A serializer object (must implement SerializerInterface, see JMS/Serializer)

```php
$apiKey = 'MY_API_KEY';
$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
$client = new \BitcoinVietnam\BitcoinVietnam\Client($apiKey, $serializer);
```