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
class AppStats
{
	/** @var int */
	public $pid;

	/** @var string */
	public $start;

	/** @var string */
	public $end;

	/** @var AppMetrics */
	public $metrics;


	public function __construct(int $pid, string $start, string $end, AppMetrics $metrics)
	{
		$this->pid = $pid;
		$this->start = $start;
		$this->end = $end;
		$this->metrics = $metrics;
	}
}
