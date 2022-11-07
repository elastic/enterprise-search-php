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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Get information on the outdated application indices
 *
 * @see https://www.elastic.co/guide/en/enterprise-search/current/storage-api.html#get-stale-storage-api
 * @generated This file is generated, please do not edit
 */
class GetStaleStorage extends Request
{
	public function __construct()
	{
		$this->method = 'GET';
		$this->path = "/api/ent/v1/internal/storage/stale";
	}
}
