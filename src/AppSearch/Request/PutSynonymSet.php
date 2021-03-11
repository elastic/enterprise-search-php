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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\SynonymSet;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update a synonym set by ID
 * @internal
 */
class PutSynonymSet extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $synonymSetId Synonym set ID
	 * @param SynonymSet $synonymSet Synonym set description
	 */
	public function __construct(string $engineName, string $synonymSetId, SynonymSet $synonymSet)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$synonym_set_id = urlencode($synonymSetId);
		$this->path = "/api/as/v1/engines/$engine_name/synonyms/$synonym_set_id";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $synonymSet;
	}
}
