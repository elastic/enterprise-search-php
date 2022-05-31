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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * A representation of a synonym set
 *
 * @generated This file is generated, please do not edit
 */
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
