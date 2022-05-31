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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * List crawler domains
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-domain
 * @generated This file is generated, please do not edit
 */
class ListCrawlerDomains extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 */
	public function __construct(string $engineName)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$this->headers['Content-Type'] = 'application/json';
		$this->path = "/api/as/v0/engines/$engine_name/crawler/domains";
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
