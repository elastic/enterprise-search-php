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
 * Retrieve all curations
 *
 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-read
 * @generated This file is generated, please do not edit
 */
class ListCurations extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 */
	public function __construct(string $engineName)
	{
		$this->method = 'GET';
		$this->headers['Content-Type'] = 'application/json';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/curations";
	}


	/**
	 * @param int $currentPage The page to fetch. Defaults to 1
	 */
	public function setCurrentPage(int $currentPage): self
	{
		$this->body['page']['current'] = $currentPage;
		return $this;
	}


	/**
	 * @param int $pageSize The number of results per page
	 */
	public function setPageSize(int $pageSize): self
	{
		$this->body['page']['size'] = $pageSize;
		return $this;
	}
}
