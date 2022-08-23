<?php
/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

$user = getenv('APP_SEARCH_USER') ?: 'elastic';
$pass = getenv('APP_SEARCH_PASSWORD') ?: 'changeme';
$url = getenv('external_elasticsearch_url') ?: sprintf("https://%s:%s@instance:9200", $user, $pass);

$client = new GuzzleHttp\Client();

$result = $client->request(
    'POST', 
    "$url/_security/oauth2/token",
    [
        'verify' => false,
        'json' => [
            'grant_type' => 'password',
            'username' => $user,
            'password' => $pass
        ]
    ]
);
$json = json_decode((string) $result->getBody());
echo $json->access_token;

