<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rawahaimran
 * @since             1.0.0
 * @package           Instant Popups
 *
 * @wordpress-plugin
 * Plugin Name:       Instant Popups
 * Plugin URI:        https://github.com/rawahaimran
 * Description:       This plugin displays Popups instantly 
 * Version:           1.0.0
 * Author:            Muhammad Rawaha
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// setup

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if(!defined('ABSPATH')){
	die;
}

// echo site_url();

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

//include

include('functions.php');
include('admin/admin_functions.php');
include('admin/admin_submenu.php');

//hooks


register_activation_hook( __FILE__, 'activate_I_pop' );
register_deactivation_hook( __FILE__, 'deactivate_I_pop' );

add_action('wp_enqueue_scripts','I_pop_scripts');

add_action('admin_menu','I_pop_admin_page');

add_action('wp_head','show_popup');

