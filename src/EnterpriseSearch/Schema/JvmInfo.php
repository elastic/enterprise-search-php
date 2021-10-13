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
class JvmInfo
{
	/** @var int */
	public $pid;

	/** @var int */
	public $uptime;

	/** @var MemoryUsage */
	public $memory_usage;

	/** @var array */
	public $memory_pools;

	/** @var ThreadStats */
	public $threads;

	/** @var string */
	public $vm_version;

	/** @var string */
	public $vm_vendor;

	/** @var string */
	public $vm_name;


	/**
	 * @param string[] $memory_pools
	 */
	public function __construct(
		array $memory_pools,
		MemoryUsage $memory_usage,
		int $pid,
		ThreadStats $threads,
		int $uptime,
		string $vm_name,
		string $vm_vendor,
		string $vm_version
	) {
		$this->memory_pools = $memory_pools;
		$this->memory_usage = $memory_usage;
		$this->pid = $pid;
		$this->threads = $threads;
		$this->uptime = $uptime;
		$this->vm_name = $vm_name;
		$this->vm_vendor = $vm_vendor;
		$this->vm_version = $vm_version;
	}
}
