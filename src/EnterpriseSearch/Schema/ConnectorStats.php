<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
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
 * @internal
 */
class ConnectorStats
{
	/** @var bool */
	public $alive;

	/** @var ConnectorPools */
	public $pool;

	/** @var JobStore */
	public $job_store;


	public function __construct(bool $alive, ConnectorPools $pool, JobStore $job_store)
	{
		$this->alive = $alive;
		$this->pool = $pool;
		$this->job_store = $job_store;
	}
}
