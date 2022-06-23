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

/**
 * A field to define remote data capture
 *
 * @generated This file is generated, please do not edit
 */
class ContentSourceIndexingRulesField
{
	public string $remote;
	public string $target;


	public function __construct(string $remote, string $target)
	{
		$this->remote = $remote;
		$this->target = $target;
	}
}
