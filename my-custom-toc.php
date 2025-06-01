<?php
/**
 * Plugin Name:         My Custom Table of Contents
 * Plugin URI:          https://example.com/plugins/my-custom-toc/
 * Description:         A fully customizable, lightweight, and responsive Table of Contents (TOC) plugin with advanced control, layout features, and image navigation.
 * Version:             1.0.0
 * Author:              Your Name
 * Author URI:          https://example.com/
 * License:             GPLv2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         my-custom-toc
 * Domain Path:         /languages
 * Requires at least:   5.8
 * Requires PHP:        7.4
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define plugin constants
define( 'MCT_VERSION', '1.0.0' );
define( 'MCT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MCT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'MCT_PLUGIN_FILE', __FILE__ );
define( 'MCT_SETTINGS_SLUG', 'my_custom_toc_settings' );
define( 'MCT_OPTIONS_GROUP', 'mct_options_group' ); // For register_setting
define( 'MCT_OPTION_NAME', 'mct_settings' ); // Single option array in wp_options

/**
 * Load plugin textdomain for internationalization.
 */
function mct_load_textdomain() {
	load_plugin_textdomain( 'my-custom-toc', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mct_load_textdomain' );

/**
 * Include necessary files.
 */
require_once MCT_PLUGIN_DIR . 'includes/class-my-custom-toc-settings.php';
require_once MCT_PLUGIN_DIR . 'includes/class-my-custom-toc-core.php';
require_once MCT_PLUGIN_DIR . 'admin/class-my-custom-toc-admin.php';
require_once MCT_PLUGIN_DIR . 'public/class-my-custom-toc-public.php';
// Optional: require_once MCT_PLUGIN_DIR . 'includes/helpers.php';


/**
 * Initialize plugin classes.
 */
if ( class_exists( 'My_Custom_TOC_Admin' ) ) {
	new My_Custom_TOC_Admin();
}
if ( class_exists( 'My_Custom_TOC_Public' ) ) {
	new My_Custom_TOC_Public();
}

/**
 * Activation hook.
 * Sets up default options if they don't exist.
 */
function mct_activate() {
    My_Custom_TOC_Settings::set_default_options();
}
register_activation_hook( __FILE__, 'mct_activate' );

/**
 * Deactivation hook.
 * (Optional: Can be used to clean up transients or other temporary data)
 */
function mct_deactivate() {
	// Placeholder for deactivation tasks
}
register_deactivation_hook( __FILE__, 'mct_deactivate' );

/**
 * Add settings link on plugin page.
 */
function mct_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=' . MCT_SETTINGS_SLUG . '">' . __( 'Settings', 'my-custom-toc' ) . '</a>';
    array_unshift( $links, $settings_link );
    return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'mct_add_settings_link' );