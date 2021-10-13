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
class ContentSource
{
	/** @var string */
	public $id;

	/** @var string */
	public $service_type;

	/** @var string */
	public $created_at;

	/** @var string */
	public $last_updated_at;

	/** @var bool */
	public $is_remote;

	/** @var array */
	public $details;

	/** @var array */
	public $groups;

	/** @var string */
	public $name;

	/** @var ContentSourceSchema */
	public $schema;

	/** @var ContentSourceDisplay */
	public $display;

	/** @var string */
	public $context;

	/** @var bool */
	public $is_searchable;

	/** @var object */
	public $indexing;

	/** @var object */
	public $facets;

	/** @var object */
	public $automatic_query_refinement;

	/** @var int */
	public $document_count;

	/** @var string */
	public $last_indexed_at;


	/**
	 * @param object[] $details
	 * @param object[] $groups
	 */
	public function __construct(
		string $id,
		string $service_type,
		string $created_at,
		string $last_updated_at,
		bool $is_remote,
		array $details,
		array $groups,
		string $name,
		string $context,
		bool $is_searchable
	) {
		$this->id = $id;
		$this->service_type = $service_type;
		$this->created_at = $created_at;
		$this->last_updated_at = $last_updated_at;
		$this->is_remote = $is_remote;
		$this->details = $details;
		$this->groups = $groups;
		$this->name = $name;
		$this->context = $context;
		$this->is_searchable = $is_searchable;
	}
}
