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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieves a document by ID from the specified content source
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#get-document-by-id-api
 */
class GetDocument extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param string $externalId Unique ID for a content source document. Provided upon or returned at creation.
	 */
	public function __construct(string $contentSourceId, string $externalId)
	{
		$this->method = 'GET';
		$content_source_id = urlencode($contentSourceId);
		$document_id = urlencode($externalId);
		$this->path = "/api/ws/v1/sources/$content_source_id/documents/$document_id";
	}
}
