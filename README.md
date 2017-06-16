# bitcoinvn-php

https://api.bitcoin.vn

# Composer installation #

Add the following to your composer.json:

```json
{
    "require": {
        "bitcoinvietnam/bitcoinvietnam-php": "@dev"
    }
}
```

## Usage

Instantiate a Client object

```php
$apiKey = 'MY_API_KEY';
$client = new \BitcoinVietnam\BitcoinVietnam\Client($apiKey);
```