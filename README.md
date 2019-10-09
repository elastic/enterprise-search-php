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

 To guarantee compatibility, use the most recent version of this library within the major version of the corresponding Enterprise Search implementation.

 For example, for Enterprise Search `7.4`, use `7.4` of this library or above, but not `8.0`.

## Usage

**TODO**

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

