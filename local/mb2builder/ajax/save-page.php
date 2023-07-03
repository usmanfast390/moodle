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

define('AJAX_SCRIPT', true);

require_once( __DIR__ . '/../../../config.php' );
require_once( $CFG->libdir . '/adminlib.php' );

// Get builder files
require_once( __DIR__ . '/../lib.php' );
require_once( __DIR__ . '/../classes/pages_api.php' );
//require_once( __DIR__ . '/../classes/pages_helper.php' );

$context = context_system::instance();
$PAGE->set_url( '/local/mb2builder/ajax/save-page.php' );
$PAGE->set_context( $context );

require_login();
require_sesskey();

$itemid = $_POST['itemid'];
$pageid = $_POST['pageid'];
$democontent = $_POST['democontent'];

// Set record data
$data = Mb2builderPagesApi::set_record_data( array( 'itemid' => $itemid, 'pagename' => '', 'pageid' => $pageid, 'democontent' => $democontent ) );

// Update database demo content field
Mb2builderPagesApi::update_record_data( $data );
echo $democontent; // This is because ajax call error: Unexpected end of json input
