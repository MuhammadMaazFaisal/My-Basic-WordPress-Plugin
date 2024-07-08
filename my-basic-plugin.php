<?php
/*
 * Plugin Name:       My Basic Plugin
 * Plugin URI:        https://example.com/plugins/the-basic/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basic-plugin
 * Domain Path:       /languages
 * Requires Plugins:  my-plugin, yet-another-plugin
 */

/**
 * Bootstrap the plugin.
 */

require_once 'vendor/autoload.php';
require_once untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/inc/custom-functions.php';

use MyBasicPlugin\Plugin;

if ( class_exists( 'MyBasicPlugin\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, array( $the_plugin, 'activate' ) );
register_deactivation_hook( __FILE__, array( $the_plugin, 'deactivate' ) );
