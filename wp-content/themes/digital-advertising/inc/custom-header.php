<?php
/**
 * @package Digital Advertising
 * @subpackage digital-advertising
 * @since digital-advertising 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses digital_advertising_header_style()
*/

function digital_advertising_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'digital_advertising_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1400,
		'height'             => 150,
		'flex-height'        => true,
	    'flex-width'         => true,
		'wp-head-callback'   => 'digital_advertising_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'digital_advertising_custom_header_setup' );

if ( ! function_exists( 'digital_advertising_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see digital_advertising_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'digital_advertising_header_style' );
function digital_advertising_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$digital_advertising_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}
		";
	   	wp_add_inline_style( 'digital-advertising-basic-style', $digital_advertising_custom_css );
	endif;
}
endif; // digital_advertising_header_style
