<?php
/**
 * Register blocks.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly.
function simple_wall_register_blocks() {
	register_block_type( SIMPLE_FB_PLUGIN_PATH );
}
add_action( 'init', 'simple_wall_register_blocks' );

/**
 * Enqueue FB scripts in front and admin
 */
//add_action( 'in_admin_header', 'simple_wall_body_open' );
add_action( 'wp_body_open', 'simple_wall_body_open' );
function simple_wall_body_open() {
	if ( has_block( 'simple-wall/wall' ) ) {
		echo '<div id="fb-root"></div>';
		wp_enqueue_script( 'facebook-jssdk' );
	}
}
