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

use Elastic\EnterpriseSearch\AppSearch\Schema\SearchRequestParams;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieve the search query
 *
 * @see https://www.elastic.co/guide/en/app-search/current/search-explain.html
 * @generated This file is generated, please do not edit
 */
class SearchExplain extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param SearchRequestParams $search_request_params
	 */
	public function __construct(string $engineName, ?SearchRequestParams $search_request_params = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/search_explain";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $search_request_params;
	}
}
