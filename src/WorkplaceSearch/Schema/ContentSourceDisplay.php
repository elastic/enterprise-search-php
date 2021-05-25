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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @internal
 */
class ContentSourceDisplay
{
	/** @var string */
	public $title_field;

	/** @var string */
	public $url_field;

	/** @var string */
	public $color;

	/** @var string */
	public $description_field;

	/** @var string */
	public $subtitle_field;

	/** @var array */
	public $detail_fields;


	public function __construct(string $title_field, string $url_field)
	{
		$this->title_field = $title_field;
		$this->url_field = $url_field;
	}
}
