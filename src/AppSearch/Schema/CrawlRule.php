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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use InvalidArgumentException;

/**
 * @generated This file is generated, please do not edit
 */
class CrawlRule
{
	public string $id;
	public int $order;
	public string $policy;
	public string $rule;
	public string $pattern;
	public string $created_at;


	public function __construct(int $order, string $policy, string $rule, string $pattern)
	{
		$this->order = $order;
		if (!in_array($policy, ['allow','deny'])) {
			throw new InvalidArgumentException('The $policy parameter must be one of these values: allow,deny');
		}
		$this->policy = $policy;
		if (!in_array($rule, ['begins','ends','contains','regex'])) {
			throw new InvalidArgumentException('The $rule parameter must be one of these values: begins,ends,contains,regex');
		}
		$this->rule = $rule;
		$this->pattern = $pattern;
	}
}
