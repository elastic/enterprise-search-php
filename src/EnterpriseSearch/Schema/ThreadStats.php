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
class ThreadStats
{
	/** @var int */
	public $thread_count;

	/** @var int */
	public $peak_thread_count;

	/** @var int */
	public $total_started_thread_count;

	/** @var int */
	public $daemon_thread_count;


	public function __construct(
		int $thread_count,
		int $peak_thread_count,
		int $total_started_thread_count,
		int $daemon_thread_count
	) {
		$this->thread_count = $thread_count;
		$this->peak_thread_count = $peak_thread_count;
		$this->total_started_thread_count = $total_started_thread_count;
		$this->daemon_thread_count = $daemon_thread_count;
	}
}
