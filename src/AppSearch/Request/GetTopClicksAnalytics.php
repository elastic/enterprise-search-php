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

use Elastic\EnterpriseSearch\AppSearch\Schema\AnalyticsClicksParams;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Query for analytics click data
 *
 * @see https://www.elastic.co/guide/en/app-search/current/clicks.html
 * @generated This file is generated, please do not edit
 */
class GetTopClicksAnalytics extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param AnalyticsClicksParams $analytics_clicks_params
	 */
	public function __construct(string $engineName, AnalyticsClicksParams $analytics_clicks_params)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/analytics/clicks";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $analytics_clicks_params;
	}
}
