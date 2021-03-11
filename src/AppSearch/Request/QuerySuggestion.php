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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Provide relevant query suggestions for incomplete queries
 * @internal
 */
class QuerySuggestion extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $query A partial query for which to receive suggestions
	 */
	public function __construct(string $engineName, string $query)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->queryParams['query'] = $query;
		$this->path = "/api/as/v1/engines/$engine_name/query_suggestion";
	}


	/**
	 * @param string[] $fields List of fields to use to generate suggestions. Defaults to all text fields
	 */
	public function setFields(array $fields): self
	{
		$this->queryParams['types[documents][fields][]'] = $fields;
		return $this;
	}


	/**
	 * @param int $size Number of query suggestions to return. Must be between 1 and 20. Defaults to 5
	 */
	public function setSize(int $size): self
	{
		$this->queryParams['size'] = $size;
		return $this;
	}
}
