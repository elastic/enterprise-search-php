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

use InvalidArgumentException;

/**
 * @generated This file is generated, please do not edit
 */
#[\AllowDynamicProperties]
class RecordDeletedResponse
{
	public bool $deleted;


	public function __construct(bool $deleted)
	{
		if (!in_array($deleted, ['1'])) {
			throw new InvalidArgumentException('The $deleted parameter must be one of these values: 1');
		}
		$this->deleted = $deleted;
	}
}
