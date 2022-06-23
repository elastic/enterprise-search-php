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
 * A range filter with a geographic center
 *
 * @generated This file is generated, please do not edit
 */
class GeoRangeFilter
{
	/** The base unit of measurement [mm, cm, m (meters), km, in, ft, yd, or mi (miles)] */
	public string $unit;

	/** The mode of the distribution as a "lat, lon" string, "POINT(lon lat)" WKT POINT string, Geohash string, or [lon, lat] array */
	public $center;

	/**
	 * Inclusive lower bound of the range. Is required if to is not provided
	 * @var string|number
	 */
	public $from;

	/**
	 * Exclusive upper bound of the range. Is required if from is not provided
	 * @var string|number
	 */
	public $to;


	public function __construct(string $unit, $center)
	{
		$this->unit = $unit;
		$this->center = $center;
	}
}
