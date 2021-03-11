<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
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

/**
 * @internal
 */
class BoostItem
{
	/** @var */
	public $type;

	/** @var */
	public $value;

	/** @var */
	public $function;

	/** @var string */
	public $operation;

	/** @var float */
	public $factor;

	/** @var */
	public $center;


	public function __construct($type)
	{
		$this->type = $type;
	}
}
