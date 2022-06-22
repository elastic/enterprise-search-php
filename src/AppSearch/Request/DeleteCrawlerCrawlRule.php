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
 * Delete a crawl rule
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-crawl-rule
 * @generated This file is generated, please do not edit
 */
class DeleteCrawlerCrawlRule extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param string $crawlRuleId Crawl Rule ID
	 */
	public function __construct(string $engineName, string $domainId, string $crawlRuleId)
	{
		$this->method = 'DELETE';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$crawl_rule_id = urlencode($crawlRuleId);
		$this->path = "/api/as/v1/engines/$engine_name/crawler/domains/$domain_id/crawl_rules/$crawl_rule_id";
	}
}
