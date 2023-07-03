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

require_once( __DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php' );

require_once( __DIR__ . '/lib.php' );
require_once( __DIR__ . '/classes/footers_api.php' );

// Optional parameters
$deleteid = optional_param('deleteid', 0, PARAM_INT);
$confirm = optional_param('confirm', false, PARAM_BOOL);

// Link generation
$urlparameters = array('deleteid' => $deleteid);
$baseurl = new moodle_url('/local/mb2builder/delete-footer.php', $urlparameters);
$managefooters = new moodle_url('/local/mb2builder/footers.php');

// Configure the context of the page
admin_externalpage_setup( 'local_mb2builder_managefooters', '', null, $baseurl );
require_capability( 'local/mb2builder:managefooters', context_system::instance() );

// The page title
$titlepage = get_string( 'deletefooter', 'local_mb2builder' );
$PAGE->navbar->add( $titlepage );
$PAGE->set_heading( $titlepage) ;
$PAGE->set_title( $titlepage );
echo $OUTPUT->header();

$confirmed = ( $confirm && data_submitted() && confirm_sesskey() );

if ( ! $confirmed )
{
    $optionsyes = array( 'action'=>'delete', 'deleteid' => $deleteid, 'sesskey' => sesskey(), 'confirm' => 1 );
    $formcontinue = new single_button( new moodle_url( $managefooters, $optionsyes ), get_string( 'yes' ) );
    $formcancel = new single_button( new moodle_url( $managefooters ), get_string('no'), 'get');
    $callback = Mb2builderFootersApi::get_record( $deleteid );

    echo $OUTPUT->confirm( get_string('confirmdeletefooter', 'local_mb2builder', array( 'title'=>$callback->name ) ), $formcontinue, $formcancel );
}

echo $OUTPUT->footer();
?>
