<?php

namespace SimpleWall;
/**
 * Plugin Name: Simple Wall
 * Plugin URI: https://thivinfo.com
 * Description: Display your FB page timeline with a shortcode or a block
 * Author: Sébastien SERRE
 * Author URI: https://thivinfo.com
 * Text Domain: simple-wall
 * Requires at least: 4.6
 * Version: 1.0.1
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 **/

/**
 * Plugin developed by a third party developper not in contact with Facebook company
 */

add_action( 'plugins_loaded', 'SimpleWall\define_constant' );
function define_constant() {
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
