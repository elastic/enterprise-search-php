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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class ExtractUrlDeduplicationResults
{
	public int $urls_count;
	public array $urls_sample;


	/**
	 * @param string[] $urls_sample
	 */
	public function __construct(int $urls_count, array $urls_sample)
	{
		$this->urls_count = $urls_count;
		$this->urls_sample = $urls_sample;
	}
}
