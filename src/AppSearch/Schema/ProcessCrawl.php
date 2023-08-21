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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class ProcessCrawl
{
	public string $id;
	public bool $dry_run;
	public int $total_url_count;
	public int $denied_url_count;
	public array $domains;
	public bool $process_all_domains;
	public string $created_at;
	public ?string $begun_at;
	public ?string $completed_at;
}
