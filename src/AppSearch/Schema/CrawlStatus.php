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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class CrawlStatus
{
	public int $queue_size;
	public int $pages_visited;
	public int $urls_allowed;
	public float $crawl_duration_msec;
	public float $crawling_time_msec;
	public float $avg_response_time_msec;
	public int $active_threads;
	public CrawlerDeniedUrlsInfo $urls_denied;
	public CrawlerStatusCodesInfo $status_codes;
	public CrawlerHttpClientStats $http_client;
}
