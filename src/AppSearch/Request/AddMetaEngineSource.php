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

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Add a source engine
 *
 * @see https://www.elastic.co/guide/en/app-search/current/meta-engines.html#meta-engines-add-source-engines
 * @generated This file is generated, please do not edit
 */
class AddMetaEngineSource extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string[] $sourceEngines
	 */
	public function __construct(string $engineName, ?array $sourceEngines = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/source_engines";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $sourceEngines;
	}
}
