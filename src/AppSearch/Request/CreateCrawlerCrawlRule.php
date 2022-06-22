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

use Elastic\EnterpriseSearch\AppSearch\Schema\CrawlRule;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Create a crawl rule
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawl-rules
 * @generated This file is generated, please do not edit
 */
class CreateCrawlerCrawlRule extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param CrawlRule $crawl_rule
	 */
	public function __construct(string $engineName, string $domainId, CrawlRule $crawl_rule = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$this->path = "/api/as/v1/engines/$engine_name/crawler/domains/$domain_id/crawl_rules";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $crawl_rule;
	}
}
