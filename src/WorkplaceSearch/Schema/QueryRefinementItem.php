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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * Specifics regarding how this part of the query was refined
 *
 * @generated This file is generated, please do not edit
 */
class QueryRefinementItem
{
	/** The term(s) used for the trigger */
	public string $term;

	/** The start and end position the term(s) exist in the original query */
	public array $position;

	/** The type of trigger created */
	public string $trigger_type;

	/** The type of filter created from this trigger */
	public string $trigger_filter_type;
	public Filter $filter;
}
