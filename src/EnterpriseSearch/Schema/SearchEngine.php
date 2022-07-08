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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class SearchEngine
{
	public string $name;
	public int $document_count;
	public array $search_indices;


	/**
	 * @param string[] $search_indices
	 */
	public function __construct(string $name, int $document_count, array $search_indices)
	{
		$this->name = $name;
		$this->document_count = $document_count;
		$this->search_indices = $search_indices;
	}
}
