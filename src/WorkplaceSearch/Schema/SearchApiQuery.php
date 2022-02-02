<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\Filter;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\FilterClauses;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\Sort;

class SearchApiQuery
{
	/** A string or number used to find related documents */
	public string $query;

	/** Set to false to not automatically refine the query by keywords */
	public bool $automatic_query_refinement;

	/** Paging controls for the result set */
	public object $page;

	/** Restrict the fulltext search to only specific fields */
	public object $search_fields;

	/** Restrict the result fields for each item to the specified fields */
	public object $result_fields;

	/** @var FilterClauses|Filter */
	public $filters;

	/** @var Sort|array */
	public $sort;
	public object $facets;
	public object $boosts;

	/** Optional parameter to search standard, remote only, or all available sources */
	public string $source_type;

	/** Optional timeout in ms for searching remote sources */
	public int $timeout;

	/** Optional list of content source ids to only return results from */
	public array $content_sources;
}
