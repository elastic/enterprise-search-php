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
class StorageCleanupResponse
{
	public array $indices;
	public int $index_count;


	/**
	 * @param string[] $indices
	 */
	public function __construct(array $indices, int $index_count)
	{
		$this->indices = $indices;
		$this->index_count = $index_count;
	}
}
