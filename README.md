<p align="center"><img src="https://github.com/elastic/enterprise-search-php/blob/master/logo-enterprise-search.png?raw=true" alt="Elastic App Search Logo"></p>

<p align="center"><a href="https://circleci.com/gh/elastic/enterprise-search-php"><img src="https://circleci.com/gh/swiftype/swiftype-app-search-php.svg?style=svg&circle-token=c5aa66b0ee683b0f485c414eb6554837c29cc150" alt="CircleCI buidl"></a></p>

> A first-party PHP client to interface with [Elastic Enterpise Search](https://www.elastic.co/fr/products/enterprise-search).

## Contents

- [Getting started](#getting-started-)
- [Usage](#usage)
- [Development](#development)
- [FAQ](#faq-)
- [Contribute](#contribute-)
- [License](#license-)

***

## Getting started 🐣

Using this client assumes that you have a [Enterprise Search](https://www.elastic.co/fr/products/enterprise-search) server installed and running.

You can install the client in your project by using composer:

```bash
composer require elastic/enterprise-search
```

### Versioning

 This client is versioned and released alongside Enterprise Search.

 To guarantee compatibility, use the most recent version of this library within the major version of the corresponding App Search implementation.

 For example, for Enterprise Search `7.4`, use `7.4` of this library or above, but not `8.0`.

## Usage

### Configuring the client

#### Basic client instantiation

To instantiate a new client you can use `\Elastic\AppSearch\Client\ClientBuilder`:

```php
  $apiEndpoint   = 'http://localhost:3002/';
  $apiKey        = 'private-XXXXXXXXXXXX';
  $clientBuilder = \Elastic\AppSearch\Client\ClientBuilder::create($apiEndpoint, $apiKey);

  $client = $clientBuilder->build();
```

**Notes:**

- The resulting client will be of type `\Elastic\AppSearch\Client\Client`

- You can find the API endpoint and your API key URL in your App Search account: https://app.swiftype.com/as/credentials.

- You can use any type of API Key (private, public or admin). The client will throw an exception if you try to execute an action that is not authorized for the key used.

### Basic usage

#### Retrieve or create an engine

Most methods of the API require that you have access to an Engine.

To check if an Engine exists and retrieve its configuration, you can use the `Client::getEngine` method :

```php
  $engine = $client->getEngine('my-engine');
```

If the Engine does not exists yet, you can create it by using the `Client::createEngine` method :

```php
  $engine = $client->createEngine('my-engine', 'en');
```

The second parameter (`$language`) is optional. Set it to `null` to apply the `universal` language.

[Read more](https://swiftype.com/documentation/app-search/api/engines#multi-language) about language support.

#### Index some documents

You can use the `Client::indexDocuments` method to index some documents into the Engine:

```php
    $documents = [
      ['id' => 'first-document', 'name' => 'Document name', 'description' => 'Document description'],
      ['id' => 'other-document', 'name' => 'Other document name', 'description' => 'Other description'],
    ];

    $indexingResults = $client->indexDocuments('my-engine', $documents);
```

The `$indexingResults` array will contain the result of the indexation of each documents. You should always check the content of the result.

[Read more](https://swiftype.com/documentation/app-search/api/documents#create) about document indexing.

#### Search

You can use the `Client::search` method to search in your Engine:

```php
    $searchParams = [
      'page'  => ['current' => 1, 'size' => 10];
    ];

    $searchResponse = $client->search('my-engine', 'search text', $searchParams);
```
If you want to match all documents you can use and empty search query `''` as second parameter (`$queryText`).

The `$searchRequestParams` parameter is optional and can be used to use advanced search features. Allowed params are :

Param name      | Documentation URL
--------------- | ----------------------------------------------------------------------
`page`          | https://swiftype.com/documentation/app-search/api/search#paging
`filters`       | https://swiftype.com/documentation/app-search/api/search/filters
`facets`        | https://swiftype.com/documentation/app-search/api/search/facets
`sort`          | https://swiftype.com/documentation/app-search/api/search/sorting
`boosts`        | https://swiftype.com/documentation/app-search/api/search/boosts
`search_fields` | https://swiftype.com/documentation/app-search/api/search/search-fields
`result_fields` | https://swiftype.com/documentation/app-search/api/search/result-fields
`group`         | https://swiftype.com/documentation/app-search/api/search/grouping

The search response will contains at least a meta field and a results field as shown in this example:

```php
[
    'meta' => [
      'warnings' => [],
      'page' => [
        'current' => 1,
        'total_pages' => 1,
        'total_results' => 1,
        'size' => 10
      ],
      'request_id' => 'feff7cf2359a6f6da84586969ef0ca89'
    ],
    'results' => [
      [
        'id' => ['raw' => 'first-document'],
        'name' => ['raw' => 'Document name'],
        'description' => ['raw' => ['Document description']
      ]
    ]
  ]
]
```

### Clients methods

Method      | Description | Documentation
------------|-------------|--------------
**`addUserPermissions`**| adds user permissions<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$user` (required) <br />   - `$permissions` (required) <br/>
**`deleteDocuments`**| destroys documents<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$documentIds` (required) <br/>
**`getUserPermissions`**| shows user permissions<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$user` (required) <br/>
**`indexDocuments`**| creates documents<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$documents` (required) <br/>
**`listAllPermissions`**| lists permissions<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$currentPage`<br />   - `$pageSize`<br/>
**`removeUserPermissions`**| removes user permissions<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$user` (required) <br />   - `$permissionsObject` (required) <br/>
**`updateUserPermissions`**| updates user permissions<br/> <br/> **Parameters :** <br />  - `$contentSourceKey` (required) <br />   - `$user` (required) <br />   - `$permissions` (required) <br/>

## Development

Code for the endpoints is generated automatically using a custom version of [OpenAPI Generator](https://github.com/openapitools/openapi-generator).

To regenerate endpoints, use the docker laucher packaged in `vendor/bin`:

```bash
./vendor/bin/elastic-openapi-codegen.sh
```

The custom generator will be built and launched using the following Open API spec file : `resources/api/api-spec.yml`.

You can then commit and PR the modified api-spec file and your endpoints code files.

The client class and readme may be changed in some cases. Do not forget to include them in your commit!

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

Thank you to all the [contributors](https://github.com/elastic/enterprise-search-php/graphs/contributors)!

