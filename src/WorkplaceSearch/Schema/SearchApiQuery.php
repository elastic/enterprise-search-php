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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @internal
 */
class SearchApiQuery
{
	/** @var string */
	public $query;

	/** @var bool */
	public $automatic_query_refinement;

	/** @var object */
	public $page;

	/** @var object */
	public $search_fields;

	/** @var object */
	public $result_fields;

	/** @var */
	public $filters;

	/** @var */
	public $sort;

	/** @var object */
	public $facets;

	/** @var object */
	public $boosts;

	/** @var */
	public $source_type;

	/** @var int */
	public $timeout;

	/** @var array */
	public $content_sources;
}
