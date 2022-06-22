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
 * Delete a synonym set
 *
 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-delete
 * @generated This file is generated, please do not edit
 */
class DeleteSynonymSet extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $synonymSetId Synonym Set ID
	 */
	public function __construct(string $engineName, string $synonymSetId)
	{
		$this->method = 'DELETE';
		$engine_name = urlencode($engineName);
		$synonym_set_id = urlencode($synonymSetId);
		$this->path = "/api/as/v1/engines/$engine_name/synonyms/$synonym_set_id";
	}
}
