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
 * Facet by a field value
 *
 * @generated This file is generated, please do not edit
 */
class FacetValue
{
	public string $type;
	public string $name;
	public int $size;
	public FacetSort $sort;


	public function __construct(string $type)
	{
		if (!in_array($type, ['value'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: value');
		}
		$this->type = $type;
	}
}
