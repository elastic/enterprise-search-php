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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

class Version
{
	/** @var string */
	public $number;

	/** @var string */
	public $build_hash;

	/** @var string */
	public $build_date;


	public function __construct(string $number, string $build_hash, ?string $build_date)
	{
		$this->number = $number;
		$this->build_hash = $build_hash;
		$this->build_date = $build_date;
	}
}
