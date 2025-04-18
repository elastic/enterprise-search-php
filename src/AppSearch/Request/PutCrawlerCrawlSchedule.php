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

use Elastic\EnterpriseSearch\AppSearch\Schema\CrawlSchedule;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Set crawl schedule
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-crawler-crawl-schedule
 * @generated This file is generated, please do not edit
 */
class PutCrawlerCrawlSchedule extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param CrawlSchedule $crawl_schedule
	 */
	public function __construct(string $engineName, ?CrawlSchedule $crawl_schedule = null)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/crawler/crawl_schedule";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $crawl_schedule;
	}
}
