#!/usr/bin/env bash

# Run integration tests
vendor/bin/phpunit -c "phpunit-integration-${TEST_SUITE}.xml"