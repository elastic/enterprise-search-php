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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Creates a new set of permissions or over-writes all existing permissions
 */
class PutUserPermissions extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param string $user The username in context
	 * @param string[] $permissions
	 */
	public function __construct(string $contentSourceId, string $user, array $permissions)
	{
		$this->method = 'PUT';
		$content_source_id = urlencode($contentSourceId);
		$user = urlencode($user);
		$this->path = "/api/ws/v1/sources/$content_source_id/permissions/$user";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $permissions;
	}
}
