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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class WorkplaceSearchProductUsageInfo
{
	public int $total_org_sources;
	public int $total_private_sources;
	public int $total_queries_last_30_days;


	public function __construct(int $total_org_sources, int $total_private_sources, int $total_queries_last_30_days)
	{
		$this->total_org_sources = $total_org_sources;
		$this->total_private_sources = $total_private_sources;
		$this->total_queries_last_30_days = $total_queries_last_30_days;
	}
}
