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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\SynonymsCreateDefinition;

/**
 * Create a batch of synonym sets
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#create-synonyms
 * @generated This file is generated, please do not edit
 */
class CreateBatchSynonymSets extends Request
{
	/**
	 * @param SynonymsCreateDefinition $synonyms_create_definition
	 */
	public function __construct(SynonymsCreateDefinition $synonyms_create_definition)
	{
		$this->method = 'POST';
		$this->path = "/api/ws/v1/synonyms";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $synonyms_create_definition;
	}
}
