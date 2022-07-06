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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class ConnectorPool
{
	public bool $running;
	public int $queue_depth;
	public int $size;
	public int $busy;
	public int $idle;
	public int $total_scheduled;
	public int $total_completed;


	public function __construct(
		int $busy,
		int $idle,
		int $queue_depth,
		bool $running,
		int $size,
		int $total_completed,
		int $total_scheduled
	) {
		$this->busy = $busy;
		$this->idle = $idle;
		$this->queue_depth = $queue_depth;
		$this->running = $running;
		$this->size = $size;
		$this->total_completed = $total_completed;
		$this->total_scheduled = $total_scheduled;
	}
}
