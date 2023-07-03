/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 */
 define(["jquery"],function(e){return{Init:function(){e(".menu-extra-controls-btn").each(function(){e(this).click(function(n){var s=e(this),o=e(".menu-searchcontainer"),a=e(".menu-staticontentcontainer");s.hasClass("menu-extra-controls-search")?s.hasClass("open")?(o.removeClass("open"),e(".menu-extra-controls-btn").removeClass("open")):(a.removeClass("open"),e(".menu-extra-controls-content").removeClass("open"),o.addClass("open"),e(".menu-extra-controls-search").addClass("open")):s.hasClass("menu-extra-controls-content")&&(s.hasClass("open")?(a.removeClass("open"),e(".menu-extra-controls-btn").removeClass("open")):(o.removeClass("open"),e(".menu-extra-controls-search").removeClass("open"),a.addClass("open"),e(".menu-extra-controls-content").addClass("open")))})})}}});
