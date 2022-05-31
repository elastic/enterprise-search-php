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

use Elastic\EnterpriseSearch\AppSearch\Schema\Domain;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update domain configuration
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-crawler-domain
 * @generated This file is generated, please do not edit
 */
class PutCrawlerDomain extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param Domain $domain
	 */
	public function __construct(string $engineName, string $domainId, Domain $domain)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$this->path = "/api/as/v0/engines/$engine_name/crawler/domains/$domain_id";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $domain;
	}
}
