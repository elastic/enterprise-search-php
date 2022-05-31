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
class JobTypes
{
	public int $full;
	public int $incremental;
	public int $delete;
	public int $permissions;


	public function __construct(int $delete, int $full, int $incremental, int $permissions)
	{
		$this->delete = $delete;
		$this->full = $full;
		$this->incremental = $incremental;
		$this->permissions = $permissions;
	}
}
