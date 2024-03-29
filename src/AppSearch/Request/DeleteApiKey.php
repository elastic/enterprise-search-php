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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Delete an API key
 *
 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-destroy
 * @generated This file is generated, please do not edit
 */
class DeleteApiKey extends Request
{
	/**
	 * @param string $apiKeyName Name of an API key
	 */
	public function __construct(string $apiKeyName)
	{
		$this->method = 'DELETE';
		$api_key_name = urlencode($apiKeyName);
		$this->path = "/api/as/v1/credentials/$api_key_name";
	}
}
