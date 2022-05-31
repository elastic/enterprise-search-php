<?php

/**
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

use InvalidArgumentException;

/**
 * Faceting into buckets by a range of values
 *
 * @generated This file is generated, please do not edit
 */
class FacetRange
{
	public string $type;
	public string $name;
	public array $ranges;
	public mixed $center;
	public string $unit;


	/**
	 * @param FacetRangeItem[] $rangesFaceting into buckets by a range of values
	 */
	public function __construct(string $type, array $ranges)
	{
		if (!in_array($type, ['range'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: range');
		}
		$this->type = $type;
		$this->ranges = $ranges;
	}
}
