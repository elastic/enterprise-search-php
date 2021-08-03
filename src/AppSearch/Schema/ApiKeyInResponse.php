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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use InvalidArgumentException;

/**
 * @internal
 */
class ApiKeyInResponse
{
	/** @var string */
	public $id;

	/** @var string */
	public $name;

	/** @var string */
	public $key;

	/** @var string */
	public $type;

	/** @var bool */
	public $access_all_engines;

	/** @var array */
	public $engines;

	/** @var bool */
	public $write;

	/** @var bool */
	public $read;


	public function __construct(string $id, string $name, string $key, string $type)
	{
		$this->id = $id;
		$this->name = $name;
		$this->key = $key;
		if (!in_array($type, ['private','search','admin'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: private,search,admin');
		}
		$this->type = $type;
	}
}
