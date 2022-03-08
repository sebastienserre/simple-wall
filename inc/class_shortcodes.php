<?php

namespace SimpleWall\Shortcodes;

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
						'url' =>'',
						'slug'   => '',
						'width'  => '',
						'height' => '',
				),
			$atts,
			'simple_wall'
		);

		if ( ! empty( $atts['url'] ) ) {
			$atts['slug'] = $this->convert_url( $atts['url'] );
		}

		$url = $this->create_url( $atts['slug'] );

		ob_start();
		?>
		<div class="simple_wall_shortcode">
			<div class="fb-page" data-href="<?php echo esc_url( $url ); ?>" data-tabs="timeline"
				 data-width="<?php echo esc_attr( $atts['width'] ); ?>"
				 data-height="<?php echo esc_attr( $atts['height'] ); ?>" data-small-header="false" data-adapt-container-width="true"
				 data-hide-cover="false"
				 data-show-facepile="true">
			</div>
		</div>
		<?php
		return ob_get_clean();
	}

	function create_url( $slug ){
		$url = 'https://facebook.com/';
		return $url . $slug;
	}

	function convert_url( $url ){
		$slug = explode( 'https://facebook.com/', $url );
		$slug = $slug[1];
		return $slug;
	}


	/**
     * Facebook script
     * @see https://developers.facebook.com/docs/plugins/page-plugin/
	 * @return void
	 */
	public function fb_script() {
		$locale = simplewall_get_fb_locale();
		/**
		 * Allow developers to add location to display the shortcode, for example in an ACF field.
		 */
		$contents = apply_filters( 'simple_wall_shortcode_location', array( get_the_content() ) );
		foreach ( $contents as $content ) {
			if ( has_shortcode( $content, 'simple_wall' ) ) {
				echo '<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/' . $locale . '/sdk.js#xfbml=1&version=v12.0" nonce="V2oYdNpC"></script>';
			}
		}
	}
}

$shortcodes = new Shortcodes();
$shortcodes->init();
