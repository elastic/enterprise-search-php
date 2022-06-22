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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

use InvalidArgumentException;

/**
 * @generated This file is generated, please do not edit
 */
class SyncJobDefinition
{
	public string $id;
	public string $job_type;
	public string $status;
	public string $created_at;
	public string $last_updated_at;


	public function __construct(string $id, string $job_type, string $status, string $created_at, string $last_updated_at)
	{
		$this->id = $id;
		if (!in_array($job_type, ['full','incremental','delete','permissions'])) {
			throw new InvalidArgumentException('The $job_type parameter must be one of these values: full,incremental,delete,permissions');
		}
		$this->job_type = $job_type;
		if (!in_array($status, ['enqueued','running','suspended','failed','complete'])) {
			throw new InvalidArgumentException('The $status parameter must be one of these values: enqueued,running,suspended,failed,complete');
		}
		$this->status = $status;
		$this->created_at = $created_at;
		$this->last_updated_at = $last_updated_at;
	}
}
