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
class HealthResponse
{
	public string $name;
	public string $cluster_uuid;
	public Version $version;
	public JvmInfo $jvm;
	public SidecarInfo $filebeat;
	public SidecarInfo $metricbeat;
	public SystemInfo $system;
	public EsqueuesMeInfo $esqueues_me;
	public CrawlerInfo $crawler;


	public function __construct(
		SidecarInfo $filebeat,
		JvmInfo $jvm,
		string $name,
		SystemInfo $system,
		Version $version,
		string $cluster_uuid,
	) {
		$this->filebeat = $filebeat;
		$this->jvm = $jvm;
		$this->name = $name;
		$this->system = $system;
		$this->version = $version;
		$this->cluster_uuid = $cluster_uuid;
	}
}
