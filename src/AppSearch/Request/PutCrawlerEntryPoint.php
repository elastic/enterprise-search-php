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

use Elastic\EnterpriseSearch\AppSearch\Schema\EntryPoint;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update a crawler entry point
 *
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-entry-point
 * @generated This file is generated, please do not edit
 */
class PutCrawlerEntryPoint extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param string $entryPointId Crawler Entry Point identifier
	 * @param EntryPoint $entry_point
	 */
	public function __construct(
		string $engineName,
		string $domainId,
		string $entryPointId,
		EntryPoint $entry_point = null,
	) {
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$entry_point_id = urlencode($entryPointId);
		$this->path = "/api/as/v1/engines/$engine_name/crawler/domains/$domain_id/entry_points/$entry_point_id";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $entry_point;
	}
}
