<?php
/**
 * Plugin Name: Add it on header, footer and body
 * Description: WordPress plugin that allows to add your code on the header, footer and body section
 * Version: 1.0.0
 * Request at least: WordPress 6.0
 * Requires PHP: 8
 * Author: Marco Valeri
 * Author URI: https://www.devmarco.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: add-it-on
 * Domain Path: /languages
 */

// If this files is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Show the plugin menu in WordPress admin area
function add_it_on_page() {

    add_menu_page (
        'Add It On Header, Footer and Body',
        'Add It On Menu',
        'manage_options',
        'add-it-on',
        'add_it_on_page',
        'dashicons-hammer',
        100
    );

    add_submenu_page (
        'add-it-on',
        'Add your code',
        'Add it on Header, Footer and Body',
        'manage_options',
        'add-it-on-menu',
    );
}

add_action('admin_menu', 'add_it_on_page');