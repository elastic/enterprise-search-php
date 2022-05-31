<?php

/**
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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\SearchApiQuery;

/**
 * Search across available sources with various query tuning options
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-search-api.html
 * @generated This file is generated, please do not edit
 */
class Search extends Request
{
	/**
	 * @param SearchApiQuery $search_api_query
	 */
	public function __construct(SearchApiQuery $search_api_query)
	{
		$this->method = 'POST';
		$this->path = "/api/ws/v1/search";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $search_api_query;
	}
}
