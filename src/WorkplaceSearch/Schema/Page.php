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

/**
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class Page
{
	public int $current;
	public int $total_pages;
	public int $total_results;
	public int $size;


	public function __construct(int $current, int $total_pages, int $total_results, int $size)
	{
		$this->current = $current;
		$this->total_pages = $total_pages;
		$this->total_results = $total_results;
		$this->size = $size;
	}
}
