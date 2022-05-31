<?php

/**
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

use Elastic\EnterpriseSearch\AppSearch\Schema\AdaptiveRelevanceSuggestionParams;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieve adaptive relevance
 *
 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-get-engine-adaptive-relevance-suggestions-query
 * @generated This file is generated, please do not edit
 */
class GetAdaptiveRelevanceSuggestions extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $searchSuggestionQuery Query to obtain suggestions
	 * @param AdaptiveRelevanceSuggestionParams $adaptive_relevance_suggestion_params
	 */
	public function __construct(
		string $engineName,
		string $searchSuggestionQuery,
		AdaptiveRelevanceSuggestionParams $adaptive_relevance_suggestion_params
	) {
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$search_suggestion_query = urlencode($searchSuggestionQuery);
		$this->path = "/api/as/v0/engines/$engine_name/adaptive_relevance/suggestions/$search_suggestion_query";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $adaptive_relevance_suggestion_params;
	}
}
