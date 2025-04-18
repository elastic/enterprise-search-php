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

use Elastic\EnterpriseSearch\AppSearch\Schema\QuerySuggestionRequest;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieve query suggestions
 *
 * @see https://www.elastic.co/guide/en/app-search/current/query-suggestion.html
 * @generated This file is generated, please do not edit
 */
class QuerySuggestion extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param QuerySuggestionRequest $query_suggestion_request
	 */
	public function __construct(string $engineName, ?QuerySuggestionRequest $query_suggestion_request = null)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/query_suggestion";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $query_suggestion_request;
	}
}
