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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use InvalidArgumentException;

/**
 * Details of an API key
 */
class ApiKey
{
	public string $id;
	public string $name;
	public string $type;
	public bool $access_all_engines;
	public array $engines;
	public bool $write;
	public bool $read;


	public function __construct(string $name, string $type)
	{
		$this->name = $name;
		if (!in_array($type, ['private','search','admin'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: private,search,admin');
		}
		$this->type = $type;
	}
}
