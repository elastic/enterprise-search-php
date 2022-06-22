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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Request;

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\ReadOnlyState;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update the read-only flag's state
 *
 * @see https://www.elastic.co/guide/en/enterprise-search/current/read-only-api.html#setting-read-only-state
 * @generated This file is generated, please do not edit
 */
class PutReadOnly extends Request
{
	/**
	 * @param ReadOnlyState $read_only_state
	 */
	public function __construct(ReadOnlyState $read_only_state)
	{
		$this->method = 'PUT';
		$this->path = "/api/ent/v1/internal/read_only_mode";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $read_only_state;
	}
}
