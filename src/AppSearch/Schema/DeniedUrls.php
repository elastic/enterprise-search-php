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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class DeniedUrls
{
	/** Total count of URLs analyzed by process crawl */
	public int $total_url_count;

	/** Total count of URLs identified for deletion by process crawl */
	public int $denied_url_count;

	/** Count of denied URLs provided in sample */
	public int $sample_size;

	/** Sample of URLs identified for deletion by process crawl */
	public array $denied_urls_sample;
}
