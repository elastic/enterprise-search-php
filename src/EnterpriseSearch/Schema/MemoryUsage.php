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
class MemoryUsage
{
	public int $heap_init;
	public int $heap_used;
	public int $heap_committed;
	public int $heap_max;
	public int $non_heap_init;
	public int $non_heap_committed;
	public int $object_pending_finalization_count;


	public function __construct(
		int $heap_committed,
		int $heap_init,
		int $heap_max,
		int $heap_used,
		int $non_heap_committed,
		int $non_heap_init,
		int $object_pending_finalization_count
	) {
		$this->heap_committed = $heap_committed;
		$this->heap_init = $heap_init;
		$this->heap_max = $heap_max;
		$this->heap_used = $heap_used;
		$this->non_heap_committed = $non_heap_committed;
		$this->non_heap_init = $non_heap_init;
		$this->object_pending_finalization_count = $object_pending_finalization_count;
	}
}
