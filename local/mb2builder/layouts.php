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

//defined('MOODLE_INTERNAL') || die();

require_once( __DIR__ . '/../../config.php' );
require_once( __DIR__ . '/lib.php' );
require_once( __DIR__ . '/classes/layouts_api.php' );
require_once( __DIR__ . '/classes/pages_helper.php' );
require_once( $CFG->libdir . '/adminlib.php' );
require_once( $CFG->libdir . '/tablelib.php' );

// Optional parameters
$deleteid = optional_param('deleteid', 0, PARAM_INT);
$moveup = optional_param('moveup', 0, PARAM_INT);
$movedown = optional_param('movedown', 0, PARAM_INT);
$returnurl = optional_param('returnurl', '/local/mb2builder/layouts.php', PARAM_LOCALURL);

// Links
$editpage = '/local/mb2builder/edit-layout.php';
$managelayouts = '/local/mb2builder/layouts.php';
$deletepage = '/local/mb2builder/delete-layout.php';
$baseurl = new moodle_url($managelayouts);
$returnurl = new moodle_url($returnurl);

// Configure the context of the page
admin_externalpage_setup( 'local_mb2builder_managelayouts', '', null, $baseurl );
require_capability( 'local/mb2builder:viewlayouts', context_system::instance() );
$can_manage = has_capability( 'local/mb2builder:managelayouts', context_system::instance() );

// Get sorted pages
$sortorder_items = Mb2builderLayoutsApi::get_sortorder_items();

// Delete the page
if ($can_manage && $deleteid)
{
    Mb2builderLayoutsApi::delete($deleteid);
    $message = get_string('pagedeleted', 'local_mb2builder');
}

// Move up
if ($can_manage && $moveup)
{
    Mb2builderLayoutsApi::move_up($moveup);
    $message = get_string('pageupdated', 'local_mb2builder', array('title' => Mb2builderLayoutsApi::get_record($moveup)->name));
}

// Move down
if ( $can_manage && $movedown )
{
    Mb2builderLayoutsApi::move_down($movedown);
    $message = get_string('pageupdated', 'local_mb2builder', array('title' => Mb2builderLayoutsApi::get_record($movedown)->name));
}

if ( isset( $message ) )
{
    redirect($returnurl, $message);
}

// Page title
$namepage = get_string('pluginname', 'local_mb2builder');
$PAGE->set_heading($namepage);
$PAGE->set_title($namepage);
echo $OUTPUT->header();
echo $OUTPUT->heading( get_string('layouts', 'local_mb2builder' ) );

// Table declaration
$table = new flexible_table('mb2builder-pages-table');

// Customize the table
$table->define_columns(
    array(
        'name',
        'createdby',
        'modifiedby',
        'actions',
    )
);

$table->define_headers(
    array(
        get_string('name', 'moodle'),
        get_string('createdby', 'local_mb2builder'),
        get_string('modifiedby', 'local_mb2builder'),
        get_string('actions', 'moodle'),
    )
);

$table->define_baseurl($baseurl);
$table->set_attribute( 'class', 'generaltable' );
$table->column_class('createdby', 'text-center align-middle');
$table->column_class('modifiedby', 'text-center align-middle');
$table->column_class( 'actions', 'text-right align-middle' );
$table->setup();

foreach ($sortorder_items as $item)
{

    $callback = Mb2builderLayoutsApi::get_record($item);

    // Filling of information columns
    $namecallback = html_writer::div( html_writer::link(new moodle_url( $editpage, array('itemid' => $callback->id ) ), '<strong>' . $callback->name . '</strong>'));

    // Created and modified by
    $createduser = Mb2builderLayoutsApi::get_user($callback->createdby);
    $createduserdate = userdate($callback->timecreated, get_string('strftimedatemonthabbr', 'local_mb2builder'));
    $modifieduserdate = userdate($callback->timemodified, get_string('strftimedatemonthabbr', 'local_mb2builder'));
    $modifieduser = Mb2builderLayoutsApi::get_user($callback->modifiedby);
    $createdbyitem = $createduser ? '<div class="mb2slides-admin-username">' .
    $createduser->firstname . ' ' . $createduser->lastname .  '</div><div>' . $createduserdate . '</div>' : '&minus;';
    $modifiedbyitem = $modifieduser ? '<div class="mb2slides-admin-username">' .
    $modifieduser->firstname . ' ' . $modifieduser->lastname .  '</div><div>' . $modifieduserdate . '</div>' : '&minus;';

	// Defining page status
    $moveupicon = 't/up';
    $movedownicon = 't/down';
    $moveupstring = get_string('moveup', 'moodle');
    $strmovedown = get_string('movedown', 'moodle');
    $previtem = Mb2builderLayoutsApi::get_record_near($callback->id, 'prev');
    $nextitem = Mb2builderLayoutsApi::get_record_near($callback->id, 'next');

    // Link to move up
    $moveuplink = new moodle_url($managelayouts, array('moveup' => $callback->id));
    $moveupitem = $previtem ? $OUTPUT->action_icon($moveuplink, new pix_icon($moveupicon, $moveupstring)) : '';

    // Link to move down
    $movedownlink = new moodle_url($managelayouts, array('movedown' => $callback->id));
    $movedownitem = $nextitem ? $OUTPUT->action_icon($movedownlink, new pix_icon($movedownicon, $strmovedown)) : '';

    // Link for editing
    $editlink = new moodle_url($editpage, array('itemid' => $callback->id));
    $edititem = $OUTPUT->action_icon($editlink, new pix_icon('t/edit', get_string('edit', 'moodle')));

    // Link to remove
    $deletelink = new moodle_url($deletepage, array('deleteid' => $callback->id));
    $deleteitem = $OUTPUT->action_icon($deletelink, new pix_icon('t/delete', get_string('delete', 'moodle')));

    // Check if user can manage items
    $actions = $can_manage ? $moveupitem . $movedownitem . $edititem . $deleteitem : '';

	$table->add_data( array( $namecallback, $createdbyitem, $modifiedbyitem, $actions ) );
    //$table->add_data( array( $namecallback, $moodlepageitem, $actions ) );

}

// Display the table
$table->print_html();

echo $OUTPUT->footer();
?>
