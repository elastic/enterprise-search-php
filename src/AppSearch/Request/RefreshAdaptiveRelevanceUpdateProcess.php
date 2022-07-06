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
 * Retrieve adaptive relevance settings
 *
 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-post-engine-adaptive-relevance-suggestions-update-process-refresh
 * @generated This file is generated, please do not edit
 */
class RefreshAdaptiveRelevanceUpdateProcess extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $adaptiveRelevanceSuggestionType Adaptive relevance suggestion type
	 */
	public function __construct(string $engineName, string $adaptiveRelevanceSuggestionType)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$adaptive_relevance_suggestion_type = urlencode($adaptiveRelevanceSuggestionType);
		$this->path = "/api/as/v0/engines/$engine_name/adaptive_relevance/update_process/$adaptive_relevance_suggestion_type/refresh";
	}
}
