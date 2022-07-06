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

use Elastic\EnterpriseSearch\AppSearch\Schema\Engine;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Create an Engine
 *
 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-create
 * @generated This file is generated, please do not edit
 */
class CreateEngine extends Request
{
	/**
	 * @param Engine $engine
	 */
	public function __construct(Engine $engine = null)
	{
		$this->method = 'POST';
		$this->path = "/api/as/v1/engines";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $engine;
	}
}
