#!/usr/bin/env bash

# Get the Elasticsearch token API if App Search
if [[ "$TEST_SUITE" == "app-search" ]]; then
    api=$(php util/elasticsearch_token_api.php)
    echo "Generating an Elasticsearch Token API: $api"
    export ELASTICSEARCH_API_KEY=$api
fi

# Run integration tests
vendor/bin/phpunit -c "phpunit-integration-${TEST_SUITE}.xml"