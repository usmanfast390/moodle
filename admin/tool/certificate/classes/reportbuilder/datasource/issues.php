<?php
// This file is part of the tool_certificate plugin for Moodle - http://moodle.org/
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

declare(strict_types=1);

namespace tool_certificate\reportbuilder\datasource;

use core_reportbuilder\datasource;
use tool_certificate\certificate;
use tool_certificate\reportbuilder\local\entities\issue;
use core_reportbuilder\local\entities\user;
use tool_certificate\reportbuilder\local\entities\template;
use tool_certificate\reportbuilder\local\formatters\certificate as formatter;

/**
 * Class issues datasource
 *
 * @package   tool_certificate
 * @copyright 2019 Moodle Pty Ltd <support@moodle.com>
 * @author    2019 Daniel Neis Araujo <danielneis@gmail.com>
 * @author    2022 Carlos Castillo <carlos.castillo@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class issues extends datasource {

    /**
     * Initialise report
     */
    protected function initialise(): void {

        // Add certificate issue entity.
        $certificateissueentity = new issue();
        $certificateissuename = $certificateissueentity->get_entity_name();
        $certificateissue = $certificateissueentity->get_table_alias('tool_certificate_issues');
        $this->add_entity($certificateissueentity);

        // Set main table.
        $this->set_main_table('tool_certificate_issues', $certificateissue);

        // Add certificate template entity.
        $certificatetemplentity = new template();
        $certificatetemplentityname = $certificatetemplentity->get_entity_name();
        $certificatetempl = $certificatetemplentity->get_table_alias('tool_certificate_templates');
        $this->add_entity($certificatetemplentity);

        // Add user entity.
        $userentity = new user();
        $userentityname = $userentity->get_entity_name();
        $user = $userentity->get_table_alias('user');
        $this->add_entity($userentity);

        // Add users join and only apply to not deleted.
        $this->add_join("LEFT JOIN {user} {$user} ON {$user}.id = {$certificateissue}.userid");
        $this->add_base_condition_simple("{$user}.deleted", 0);

        // Add categories/tool_certificate_templates entity.
        if (class_exists(\core_course\reportbuilder\local\entities\course_category::class)) {
            // Class was renamed in Moodle LMS 4.1.
            $coursecatentity = new \core_course\reportbuilder\local\entities\course_category();
        } else {
            $coursecatentity = new \core_course\local\entities\course_category();
        }
        $coursecatentityname = $coursecatentity->get_entity_name();
        $coursecatentityalias = $coursecatentity->get_table_alias('course_categories');
        $coursecategoryjoins = [
            "JOIN {context} ctx ON ctx.id = {$certificatetempl}.contextid",
            "LEFT JOIN {course_categories} {$coursecatentityalias} ON {$coursecatentityalias}.id = ctx.instanceid"
        ];
        $this->add_entity($coursecatentity
            ->add_joins($coursecategoryjoins));

        // Add base join used by some entities in current report.
        $this->add_join("JOIN {tool_certificate_templates} {$certificatetempl}
            ON {$certificatetempl}.id = {$certificateissue}.templateid");

        // Add report base condition where templates are present and visible to user.
        [$sql, $params] = certificate::get_visible_categories_contexts_sql("{$certificatetempl}.contextid");
        $this->add_base_condition_sql($sql, $params);

        // Add callback for tenant feature.
        $this->add_base_condition_sql(certificate::get_users_subquery($user, false));

        // TODO add tenancy can_show_tenant_column and get_tenant_id methods to handle adding tenant entity.

        // Add certificate template entity columns/filters/conditions.
        $this->add_columns_from_entity($certificatetemplentityname);
        $this->add_filters_from_entity($certificatetemplentityname);
        $this->add_conditions_from_entity($certificatetemplentityname);

        // Add course category entity columns/filters/conditions.
        $this->add_columns_from_entity($coursecatentityname);
        $this->add_filters_from_entity($coursecatentityname);
        $this->add_conditions_from_entity($coursecatentityname);

        // Add certificate issue entity columns/filters/conditions.
        $this->add_columns_from_entity($certificateissuename);
        $this->add_filters_from_entity($certificateissuename);
        $this->add_conditions_from_entity($certificateissuename);

        // Add user entity columns/filters/conditions.
        $this->add_columns_from_entity($userentityname);
        $this->add_filters_from_entity($userentityname);
        $this->add_conditions_from_entity($userentityname);

        // Change course_category:name/path entity default callback,
        // since in certificate template category isn't mandatory.
        if ($categoryname = $this->get_column('course_category:name')) {
            $categoryname->set_callback([formatter::class, 'course_category_name']);
        }

        if ($categorypath = $this->get_column('course_category:path')) {
            $categorypath->set_callback([formatter::class, 'course_category_path']);
        }

        // Add Tenant entity.
        if ($tenantentity = component_class_callback('\tool_tenant\reportbuilder\local\entities\tenant',
            'prepare_for_user_datasource', [$user])) {
            $this->add_entity($tenantentity);
            $this->add_columns_from_entity($tenantentity->get_entity_name());
            $this->add_filters_from_entity($tenantentity->get_entity_name());
            $this->add_conditions_from_entity($tenantentity->get_entity_name());
        }
    }

    /**
     * Get the visible name of the report.
     *
     * @return string
     */
    public static function get_name(): string {
        return get_string('certificatesissues', 'tool_certificate');
    }

    /**
     * Return the columns that will be added to the report once is created
     *
     * @return string[]
     */
    public function get_default_columns(): array {
        return [
            'template:name',
            'issue:timecreated',
            'issue:expires',
            'issue:codewithlink',
            'user:fullnamewithlink'
        ];
    }

    /**
     * Return the filters that will be added to the report once is created
     *
     * @return string[]
     */
    public function get_default_filters(): array {
        return [
            'template:templateselector',
            'issue:timecreated',
            'issue:expires',
            'user:fullname'
        ];
    }

    /**
     * Return the conditions that will be added to the report once is created
     *
     * @return string[]
     */
    public function get_default_conditions(): array {
        return [];
    }
}
