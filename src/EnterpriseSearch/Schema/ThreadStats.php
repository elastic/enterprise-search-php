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
class ThreadStats
{
	public int $thread_count;
	public int $peak_thread_count;
	public int $total_started_thread_count;
	public int $daemon_thread_count;


	public function __construct(
		int $daemon_thread_count,
		int $peak_thread_count,
		int $thread_count,
		int $total_started_thread_count,
	) {
		$this->daemon_thread_count = $daemon_thread_count;
		$this->peak_thread_count = $peak_thread_count;
		$this->thread_count = $thread_count;
		$this->total_started_thread_count = $total_started_thread_count;
	}
}
