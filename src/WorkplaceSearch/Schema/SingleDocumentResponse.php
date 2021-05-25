<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @internal
 */
class SingleDocumentResponse
{
	/** @var string */
	public $id;

	/** @var string */
	public $source;

	/** @var string */
	public $content_source_id;

	/** @var string */
	public $last_updated;

	/** @var array */
	public $_allow_permissions;

	/** @var array */
	public $_deny_permissions;


	public function __construct(string $id, string $source, string $content_source_id, string $last_updated)
	{
		$this->id = $id;
		$this->source = $source;
		$this->content_source_id = $content_source_id;
		$this->last_updated = $last_updated;
	}
}
