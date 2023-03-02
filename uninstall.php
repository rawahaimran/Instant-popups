<?php

/**
 *
 * @link              https://github.com/rawahaimran
 * @since             1.0.0
 * @package           Instant Popups
 */

 global $wpdb, $table_prefix;
 $wp_table_name = $table_prefix.'I_pop';
 $q= "DROP TABLE `$table_name`;";

 $wpdb->query($q);

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
