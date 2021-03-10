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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Creates a new engine
 */
class CreateEngine extends Request
{
	/**
	 * @param string $engineName Engine name
	 */
	public function __construct(string $engineName)
	{
		$this->method = 'POST';
		$this->queryParams['name'] = $engineName;
		$this->path = "/api/as/v1/engines";
	}


	/**
	 * @param string $language Engine language (null for universal)
	 */
	public function setLanguage(string $language): self
	{
		$this->queryParams['language'] = $language;
		return $this;
	}


	/**
	 * @param string $type Engine type
	 */
	public function setType(string $type): self
	{
		$this->queryParams['type'] = $type;
		return $this;
	}


	/**
	 * @param string[] $sourceEngines Sources engines list
	 */
	public function setSourceEngines(array $sourceEngines): self
	{
		$this->queryParams['source_engines[]'] = $sourceEngines;
		return $this;
	}
}
