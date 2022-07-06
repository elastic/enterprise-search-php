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
class CrawlerOverviewResponse
{
	public array $domains;
	public array $events;

	/** @var null|CrawlRequest */
	public $most_recent_crawl_request;


	/**
	 * @param Domain[] $domains
	 * @param SimpleObject[] $events
	 * @param null|CrawlRequest $most_recent_crawl_request
	 */
	public function __construct(array $domains, array $events, $most_recent_crawl_request)
	{
		$this->domains = $domains;
		$this->events = $events;
		$this->most_recent_crawl_request = $most_recent_crawl_request;
	}
}
