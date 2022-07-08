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

use Elastic\EnterpriseSearch\AppSearch\Schema\EsSearchParams;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Run a search
 *
 * @see https://www.elastic.co/guide/en/app-search/current/elasticsearch-search-api-reference.html
 * @generated This file is generated, please do not edit
 */
class SearchEsSearch extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param EsSearchParams $es_search_params
	 */
	public function __construct(string $engineName, EsSearchParams $es_search_params = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v0/engines/$engine_name/elasticsearch/_search";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $es_search_params;
	}
}
