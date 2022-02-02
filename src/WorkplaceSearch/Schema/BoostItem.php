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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

use InvalidArgumentException;

/**
 * Field and type of boost with tuning parameters
 */
class BoostItem
{
	public string $type;

	/** @var string|number|array */
	public $value;
	public string $function;
	public string $operation;
	public float $factor;
	public mixed $center;


	public function __construct(string $type)
	{
		if (!in_array($type, ['value','functional','proximity'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: value,functional,proximity');
		}
		$this->type = $type;
	}
}
