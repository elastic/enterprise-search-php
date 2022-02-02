<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

class ContentSourceDisplay
{
	public string $title_field;
	public string $url_field;
	public string $color;
	public string $description_field;
	public string $subtitle_field;
	public string $type_field;
	public string $media_type_field;
	public string $created_by_field;
	public string $updated_by_field;
	public array $detail_fields;


	public function __construct(string $title_field, string $url_field)
	{
		$this->title_field = $title_field;
		$this->url_field = $url_field;
	}
}
