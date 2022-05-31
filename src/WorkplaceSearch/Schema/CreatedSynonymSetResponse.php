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
 * A created synonym set with possible error information
 *
 * @generated This file is generated, please do not edit
 */
class CreatedSynonymSetResponse
{
	/** The id of the created set, or null if invalid */
	public string $id;

	/** The synonym terms for the set */
	public array $synonyms;

	/** An optional array of error messages, if any */
	public array $errors;
}
