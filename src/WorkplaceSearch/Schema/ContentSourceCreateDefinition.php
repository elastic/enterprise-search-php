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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * Definition to create a Workplace Search Content Source
 *
 * @generated This file is generated, please do not edit
 */
class ContentSourceCreateDefinition
{
	/** The human readable display name for this Content Source. */
	public string $name;

	/** The schema that each document in this Content Source will adhere to. */
	public ContentSourceSchema $schema;

	/** The display details which governs which fields will be displayed, and in what order, in the search results. */
	public ContentSourceDisplay $display;

	/** Whether or not this Content Source will be searchable on the search page. */
	public bool $is_searchable;
	public object $indexing;
	public object $facets;
	public object $automatic_query_refinement;


	public function __construct(string $name)
	{
		$this->name = $name;
	}
}
