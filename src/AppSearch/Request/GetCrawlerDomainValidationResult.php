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
 * Validate Domain with Crawler
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-validate-domain
 * @generated This file is generated, please do not edit
 */
class GetCrawlerDomainValidationResult extends Request
{
	/**
	 * @param string $url
	 */
	public function __construct(string $url)
	{
		$this->method = 'POST';
		$this->path = "/api/as/v1/crawler/validate_url";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $url;
	}
}
