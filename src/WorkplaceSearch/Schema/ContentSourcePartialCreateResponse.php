<?php

/**
<<<<<<< HEAD
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
=======
>>>>>>> 7.16
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

use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ContentSource;

/**
 * Returned when a create request successfully created a content source, but failed to fully configure it as requested
 */
class ContentSourcePartialCreateResponse
{
	/** The state of the newly created content source */
	public ContentSource $created;

	/** Errors that occurred while attempting to configure and finalize the content source. Correct these errors, and follow up with an "update" request. */
	public array $errors;


	/**
	 * @param string[] $errorsReturned when a create request successfully created a content source, but failed to fully configure it as requested
	 */
	public function __construct(ContentSource $created, array $errors)
	{
		$this->created = $created;
		$this->errors = $errors;
	}
}
