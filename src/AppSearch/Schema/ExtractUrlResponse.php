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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class ExtractUrlResponse
{
	public string $url;
	public string $normalized_url;
	public ExtractUrlResults $results;


	public function __construct(string $url, string $normalized_url, ExtractUrlResults $results)
	{
		$this->url = $url;
		$this->normalized_url = $normalized_url;
		$this->results = $results;
	}
}
