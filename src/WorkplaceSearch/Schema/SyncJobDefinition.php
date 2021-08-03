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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @internal
 */
class SyncJobDefinition
{
	/** @var string */
	public $id;

	/** @var string */
	public $job_type;

	/** @var string */
	public $status;

	/** @var string */
	public $created_at;

	/** @var string */
	public $last_updated_at;


	public function __construct(string $id, string $job_type, string $status, string $created_at, string $last_updated_at)
	{
		$this->id = $id;
		$this->job_type = $job_type;
		$this->status = $status;
		$this->created_at = $created_at;
		$this->last_updated_at = $last_updated_at;
	}
}
