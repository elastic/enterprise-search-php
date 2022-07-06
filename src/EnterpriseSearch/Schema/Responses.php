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
class Responses
{
	public int $_1xx;
	public int $_2xx;
	public int $_3xx;
	public int $_4xx;
	public int $_5xx;


	public function __construct(int $_1xx, int $_2xx, int $_3xx, int $_4xx, int $_5xx)
	{
		$this->_1xx = $_1xx;
		$this->_2xx = $_2xx;
		$this->_3xx = $_3xx;
		$this->_4xx = $_4xx;
		$this->_5xx = $_5xx;
	}
}
