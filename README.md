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
use Elastic\EnterpriseSearch\EnterpriseSearch\Request;

$client = new Client([
    'host' => 'http://localhost:3002',
    'enterprise-search' => [
        'username' => '<insert here the username>',
        'password' => '<insert here the password>'
    ]
]);

$es = $client->enterpriseSearch(); // Enterprise Search endpoints

$result = $es->getVersion(new Request\GetVersion); // Call the getVersion endpoint

echo $result->number; // prints the Enterprise Search version (e.g. 7.11.0)
```

You can access the result of each endpoints using object or array interface,
as follows:

```php
$result = $es->getVersion(new Request\GetVersion);

echo $result->number; // prints the Enterprise Search version (e.g. 7.11.0)
echo $result['number']; // same as above

var_dump($result->asArray());  // returns all the body response as array
var_dump($result->asObject()); // returns all the body response as object
var_dump($result->asString()); // returns all the body response as string (i.e. JSON)
```

Moreover, you can access the full HTTP response of the result using a [PSR-7](https://www.php-fig.org/psr/psr-7/)
object.

```php
$result = $es->getVersion(new Request\GetVersion);

$response = $result->getResponse(); // PSR-7 object
echo $response->getStatusCode();    // e.g. 200
var_dump($response->getHeaders());  // returns all the response headers
```

### Versioning

 This client is versioned and released alongside Enterprise Search.

 To guarantee compatibility, use the most recent version of this library within the major version of the corresponding Enterprise Search implementation.

 For example, for Enterprise Search `7.4`, use `7.4` of this library or above, but not `8.0`.

## Usage

The Enterprise Search PHP client provides API for the following Elastic products:

- [Enterpise Search](https://www.elastic.co/enterprise-search)
- [App Search](https://www.elastic.co/app-search/) 
- [Workplace Search](https://www.elastic.co/workplace-search)

### Enterprise Search API

You can consume the Enterprise Search APIs using the `Client::enterpriseSearch()` function.

For instance, you can enable the [Read-Only mode flag](https://www.elastic.co/guide/en/enterprise-search/current/read-only-api.html#setting-read-only-state)
endpoint as follows:

```php
use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\EnterpriseSearch\Request;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

$client = new Client([
    'host' => 'http://localhost:3002',
    'enterprise-search' => [
        'username' => '<insert here the username>',
        'password' => '<insert here the password>'
    ]
]);

$es = $client->enterpriseSearch();

$result = $es->putReadOnly(
    new Request\PutReadOnly(
        new Schema\ReadOnlyState(true)
    )
);

var_dump($result['enabled']); // true
```

For more information about the Enterprise Search API you can read the official documentation
[here](https://www.elastic.co/guide/en/enterprise-search/current/management-apis.html).

### App Search API

You can consume the App Search APIs using the `Client::appSearch()` function.

For instance, you can [create an Engine](https://www.elastic.co/guide/en/app-search/current/engines.html#engines-create)
using the following endpoint:

```php
use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\AppSearch\Request;

$client = new Client([
    'host' => 'http://localhost:3002',
    'app-search' => [
        'token' => '<insert here the API-KEY>'
    ]
]);

$app = $client->appSearch();

$result = $app->createEngine(
    new Request\CreateEngine('test') // create a 'test' engine
);

var_dump($result->name); // test
var_dump($result->document_count); // 0, since just created
```

For more information about the App Search API you can read the official documentation
[here](https://www.elastic.co/guide/en/app-search/current/api-reference.html).

### Workplace API

You can consume the Workplace Search APIs using the `Client::workplaceSearch()` function.

For instance, you can [index a document](https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#index-and-update)
in Workplace Search using the following endpoint:

```php
use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\WorkplaceSearch\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

$client = new Client([
    'host' => 'http://localhost:3002',
    'workplace-search' => [
        'token' => '<insert here the AUTH_TOKEN>'
    ]
]);

$workplace = $client->workplaceSearch();

// create a new document (id is optional)
$doc = new Schema\Document();
$doc->id = '1234';
$doc->title = "The Meaning of Time";
$doc->body = "Not much. It is a made up thing.";

$result = $workplace->indexDocuments(
    new Request\IndexDocuments('<insert here the Unique ID>', [$doc])
);

var_dump($result->results); // return the results
```

For more information about the Workplace Search API you can read the official documentation
[here](https://www.elastic.co/guide/en/workplace-search/current/workplace-search-api-overview.html).

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


