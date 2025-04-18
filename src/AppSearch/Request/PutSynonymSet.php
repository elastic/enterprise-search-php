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

use Elastic\EnterpriseSearch\AppSearch\Schema\SynonymSet;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update a synonym set
 *
 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-update
 * @generated This file is generated, please do not edit
 */
class PutSynonymSet extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $synonymSetId Synonym Set ID
	 * @param SynonymSet $synonym_set
	 */
	public function __construct(string $engineName, string $synonymSetId, ?SynonymSet $synonym_set = null)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$synonym_set_id = urlencode($synonymSetId);
		$this->path = "/api/as/v1/engines/$engine_name/synonyms/$synonym_set_id";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $synonym_set;
	}
}
