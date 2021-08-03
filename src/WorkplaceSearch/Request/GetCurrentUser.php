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
 * Get the authenticated user
 * @internal
 */
class GetCurrentUser extends Request
{
	public function __construct()
	{
		$this->method = 'GET';
		$this->path = "/api/ws/v1/whoami";
	}


	/**
	 * @param bool $getToken Whether or not to include an access token in the response.
	 */
	public function setGetToken(bool $getToken): self
	{
		$this->queryParams['get_token'] = $getToken;
		return $this;
	}
}
