#!/usr/bin/env bash
#
# Called by entry point `run-test` use this script to add your repository specific test commands
#
# Once called Elasticsearch is up and running
#
# Its recommended to call `imports.sh` as defined here so that you get access to all variables defined there
#
# Any parameters that test-matrix.yml defines should be declared here with appropiate defaults

script_path=$(dirname $(realpath -s $0))
source $script_path/functions/imports.sh
set -euo pipefail

PHP_VERSION=${PHP_VERSION-8.0-cli}

echo -e "\033[34;1mINFO:\033[0m VERSION: ${STACK_VERSION}\033[0m"
echo -e "\033[34;1mINFO:\033[0m TEST_SUITE: ${TEST_SUITE}\033[0m"

echo "--- :telephone_receiver: Pinging Elasticsearch :elasticsearch:"
curl --insecure --fail $external_elasticsearch_url/_cluster/health?pretty

enterprise_search_url="http://localhost:3002"
echo "--- :telephone_receiver: Pinging Enterprise Search :elastic-enterprise-search:"
curl -I --fail $enterprise_search_url

echo -e "\033[32;1mSUCCESS:\033[0m successfully started the ${STACK_VERSION} stack.\033[0m"

echo "--- :docker: :php: Building Docker image"
docker build \
  --no-cache \
  --file $script_path/Dockerfile \
  --tag elastic/enterprise-search-php \
  --build-arg PHP_VERSION=${PHP_VERSION} \
  .

echo "--- :docker: :php: Running Client Container"

repo=$(realpath $(dirname $(realpath -s $0))/../)

docker run \
  --network=${network_name} \
  --workdir="/usr/src/app" \
  --volume=${repo}/tests:/usr/src/app/tests \
  --env STACK_VERSION=${STACK_VERSION} \
  --env TEST_SUITE=${TEST_SUITE} \
  --env ENTERPRISE_SEARCH_URL="http://${CONTAINER_NAME}:3002" \
  --env PHP_VERSION=${PHP_VERSION} \
  --ulimit nofile=65535:65535 \
  --name enterprise-search-php \
  --rm \
  elastic/enterprise-search-php
