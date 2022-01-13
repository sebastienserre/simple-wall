<?php

class Shortcodes {

	public function init() {
		add_shortcode( 'simple_wall', array( $this, 'wall_shortcodes' ) );

		add_action( 'wp_body_open', array( $this, 'fb_script' ) );
	}

	/**
	 * @param $atts array list of arguments
	 *
	 * @return false|string
	 */
	public function wall_shortcodes( $atts ) {
		$atts = shortcode_atts(
			array(
				'url'    => '',
				'width'  => '',
				'height' => '',
			),
			$atts,
			'simple_wall'
		);
		ob_start();
		?>
        <div class="fb-page" data-href="<?php echo esc_url( $atts['url'] ); ?>" data-tabs="timeline" data-width="<?php echo $atts['width']; ?>"
             data-height="<?php echo $atts['height']; ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
             data-show-facepile="true"></div>
		<?php
		return ob_get_clean();
	}

	/**
     * Facebook script
     * @see https://developers.facebook.com/docs/plugins/page-plugin/
	 * @return void
	 */
	public function fb_script() {
		$content = get_the_content();
		if ( has_shortcode( $content, 'facebook_wall' ) ) {
			echo '<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0" nonce="V2oYdNpC"></script>';
		}
	}
}

$shortcodes = new Shortcodes();
$shortcodes->init();