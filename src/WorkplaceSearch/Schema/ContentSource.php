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

use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ContentSourceDisplay;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ContentSourceSchema;
use InvalidArgumentException;

/**
 * Workplace Search Content Source
 */
class ContentSource
{
	/** The Content Source Identifier. */
	public string $id;

	/** The Content Source's Service Type. For example, for Google Drive the Service Type is "google_drive". */
	public string $service_type;

	/** The date/time at which this Content Source was originally created. */
	public string $created_at;

	/** The date/time at which this Content Source was last updated. */
	public string $last_updated_at;

	/** Whether or not this Content Source is a "remote" content source. See https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources.html#remote */
	public bool $is_remote;

	/** A list of key/value metadata for the Content Source and the account which authenticated/connected it. */
	public array $details;

	/** A list of Workplace Search Group names and IDs which have access to this Content Source. */
	public array $groups;

	/** The human readable display name of this Content Source. */
	public string $name;

	/** The schema that each document in this Content Source must adhere to. */
	public ContentSourceSchema $schema;

	/** The display details which governs which fields are displayed, and in what order, in the search results. */
	public ContentSourceDisplay $display;

	/** Can be either "organization" or "private." This specifies whether this Content Source is available to groups of users, or a single user. */
	public string $context;

	/** Whether or not this Content Source can currently be searched over on the search page. */
	public bool $is_searchable;
	public object $indexing;
	public object $facets;
	public object $automatic_query_refinement;

	/** How many documents are currently indexed in this Content Source. Note, this field is not applicable to Remote Content Sources. */
	public int $document_count;

	/** The date/time when documents were last indexed into this Content Source. This may be "null" if documents have not yet been indexed. Note, this field is not applicable to Remote Content Sources. */
	public string $last_indexed_at;


	/**
	 * @param ContentSourceDetail[] $detailsWorkplace Search Content Source
	 * @param SearchGroup[] $groupsWorkplace Search Content Source
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
		if (!in_array($context, ['organization','private'])) {
			throw new InvalidArgumentException('The $context parameter must be one of these values: organization,private');
		}
		$this->context = $context;
		$this->is_searchable = $is_searchable;
	}
}
