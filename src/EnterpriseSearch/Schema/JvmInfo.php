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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\JavaGcInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\MemoryUsage;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\ThreadStats;

class JvmInfo
{
	public int $pid;
	public int $uptime;
	public MemoryUsage $memory_usage;
	public array $memory_pools;
	public ThreadStats $threads;
	public string $vm_version;
	public string $vm_vendor;
	public string $vm_name;
	public JavaGcInfo $gc;


	/**
	 * @param string[] $memory_pools
	 */
	public function __construct(
		array $memory_pools,
		MemoryUsage $memory_usage,
		int $pid,
		ThreadStats $threads,
		JavaGcInfo $gc,
		int $uptime,
		string $vm_name,
		string $vm_vendor,
		string $vm_version
	) {
		$this->memory_pools = $memory_pools;
		$this->memory_usage = $memory_usage;
		$this->pid = $pid;
		$this->threads = $threads;
		$this->gc = $gc;
		$this->uptime = $uptime;
		$this->vm_name = $vm_name;
		$this->vm_vendor = $vm_vendor;
		$this->vm_version = $vm_version;
	}
}
