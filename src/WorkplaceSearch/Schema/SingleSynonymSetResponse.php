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
 * A representation of a synonym set
 *
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class SingleSynonymSetResponse
{
	/** The id of the synonym set */
	public string $id;

	/** The synonym terms for the set */
	public array $synonyms;

	/** The timestamp in ISO format when the set was created */
	public string $created_at;

	/** The timestamp in ISO format when the set was last updated */
	public string $updated_at;
}
