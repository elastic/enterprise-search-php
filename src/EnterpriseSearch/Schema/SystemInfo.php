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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class SystemInfo
{
	public string $java_version;
	public string $jruby_version;
	public string $os_name;
	public string $os_version;


	public function __construct(string $java_version, string $jruby_version, string $os_name, string $os_version)
	{
		$this->java_version = $java_version;
		$this->jruby_version = $jruby_version;
		$this->os_name = $os_name;
		$this->os_version = $os_version;
	}
}
