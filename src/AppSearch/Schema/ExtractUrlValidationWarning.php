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
class ExtractUrlValidationWarning
{
	public string $name;
	public string $value;
	public string $error;
	public string $message;


	public function __construct(string $name, string $value, string $error, string $message)
	{
		$this->name = $name;
		$this->value = $value;
		$this->error = $error;
		$this->message = $message;
	}
}
