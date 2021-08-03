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

use Elastic\EnterpriseSearch\Request\Request;

/**
 * The API Log displays API request and response data at the Engine level
 * @internal
 */
class GetApiLogs extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $fromDate Filter date from
	 * @param string $toDate Filter date to
	 */
	public function __construct(string $engineName, string $fromDate, string $toDate)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$this->queryParams['filters[date][from]'] = $fromDate;
		$this->queryParams['filters[date][to]'] = $toDate;
		$this->path = "/api/as/v1/engines/$engine_name/logs/api";
	}


	/**
	 * @param int $toDate The page to fetch. Defaults to 1
	 */
	public function setCurrentPage(int $toDate): self
	{
		$this->queryParams['filters[date][to]'] = $toDate;
		return $this;
	}


	/**
	 * @param int $toDate The number of results per page
	 */
	public function setPageSize(int $toDate): self
	{
		$this->queryParams['filters[date][to]'] = $toDate;
		return $this;
	}


	/**
	 * @param string $query Use this to specify a particular endpoint, like analytics, search, curations and so on
	 */
	public function setQuery(string $query): self
	{
		$this->queryParams['query'] = $query;
		return $this;
	}


	/**
	 * @param string $httpStatusFilter Filter based on a particular status code: 400, 401, 403, 429, 200
	 */
	public function setHttpStatusFilter(string $httpStatusFilter): self
	{
		$this->queryParams['filters[status]'] = $httpStatusFilter;
		return $this;
	}


	/**
	 * @param string $httpMethodFilter Filter based on a particular HTTP method: GET, POST, PUT, PATCH, DELETE
	 */
	public function setHttpMethodFilter(string $httpMethodFilter): self
	{
		$this->queryParams['filters[method]'] = $httpMethodFilter;
		return $this;
	}


	/**
	 * @param string $sortDirection Would you like to have your results ascending, oldest to newest, or descending, newest to oldest?
	 */
	public function setSortDirection(string $sortDirection): self
	{
		$this->queryParams['sort_direction'] = $sortDirection;
		return $this;
	}
}
