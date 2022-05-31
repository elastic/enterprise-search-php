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

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class SearchResponse
{
	/** @var MetaPage|object */
	public $meta;
	public array $results;


	/**
	 * @param MetaPage|object $meta
	 * @param SimpleObject[] $results
	 */
	public function __construct($meta, array $results)
	{
		$this->meta = $meta;
		$this->results = $results;
	}
}
