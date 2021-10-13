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

/**
 * @internal
 */
class CrawlRule
{
	/** @var string */
	public $id;

	/** @var int */
	public $order;

	/** @var string */
	public $policy;

	/** @var string */
	public $rule;

	/** @var string */
	public $pattern;


	public function __construct(int $order, string $policy, string $rule, string $pattern)
	{
		$this->order = $order;
		$this->policy = $policy;
		$this->rule = $rule;
		$this->pattern = $pattern;
	}
}
