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

class MemoryUsage
{
	/** @var int */
	public $heap_init;

	/** @var int */
	public $heap_used;

	/** @var int */
	public $heap_committed;

	/** @var int */
	public $heap_max;

	/** @var int */
	public $non_heap_init;

	/** @var int */
	public $non_heap_committed;


	public function __construct(
		int $heap_init,
		int $heap_used,
		int $heap_committed,
		int $heap_max,
		int $non_heap_init,
		int $non_heap_committed
	) {
		$this->heap_init = $heap_init;
		$this->heap_used = $heap_used;
		$this->heap_committed = $heap_committed;
		$this->heap_max = $heap_max;
		$this->non_heap_init = $non_heap_init;
		$this->non_heap_committed = $non_heap_committed;
	}
}
