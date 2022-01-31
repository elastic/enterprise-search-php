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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

class SingleDocumentResponse
{
	public string $id;
	public string $source;
	public string $content_source_id;
	public string $last_updated;
	public array $_allow_permissions;
	public array $_deny_permissions;


	public function __construct(string $id, string $source, string $content_source_id, string $last_updated)
	{
		$this->id = $id;
		$this->source = $source;
		$this->content_source_id = $content_source_id;
		$this->last_updated = $last_updated;
	}
}
