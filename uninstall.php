<?php
/**
 * Uninstall My Custom Table of Contents
 *
 * Deletes plugin options.
 */

// Exit if accessed directly.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Option name to delete
$option_name = 'mct_settings'; // Same as MCT_OPTION_NAME

// Delete the option from the database
delete_option( $option_name );

// For site-wide options in multisite.
// delete_site_option( $option_name );

// Add any other cleanup tasks here (e.g., custom tables, post meta if used extensively).
// Be careful not to delete user content unless explicitly stated.