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
class Engine
{
	public string $name;

	/** Engine language (null for universal) */
	public string $language;
	public string $type;
	public array $source_engines;
	public int $document_count;
	public IndexCreateSettingsOverride $index_create_settings_override;


	public function __construct(string $name)
	{
		$this->name = $name;
	}
}
