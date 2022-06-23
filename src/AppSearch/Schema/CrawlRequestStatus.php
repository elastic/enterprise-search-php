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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use InvalidArgumentException;

/**
 * @generated This file is generated, please do not edit
 */
class CrawlRequestStatus
{
	public string $id;
	public string $status;
	public string $created_at;
	public string $updated_at;
	public string $begun_at;
	public EngineIdAndName $engine;


	public function __construct(
		string $id,
		string $status,
		string $created_at,
		?string $updated_at,
		?string $begun_at,
		EngineIdAndName $engine
	) {
		$this->id = $id;
		if (!in_array($status, ['success','failed','canceled','skipped','pending','suspended','starting','running','canceling','suspending'])) {
			throw new InvalidArgumentException('The $status parameter must be one of these values: success,failed,canceled,skipped,pending,suspended,starting,running,canceling,suspending');
		}
		$this->status = $status;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
		$this->begun_at = $begun_at;
		$this->engine = $engine;
	}
}
