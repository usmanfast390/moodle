/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 */ define(["jquery"],function($){return{sidebarToggle:function(){var a=$(".fsmod-wrap");$(".fsmod-showhide-sidebar").each(function(){$(this).click(function(b){b.preventDefault(),a.hasClass("issidebar")?(a.removeClass("issidebar"),M.util.set_user_preference("fsmod-open-nav","false")):(a.addClass("issidebar"),M.util.set_user_preference("fsmod-open-nav","true")),a.hasClass("ismsidebar")?a.removeClass("ismsidebar"):a.addClass("ismsidebar")})}),$(".fsmod-toggle-sidebar>button").click(function(b){$(this).hasClass("toggle-blocks")?(a.removeClass("issection"),a.addClass("isblock"),M.util.set_user_preference("fsmod-toggle-sections","block")):(a.removeClass("isblock"),a.addClass("issection"),M.util.set_user_preference("fsmod-toggle-sections","section"))})}}})
