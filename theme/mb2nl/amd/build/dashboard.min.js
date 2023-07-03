/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 */
 define(["jquery"],function(t){return{dashboardTabs:function(){t(".dashboard-tabs .tab-item").each(function(){t(this).click(function(a){a.preventDefault();a=t(this).attr("data-id");M.util.set_user_preference("dashboard-active",a),t(".dashboard-tabs .tab-item").removeClass("active"),t(".dashboard-bocks .tab-content").removeClass("active"),t(this).addClass("active"),t("#theme-dashboard-tab-content-"+a).addClass("active")})})}}});
