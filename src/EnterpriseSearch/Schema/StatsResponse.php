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

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class StatsResponse
{
	public string $cluster_uuid;
	public HttpStats $http;
	public AppStats $app;
	public QueueStats $queues;
	public ConnectorStats $connectors;
	public CrawlerStats $crawler;
	public ProductUsageInfo $product_usage;


	public function __construct(
		string $cluster_uuid,
		HttpStats $http,
		AppStats $app,
		QueueStats $queues,
		ConnectorStats $connectors,
	) {
		$this->cluster_uuid = $cluster_uuid;
		$this->http = $http;
		$this->app = $app;
		$this->queues = $queues;
		$this->connectors = $connectors;
	}
}
