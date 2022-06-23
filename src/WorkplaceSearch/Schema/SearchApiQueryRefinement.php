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
 * Metadata regarding automatic refinements made to the query
 *
 * @generated This file is generated, please do not edit
 */
class SearchApiQueryRefinement
{
	public string $submitted_query;
	public string $decorated_query_html;
	public array $refinements;


	/**
	 * @param QueryRefinementItem[] $refinementsMetadata regarding automatic refinements made to the query
	 */
	public function __construct(string $submitted_query, string $decorated_query_html, array $refinements)
	{
		$this->submitted_query = $submitted_query;
		$this->decorated_query_html = $decorated_query_html;
		$this->refinements = $refinements;
	}
}
