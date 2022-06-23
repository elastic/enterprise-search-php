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
class ExternalIdentity
{
	public string $content_source_id;
	public string $external_user_id;
	public array $external_user_properties;
	public array $permissions;


	public function __construct(string $content_source_id, string $external_user_id)
	{
		$this->content_source_id = $content_source_id;
		$this->external_user_id = $external_user_id;
	}
}
