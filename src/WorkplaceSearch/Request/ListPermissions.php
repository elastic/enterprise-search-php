<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Lists all permissions for all users
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#list
 */
class ListPermissions extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 */
	public function __construct(string $contentSourceId)
	{
		$this->method = 'GET';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/permissions";
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
