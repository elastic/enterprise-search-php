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
 * Field and type of boost with tuning parameters
 *
 * @generated This file is generated, please do not edit
 */
class BoostItem
{
	public string $type;

	/** @var string|number|array */
	public $value;
	public string $function;
	public string $operation;
	public float $factor;
	public $center;


	public function __construct(string $type)
	{
		if (!in_array($type, ['value','functional','proximity'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: value,functional,proximity');
		}
		$this->type = $type;
	}
}
