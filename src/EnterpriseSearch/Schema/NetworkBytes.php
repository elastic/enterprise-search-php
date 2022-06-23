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
class NetworkBytes
{
	public int $received_total;
	public int $received_rate;
	public int $sent_total;
	public int $sent_rate;


	public function __construct(int $received_total, int $received_rate, int $sent_total, int $sent_rate)
	{
		$this->received_total = $received_total;
		$this->received_rate = $received_rate;
		$this->sent_total = $sent_total;
		$this->sent_rate = $sent_rate;
	}
}
