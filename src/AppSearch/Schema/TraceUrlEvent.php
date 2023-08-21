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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class TraceUrlEvent
{
	public string $timestamp;
	public string $event_id;
	public ?string $message;


	public function __construct(string $timestamp, string $event_id, ?string $message)
	{
		$this->timestamp = $timestamp;
		$this->event_id = $event_id;
		$this->message = $message;
	}
}
