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
class EsqueuesMeJobInfo
{
	public string $created_at;
	public string $scheduled_at;
	public string $processing_started_at;
	public int $processing_latency;
	public int $time_since_last_scheduled;
	public int $time_since_last_processed;
	public int $total_processed;


	public function __construct(
		string $created_at,
		string $scheduled_at,
		string $processing_started_at,
		int $processing_latency,
		int $time_since_last_scheduled,
		int $time_since_last_processed,
		int $total_processed
	) {
		$this->created_at = $created_at;
		$this->scheduled_at = $scheduled_at;
		$this->processing_started_at = $processing_started_at;
		$this->processing_latency = $processing_latency;
		$this->time_since_last_scheduled = $time_since_last_scheduled;
		$this->time_since_last_processed = $time_since_last_processed;
		$this->total_processed = $total_processed;
	}
}
