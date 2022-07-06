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
class ExtractUrlExtractionResults
{
	public string $content_hash;
	public array $content_hash_fields;
	public SimpleObject $content_fields;
	public array $meta_tag_warnings;


	/**
	 * @param string [] $content_hash_fields
	 * @param ExtractUrlValidationWarning[] $meta_tag_warnings
	 */
	public function __construct(
		string $content_hash,
		array $content_hash_fields,
		SimpleObject $content_fields,
		array $meta_tag_warnings
	) {
		$this->content_hash = $content_hash;
		$this->content_hash_fields = $content_hash_fields;
		$this->content_fields = $content_fields;
		$this->meta_tag_warnings = $meta_tag_warnings;
	}
}
