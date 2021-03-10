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
 * Update an existing curation
 */
class PutCuration extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $curationId Curation ID
	 * @param string[] $queries List of affected search queries
	 */
	public function __construct(string $engineName, string $curationId, array $queries)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$curation_id = urlencode($curationId);
		$this->queryParams['queries[]'] = $queries;
		$this->path = "/api/as/v1/engines/$engine_name/curations/$curation_id";
	}


	/**
	 * @param string[] $promotedDocIds List of promoted document IDs
	 */
	public function setPromotedDocIds(array $promotedDocIds): self
	{
		$this->queryParams['promoted[]'] = $promotedDocIds;
		return $this;
	}


	/**
	 * @param string[] $hiddenDocIds List of hidden document IDs
	 */
	public function setHiddenDocIds(array $hiddenDocIds): self
	{
		$this->queryParams['hidden[]'] = $hiddenDocIds;
		return $this;
	}
}
