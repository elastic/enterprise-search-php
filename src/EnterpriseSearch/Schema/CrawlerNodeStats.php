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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class CrawlerNodeStats
{
	public int $active_threads;
	public int $pages_visited;
	public int $urls_allowed;
	public CrawlerQueueSizesInfo $queue_size;
	public CrawlerDeniedUrlsInfo $urls_denied;
	public CrawlerStatusCodesInfo $status_codes;
	public CrawlerWorkersInfo $workers;


	public function __construct(
		int $pages_visited,
		int $urls_allowed,
		CrawlerDeniedUrlsInfo $urls_denied,
		CrawlerStatusCodesInfo $status_codes,
		CrawlerQueueSizesInfo $queue_size,
		int $active_threads,
		CrawlerWorkersInfo $workers
	) {
		$this->pages_visited = $pages_visited;
		$this->urls_allowed = $urls_allowed;
		$this->urls_denied = $urls_denied;
		$this->status_codes = $status_codes;
		$this->queue_size = $queue_size;
		$this->active_threads = $active_threads;
		$this->workers = $workers;
	}
}
