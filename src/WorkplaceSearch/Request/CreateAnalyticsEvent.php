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
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\AnalyticsEvent;

/**
 * Capture click and feedback analytic events
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-analytics-api.html
 * @generated This file is generated, please do not edit
 */
class CreateAnalyticsEvent extends Request
{
	/**
	 * @param AnalyticsEvent $analytics_event
	 */
	public function __construct(AnalyticsEvent $analytics_event)
	{
		$this->method = 'POST';
		$this->path = "/api/ws/v1/analytics/event";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $analytics_event;
	}
}
