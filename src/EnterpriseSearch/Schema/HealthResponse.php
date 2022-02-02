<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\CrawlerInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\EsqueuesMeInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\JvmInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\SidecarInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\SystemInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\Version;

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
		string $cluster_uuid
	) {
		$this->filebeat = $filebeat;
		$this->jvm = $jvm;
		$this->name = $name;
		$this->system = $system;
		$this->version = $version;
		$this->cluster_uuid = $cluster_uuid;
	}
}
