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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Get information about the resource usage of the application, the state of different internal queues, etc.
 * @see https://www.elastic.co/guide/en/enterprise-search/current/monitoring-apis.html#stats-api-example
 */
class GetStats extends Request
{
	public function __construct()
	{
		$this->method = 'GET';
		$this->path = "/api/ent/v1/internal/stats";
	}


	/**
	 * @param string[] $include Comma-separated list of stats to return
	 */
	public function setInclude(array $include): self
	{
		$this->queryParams['include'] = implode(',', $include);
		return $this;
	}
}
