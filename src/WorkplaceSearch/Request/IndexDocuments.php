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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Indexes one or more new documents into a custom content source, or updates one or more existing documents
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#index-and-update
 * @generated This file is generated, please do not edit
 */
class IndexDocuments extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param Document[] $documents
	 */
	public function __construct(string $contentSourceId, array $documents)
	{
		$this->method = 'POST';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/documents/bulk_create";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $documents;
	}
}
