# Elastic Enterprise Search Client for PHP

> A first-party PHP client to interface with [Elastic Enterpise Search](https://www.elastic.co/enterprise-search)
including [Elastic App Search](https://www.elastic.co/app-search/) and [Elastic Workplace Search](https://www.elastic.co/workplace-search).
## Installation

The package can be installed using [composer](https://getcomposer.org/):

```bash
composer require elastic/enterprise-search
```

The version follows the Elastic Stack version so `8.0` is compatible
with Enterprise Search released in Elastic Stack 8.0.

## PSR-18 HTTP library

This project uses `elastic-transport-php` as HTTP library. This is a component that abstracts
the usage of any PSR-18 client libraries. It uses the autodiscovery feature of [HTTPlug](http://httplug.io/)
to find a compliant library already installed in your `vendor`. If you receive an error like
`No PSR-18 clients found` this means you don't have any PSR-18 library installed.
We suggest to use [Guzzle](https://github.com/guzzle/guzzle) v7+ as HTTP library.
You can require it using composer:

```
composer require guzzlehttp/guzzle
```

If you want to be sure to use a specific HTTP library you need to pass it in the `Client`
constructor, as follows:

```php
use Elastic\EnterpriseSearch\Client;

$client = new Client([
    'client' => new GuzzleHttp\Client,
   // ...
]);
```

### Guzzle v6

If you want to use Guzzle v6, you need to add the [php-http/guzzle6-adapter](https://github.com/php-http/guzzle6-adapter)
as composer requirement.

## Documentation

[See the documentation](https://www.elastic.co/guide/en/enterprise-search-clients/php) for how to get started,
compatibility info, configuring, and an API reference.

## Contributing

If you'd like to make a contribution to `enterprise-search-php` we 
provide [contributing documentation](CONTRIBUTING.md)
to ensure your first contribution goes smoothly.

## License

`enterprise-search-php` is available under the MIT license.
For more details see [LICENSE](LICENSE).