<?php

/**
 * Copyright (C) 2016-2023  Daniel Dolejška
 * Copyright (C) 2023  Yaroslav Molchan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\TFTAPI\Objects;

use RiotAPI\Base\Objects\ApiObject;

/**
 *   Class StatusDto
 *
 * Used in:
 *   tft-status (v1)
 *     - @see TFTAPI::getPlatformData
 *       @link https://developer.riotgames.com/apis#tft-status-v1/GET_getPlatformData
 *
 * @package RiotAPI\TFTAPI\Objects
 */
class StatusDto extends ApiObject
{
	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var int $id
	 */
	public int $id;

	/**
	 * (Legal values: scheduled, in_progress, complete).
	 *
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string|null $maintenance_status
	 */
	public string|null $maintenance_status = null;

	/**
	 * (Legal values: info, warning, critical).
	 *
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string $incident_severity
	 */
	public string $incident_severity;

	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var ContentDto[] $titles
	 */
	public array $titles;

	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var UpdateDto[] $updates
	 */
	public array $updates;

	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string $created_at
	 */
	public string $created_at;

	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string|null $archive_at
	 */
	public string|null $archive_at = null;

	/**
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string|null $updated_at
	 */
	public string|null $updated_at = null;

	/**
	 * (Legal values: windows, macos, android, ios, ps4, xbone, switch).
	 *
	 * Available when received from:
	 *   - @see TFTAPI::getPlatformData
	 *
	 * @var string[] $platforms
	 */
	public array $platforms;
}
