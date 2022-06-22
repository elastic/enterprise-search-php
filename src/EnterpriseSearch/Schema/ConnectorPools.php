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
class ConnectorPools
{
	public ConnectorPool $extract_worker_pool;
	public ConnectorPool $subextract_worker_pool;
	public ConnectorPool $publish_worker_pool;


	public function __construct(
		ConnectorPool $extract_worker_pool,
		ConnectorPool $publish_worker_pool,
		ConnectorPool $subextract_worker_pool
	) {
		$this->extract_worker_pool = $extract_worker_pool;
		$this->publish_worker_pool = $publish_worker_pool;
		$this->subextract_worker_pool = $subextract_worker_pool;
	}
}
