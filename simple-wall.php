<?php

namespace SimpleWall;
/**
 * Plugin Name: Simple Wall
  * Plugin URI: https://thivinfo.com/en
 * Description: Display your FB page timeline with a shortcode or a block
 * Author: Sébastien SERRE
 * Author URI: https://thivinfo.com/en
 * Text Domain: simple-wall
 * Requires at least: 4.6
 * Tested up to: 6.1
 * Version: 1.1.3
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 **/

/**
 * Plugin developed by a third party developer not in contact with Facebook company
 */

add_action( 'plugins_loaded', 'SimpleWall\define_constant' );
function define_constant() {
	define( 'SIMPLE_VERSION', '1.1.3' );
	define( 'SIMPLE_FB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	define( 'SIMPLE_FB_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	define( 'SIMPLE_FB_PLUGIN_DIR', untrailingslashit( SIMPLE_FB_PLUGIN_PATH ) );
	define( 'SIMPLE_FB_CUST_INC', SIMPLE_FB_PLUGIN_PATH . 'inc/' );
}

add_action( 'plugins_loaded', 'SimpleWall\load_files' );
function load_files() {
	$files = scandir( SIMPLE_FB_CUST_INC );
	foreach ( $files as $file ) {
		if ( is_file( SIMPLE_FB_CUST_INC . $file ) ) {
			require SIMPLE_FB_CUST_INC . $file;
		}
	}
}
