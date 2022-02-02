# Changelog

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