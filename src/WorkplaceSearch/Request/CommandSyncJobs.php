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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Issue commands to a Content Source's sync jobs
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-sync-jobs-api.html#command-sync-jobs-api
 * @generated This file is generated, please do not edit
 */
class CommandSyncJobs extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param mixed $sync_jobs_command
	 */
	public function __construct(string $contentSourceId, mixed $sync_jobs_command)
	{
		$this->method = 'POST';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/sync/jobs";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $sync_jobs_command;
	}


	/**
	 * @param string[] $jobType The type of sync job to consider
	 */
	public function setJobType(array $jobType): self
	{
		$this->queryParams['job_type'] = implode(',', $jobType);
		return $this;
	}
}
