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
 * Get process crawl details
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-process-crawls-id
 * @generated This file is generated, please do not edit
 */
class GetCrawlerProcessCrawl extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $processCrawlId Process Crawl identifier
	 */
	public function __construct(string $engineName, string $processCrawlId)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$process_crawl_id = urlencode($processCrawlId);
		$this->path = "/api/as/v1/engines/$engine_name/crawler/process_crawls/$process_crawl_id";
	}
}
