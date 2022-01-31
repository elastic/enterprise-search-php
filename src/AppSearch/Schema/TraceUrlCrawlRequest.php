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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

use Elastic\EnterpriseSearch\AppSearch\Schema\CrawlRequest;
use Elastic\EnterpriseSearch\AppSearch\Schema\TraceUrlEvent;

class TraceUrlCrawlRequest
{
	public CrawlRequest $crawl_request;
	public bool $found;
	public array $discover;

	/** @var TraceUrlEvent|object */
	public $seed;

	/** @var TraceUrlEvent|object */
	public $fetch;

	/** @var TraceUrlEvent|object */
	public $output;


	/**
	 * @param TraceUrlEvent|object[] $discover
	 * @param TraceUrlEvent|object $seed
	 * @param TraceUrlEvent|object $fetch
	 * @param TraceUrlEvent|object $output
	 */
	public function __construct(CrawlRequest $crawl_request, bool $found, array $discover, $seed, $fetch, $output)
	{
		$this->crawl_request = $crawl_request;
		$this->found = $found;
		$this->discover = $discover;
		$this->seed = $seed;
		$this->fetch = $fetch;
		$this->output = $output;
	}
}
