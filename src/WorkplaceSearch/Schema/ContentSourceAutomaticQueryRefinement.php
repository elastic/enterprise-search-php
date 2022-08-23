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
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class ContentSourceAutomaticQueryRefinement
{
	public string $field;
	public bool $enabled;
	public array $query_expansion_phrases;
	public bool $is_person;


	/**
	 * @param string[] $query_expansion_phrases
	 */
	public function __construct(string $field, bool $enabled, array $query_expansion_phrases)
	{
		$this->field = $field;
		$this->enabled = $enabled;
		$this->query_expansion_phrases = $query_expansion_phrases;
	}
}
