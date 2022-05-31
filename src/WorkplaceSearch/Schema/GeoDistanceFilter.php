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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class GeoDistanceFilter
{
	/** The base unit of measurement [mm, cm, m (meters), km, in, ft, yd, or mi (miles)] */
	public string $unit;

	/** The mode of the distribution as a "lat, lon" string, "POINT(lon lat)" WKT POINT string, Geohash string, or [lon, lat] array */
	public mixed $center;

	/** A number representing the distance unit */
	public float $distance;


	public function __construct(string $unit, mixed $center, float $distance)
	{
		$this->unit = $unit;
		$this->center = $center;
		$this->distance = $distance;
	}
}
