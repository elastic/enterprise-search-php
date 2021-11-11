<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\ApiKey;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update an API key
 *
 * @internal
 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-update
 */
class PutApiKey extends Request
{
	/**
	 * @param string $apiKeyName Name of an API key
	 * @param ApiKey $apiKey API key details
	 */
	public function __construct(string $apiKeyName, ApiKey $apiKey)
	{
		$this->method = 'PUT';
		$api_key_name = urlencode($apiKeyName);
		$this->path = "/api/as/v1/credentials/$api_key_name";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $apiKey;
	}
}
