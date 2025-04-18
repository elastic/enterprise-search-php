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
	 * @param string $authorization The Elasticsearch token API
	 * @param EsSearchParams $es_search_params
	 */
	public function __construct(string $engineName, string $authorization, ?EsSearchParams $es_search_params = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->setAuthorization($authorization);
		$this->path = "/api/as/v1/engines/$engine_name/elasticsearch/_search";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $es_search_params;
	}


	/**
	 * @param object $esSearchQueryParams Query parameters to be passed to Elasticsearch _search API
	 */
	public function setEsSearchQueryParams(object $esSearchQueryParams): self
	{
		$this->queryParams['es_search_query_params'] = $esSearchQueryParams;
		return $this;
	}


	/**
	 * @param string $xEnterpriseSearchAnalytics The search query associated with this request when recording search analytics
	 */
	public function setXEnterpriseSearchAnalytics(string $xEnterpriseSearchAnalytics): self
	{
		$this->headers['X-Enterprise-Search-Analytics'] = $xEnterpriseSearchAnalytics;
		return $this;
	}


	/**
	 * @param string $xEnterpriseSearchAnalyticsTags Analytics tags to be applied with this search request
	 */
	public function setXEnterpriseSearchAnalyticsTags(string $xEnterpriseSearchAnalyticsTags): self
	{
		$this->headers['X-Enterprise-Search-Analytics-Tags'] = $xEnterpriseSearchAnalyticsTags;
		return $this;
	}


	/**
	 * @param string $token Set the Elasticsearch token API
	 * @see https://www.elastic.co/guide/en/app-search/current/elasticsearch-search-api-reference.html
	 * @see https://www.elastic.co/guide/en/app-search/current/authentication.html#authentication-elasticsearch-tokens
	 */
	public function setAuthorization(string $token): self
	{
		$this->headers['Authorization'] = sprintf("Bearer %s", $token);
		return $this;
	}
}
