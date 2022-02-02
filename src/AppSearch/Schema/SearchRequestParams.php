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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use Elastic\EnterpriseSearch\AppSearch\Schema\PaginationResponseObject;
use Elastic\EnterpriseSearch\AppSearch\Schema\SearchBoosts;
use Elastic\EnterpriseSearch\AppSearch\Schema\SearchFields;
use Elastic\EnterpriseSearch\AppSearch\Schema\SimpleObject;

class SearchRequestParams
{
	public string $query;
	public SimpleObject $analytics;
	public SearchBoosts $boost;
	public SimpleObject $facets;
	public SimpleObject $filters;
	public SimpleObject $group;
	public PaginationResponseObject $page;
	public SimpleObject $result_fields;
	public SearchFields $search_fields;
	public SimpleObject $sort;


	public function __construct(string $query)
	{
		$this->query = $query;
	}
}
