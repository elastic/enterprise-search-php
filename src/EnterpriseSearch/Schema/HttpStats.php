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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class HttpStats
{
	public Connections $connections;
	public RequestDurationMs $request_duration_ms;
	public NetworkBytes $network_bytes;
	public Responses $responses;


	public function __construct(
		Connections $connections,
		RequestDurationMs $request_duration_ms,
		NetworkBytes $network_bytes,
		Responses $responses,
	) {
		$this->connections = $connections;
		$this->request_duration_ms = $request_duration_ms;
		$this->network_bytes = $network_bytes;
		$this->responses = $responses;
	}
}
