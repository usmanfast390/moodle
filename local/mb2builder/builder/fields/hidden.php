<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package    local_mb2builder
 * @copyright  2018 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();


class LocalMb2builderHidden
{

	static function local_mb2builder_get_input( $key, $attr )
	{

		if (!isset($attr['default']))
		{
	 		$attr['default'] = '';
		}

		$actions = local_mb2builder_field_actions(  $attr );
		return '<input type="hidden" class="form-control mb2-pb-input mb2-pb-input-' . $key . '"' . $actions . ' data-attrname="' . $key . '" value="' .	$attr['default'] . '" />';

	}

}
