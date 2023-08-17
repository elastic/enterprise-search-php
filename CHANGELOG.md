# Changelog

## 8.8.1 (2023-08-17)

- Fixed Client version 
  [cc55620](https://github.com/elastic/enterprise-search-php/commit/cc5562058b5d6a525d9b51e11a14694366d94184)

## 8.8.0 (2023-06-09)

Release compatible with Enterprise Search, App Search and Workplace Search 8.8.

## 8.7.0 (2023-04-04)

Release compatible with Enterprise Search, App Search and Workplace Search 8.7.

- Fixed incorrect property name `boost` for `SearchRequestParams` in AppSearch
  [#35](https://github.com/elastic/enterprise-search-php/issues/35)
- Fixed Document class in `AppSearch\Request\IndexDocuments`
  [#30](https://github.com/elastic/enterprise-search-php/issues/30)

## 8.6.0 (2023-01-27)

Release compatible with Enterprise Search, App Search and Workplace Search 8.6.

## 8.5.0 (2022-11-07)

Release compatible with Enterprise Search, App Search and Workplace Search 8.5.

## 8.4.0 (2022-08-24)

Release compatible with Enterprise Search, App Search and Workplace Search 8.4.

This release includes the following fixes:

- Fixed 8.1 deprecation warning for ArrayAccess::offsetGet()
  [#25](https://github.com/elastic/enterprise-search-php/pull/25)

## 8.3.0 (2022-07-08)

Release compatible with Enterprise Search, App Search and Workplace Search 8.3

## 8.2.0 (2022-07-08)

Release compatible with Enterprise Search, App Search and Workplace Search 8.2

## 8.1.0 (2022-07-06)

Release compatible with Enterprise Search, App Search and Workplace Search 8.1

## 8.0.0 (2022-06-23)

This is the first stable release of version 8.

This major release includes the following changes:

- License changed from Apache-2.0 to MIT

- Usage of the `elastic-transport-php` version 8.x, [here the CHANGELOG](https://github.com/elastic/elastic-transport-php/blob/master/CHANGELOG.md)

We didn't change the existing API architecture of the client, if you notice
something you can open an [issue on github](https://github.com/elastic/enterprise-search-php/issues), thanks!

For a list of BC breaks in Enterprise Search server you can read the
[8.0 release notes](https://www.elastic.co/guide/en/enterprise-search/current/release-notes-8.0.0.html)

## 7.17.1 (2022-06-03)

- Fixed AppSearch Curation API hidden and promoted properties
  [#19](https://github.com/elastic/enterprise-search-php/pull/19)
  
## 7.17.0 (2022-05-11)

- Fixed support of array in `sort` parameter for AppSearch::search()
  [#11](https://github.com/elastic/enterprise-search-php/issues/11)
- Fixed PHP 8.1 deprecation notice on `Elastic\EnterpriseSearch\Response\Response::offsetGet`
  [#16](https://github.com/elastic/enterprise-search-php/issues/16)
  
## 7.16.0 (2022-01-31)

- Changed PHP `7.4` as minimum required. Official PHP team support for PHP `7.3` ends on 2021 December 06
- `Elastic\EnterpriseSearch\AppSearch\Schema\ClickParamsRequest` is now `Elastic\EnterpriseSearch\AppSearch\Schema\ClickParams`
- Removed `setLimit` in `Elastic\EnterpriseSearch\AppSearch\Request\ListCrawlerCrawlRequests`
- Added `setPageSize` and `setCurrentPage` in `Elastic\EnterpriseSearch\AppSearch\Request\ListCrawlerCrawlRequests`
- Fixed pagination parameter
  [#10](https://github.com/elastic/enterprise-search-php/issues/10)
  
## 7.14.1 (2021-11-11)

Patch release with the following fixes:

- Removed query string params for App Search endpoints 
  [#5](https://github.com/elastic/enterprise-search-php/pull/5)
## 7.13.1 (2021-11-09)

Patch release with the following fixes:

- Removed query string params for App Search endpoints 
  [#5](https://github.com/elastic/enterprise-search-php/pull/5)
  
## 7.15.0 (2021-10-14)

Release compatible with Enterprise Search, App Search and Workplace Search 7.15
## 7.14.0 (2021-08-04)

Release compatible with Enterprise Search, App Search and Workplace Search 7.14

## 7.13.0 (2021-05-25)

First stable release, created to be compatible with Enterprise Search 7.13

## 7.12.0 beta2 (2021-04-23)

Second beta version of PHP client for Enterprise Search

## 7.12.0 beta1 (2021-04-11)

First beta version of PHP client for Enterprise Search