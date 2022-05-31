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
 * Deletes an external identity
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#remove-external-identity
 * @generated This file is generated, please do not edit
 */
class DeleteExternalIdentity extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param string $user The username in context
	 */
	public function __construct(string $contentSourceId, string $user)
	{
		$this->method = 'DELETE';
		$content_source_id = urlencode($contentSourceId);
		$user = urlencode($user);
		$this->path = "/api/ws/v1/sources/$content_source_id/external_identities/$user";
	}
}
