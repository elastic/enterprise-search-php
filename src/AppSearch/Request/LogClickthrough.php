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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\ClickParams;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Tracks results that were clicked after a query
 *
 * @see https://www.elastic.co/guide/en/app-search/current/clickthrough.html
 * @generated This file is generated, please do not edit
 */
class LogClickthrough extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param ClickParams $click_params
	 */
	public function __construct(string $engineName, ClickParams $click_params = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/click";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $click_params;
	}
}
