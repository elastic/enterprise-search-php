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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\Sitemap;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update a sitemap
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-sitemap
 */
class PutCrawlerSitemap extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param string $sitemapId Sitemap ID
	 * @param Sitemap $sitemap
	 */
	public function __construct(string $engineName, string $domainId, string $sitemapId, Sitemap $sitemap)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$sitemap_id = urlencode($sitemapId);
		$this->path = "/api/as/v0/engines/$engine_name/crawler/domains/$domain_id/sitemaps/$sitemap_id";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $sitemap;
	}
}
