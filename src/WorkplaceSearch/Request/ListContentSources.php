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

/**
 * Retrieves all content sources
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#list-content-sources-api
 * @generated This file is generated, please do not edit
 */
class ListContentSources extends Request
{
	public function __construct()
	{
		$this->method = 'GET';
		$this->path = "/api/ws/v1/sources";
	}


	/**
	 * @param int $currentPage Which page of results to request
	 */
	public function setCurrentPage(int $currentPage): self
	{
		$this->queryParams['page[current]'] = $currentPage;
		return $this;
	}


	/**
	 * @param int $pageSize The number of results to return in a page
	 */
	public function setPageSize(int $pageSize): self
	{
		$this->queryParams['page[size]'] = $pageSize;
		return $this;
	}
}
