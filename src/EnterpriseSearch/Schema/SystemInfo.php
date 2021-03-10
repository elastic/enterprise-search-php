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

class SystemInfo
{
	/** @var string */
	public $java_version;

	/** @var string */
	public $jruby_version;

	/** @var string */
	public $os_name;

	/** @var string */
	public $os_version;


	public function __construct(string $java_version, string $jruby_version, string $os_name, string $os_version)
	{
		$this->java_version = $java_version;
		$this->jruby_version = $jruby_version;
		$this->os_name = $os_name;
		$this->os_version = $os_version;
	}
}
