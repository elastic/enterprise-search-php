<p align="center"><img src="https://github.com/elastic/enterprise-search-php/blob/master/logo-enterprise-search.png?raw=true" alt="Elastic Enterprise Search Logo"></p>


> A first-party PHP client to interface with [Elastic Enterpise Search](https://www.elastic.co/enterprise-search)
including [Elastic App Search](https://www.elastic.co/app-search/) and [Elastic Workplace Search](https://www.elastic.co/workplace-search).

## Contents

- [Getting started](#getting-started-)
- [Usage](#usage)
- [FAQ](#faq-)
- [Contribute](#contribute-)
- [License](#license-)

***

## Getting started 🐣

Using this client assumes that you have a [Enterprise Search](https://www.elastic.co/enterprise-search) server installed and running.

You can install the client in your project by using composer:

```bash
composer require elastic/enterprise-search
```

After the installation you can use the client as follows:

```php
use Elastic\EnterpriseSearch\Client;

$client = new Client([
    'host'     => 'localhost:3002',
    'username' => '<insert here the username>',
    'password' => '<insert here the password>'
]);

$result = $client->getVersion(new Request\GetVersion);

echo $result->number; // prints the Enterprise Search version (e.g. 7.11.0)
```

You can access the result of each endpoints using object or array interface,
as follows:

```php
$result = $client->getVersion(new Request\GetVersion);

echo $result->number; // prints the Enterprise Search version (e.g. 7.11.0)
echo $result['number']; // same as above

var_dump($result->asArray());  // returns all the body response as array
var_dump($result->asObject()); // returns all the body response as object
var_dump($result->asString()); // returns all the body response as string (i.e. JSON)
```

Moreover, you can access the full HTTP response of the result using a [PSR-7](https://www.php-fig.org/psr/psr-7/)
object.

```php
$result = $client->getVersion(new Request\GetVersion);

$response = $result->getResponse(); // PSR-7 object
echo $response->getStatusCode();    // e.g. 200
var_dump($response->getHeaders());  // returns all the response headers
```

### Versioning

 This client is versioned and released alongside Enterprise Search.

 To guarantee compatibility, use the most recent version of this library within the major version of the corresponding Enterprise Search implementation.

 For example, for Enterprise Search `7.4`, use `7.4` of this library or above, but not `8.0`.

## Usage

**TODO**

### Clients methods

**TODO**

## FAQ 🔮

### Where do I report issues with the client?

If something is not working as expected, please open an [issue](https://github.com/elastic/enterprise-search-php/issues/new).

### Where else can I go to get help?

You can checkout the [Elastic community discuss forums](https://discuss.elastic.co/c/enterprise-search).

## Contribute 🚀

We welcome contributors to the project. Before you begin, a couple notes...

+ Before opening a pull request, please create an issue to [discuss the scope of your proposal](https://github.com/elastic/enterprise-search-php/issues).
+ Please write simple code and concise documentation, when appropriate.

## License 📗

[Apache 2.0](https://github.com/elastic/enterprise-search-php/blob/master/LICENSE) © [Elastic](https://github.com/elastic)


