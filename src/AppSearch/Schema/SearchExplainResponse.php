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
#[\AllowDynamicProperties]
class SearchExplainResponse
{
	public object $meta;
	public string $query_string;
	public SimpleObject $query_body;


	public function __construct(object $meta, string $query_string, SimpleObject $query_body)
	{
		$this->meta = $meta;
		$this->query_string = $query_string;
		$this->query_body = $query_body;
	}
}