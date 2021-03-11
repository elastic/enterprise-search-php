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
class JobStore
{
	/** @var int */
	public $waiting;

	/** @var int */
	public $working;

	/** @var JobTypes */
	public $job_types;


	public function __construct(int $waiting, int $working, JobTypes $job_types)
	{
		$this->waiting = $waiting;
		$this->working = $working;
		$this->job_types = $job_types;
	}
}
