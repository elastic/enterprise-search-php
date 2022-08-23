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
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class DeleteDocumentsByQueryResponse
{
	public int $total;
	public int $deleted;
	public array $failures;


	/**
	 * @param object[] $failures
	 */
	public function __construct(int $total, int $deleted, array $failures)
	{
		$this->total = $total;
		$this->deleted = $deleted;
		$this->failures = $failures;
	}
}
