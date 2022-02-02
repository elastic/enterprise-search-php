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

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\JvmGcCollectorInfo;

class JavaGcInfo
{
	public int $collection_count;
	public int $collection_time;
	public JvmGcCollectorInfo $garbage_collectors;


	public function __construct(int $collection_count, int $collection_time, JvmGcCollectorInfo $garbage_collectors)
	{
		$this->collection_count = $collection_count;
		$this->collection_time = $collection_time;
		$this->garbage_collectors = $garbage_collectors;
	}
}
