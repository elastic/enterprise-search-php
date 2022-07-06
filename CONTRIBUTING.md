# Contributing to enterprise-search-python

## Contributing Code Changes

1. Please make sure you have signed the [Contributor License
   Agreement](http://www.elastic.co/contributor-agreement/). We are not
   asking you to assign copyright to us, but to give us the right to distribute
   your code without restriction. We ask this of all contributors in order to
   assure our users of the origin and continuing existence of the code. You only
   need to sign the CLA once.
 
2. Run the static analysis tool (phpcs) and test suite to ensure your changes do not break existing code:

   Run the static analysis tool:
   ```
   composer run-script phpcs
   ```
   
   Run the unit test suite:
   ```
   composer run-script test
   ```

3. Rebase your changes. Update your local repository with the most recent code
   from the master `enterprise-search-php` repository and rebase your branch
   on top of the latest `master` branch. All of your changes will be squashed
   into a single commit so don't worry about pushing multiple times.
   
4. Submit a pull request. Push your local changes to your forked repository
   and [submit a pull request](https://github.com/elastic/enterprise-search-php/pulls)
   and mention the issue number if any (`Fixes #123`) Make sure that you
   add or modify tests related to your changes so that CI will pass.
   
5. Sit back and wait. There may be some discussion on your pull request and
   if changes are needed we would love to work with you to get your pull request
   merged into enterprise-search-php.

## Running Integration Tests

Run the full integration test suite with `$ .ci/run-tests`.

There are several environment variabels that control integration tests:

- `PHP_VERSION`: Version of PHP to use, defaults to `7.4`
- `STACK_VERSION`: Version of Elasticsearch to use. These should be
  the same as tags of `docker.elastic.co/elasticsearch/elasticsearch`
  such as `8.0.0-SNAPSHOT`, `7.11-SNAPSHOT`, etc. Defaults to the
  same `*-SNAPSHOT` version as the branch.
- `ENTERPRISE_SEARCH_USER`: The username, default to `elastic`.
- `ENTERPRISE_SEARCH_PASSWORD`: Password for the `elastic` user on Enterprise Search. This is typically the same as the `elastic` password on Elasticsearch.
- `APP_SEARCH_USER`: The username, default to `elastic`.
- `APP_SEARCH_PASSWORD`: Password for the `elastic` user on App Search. This is typically the same as the `elastic` password on Elasticsearch.
- `WORKPLACE_SEARCH_USER`: The username, default to `elastic`.
- `WORKPLACE_SEARCH_PASSWORD`: Password for the `elastic` user on Workplace Search. This is typically the same as the `elastic` password on Elasticsearch.