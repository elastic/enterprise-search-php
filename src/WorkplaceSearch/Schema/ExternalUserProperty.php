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
class ExternalUserProperty
{
	public string $attribute_name;
	public string $attribute_value;


	public function __construct(string $attribute_name, string $attribute_value)
	{
		if (!in_array($attribute_name, ['_elasticsearch_username'])) {
			throw new InvalidArgumentException('The $attribute_name parameter must be one of these values: _elasticsearch_username');
		}
		$this->attribute_name = $attribute_name;
		$this->attribute_value = $attribute_value;
	}
}
