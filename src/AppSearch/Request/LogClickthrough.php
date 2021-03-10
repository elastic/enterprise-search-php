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
 * Send data about clicked results
 */
class LogClickthrough extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $queryText Search query text
	 * @param string $documentId The ID of the document that was clicked on
	 */
	public function __construct(string $engineName, string $queryText, string $documentId)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->queryParams['query'] = $queryText;
		$this->queryParams['document_id'] = $documentId;
		$this->path = "/api/as/v1/engines/$engine_name/click";
	}


	/**
	 * @param string $requestId The request ID returned in the meta tag of a search API response
	 */
	public function setRequestId(string $requestId): self
	{
		$this->queryParams['request_id'] = $requestId;
		return $this;
	}


	/**
	 * @param string[] $tags Array of strings representing additional information you wish to track with the clickthrough
	 */
	public function setTags(array $tags): self
	{
		$this->queryParams['tags[]'] = $tags;
		return $this;
	}
}
