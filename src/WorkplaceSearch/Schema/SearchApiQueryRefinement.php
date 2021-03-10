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

class SearchApiQueryRefinement
{
	/** @var string */
	public $submitted_query;

	/** @var string */
	public $decorated_query_html;

	/** @var array */
	public $refinements;


	/**
	 * @param object[] $refinements
	 */
	public function __construct(string $submitted_query, string $decorated_query_html, array $refinements)
	{
		$this->submitted_query = $submitted_query;
		$this->decorated_query_html = $decorated_query_html;
		$this->refinements = $refinements;
	}
}
