<?php
/**
 * @package organic-market
 * @subpackage organic-market
 * @since organic-market 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses organic_market_header_style()
*/

function organic_market_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'organic_market_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 150,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'organic_market_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'organic_market_custom_header_setup' );

if ( ! function_exists( 'organic_market_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see organic_market_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'organic_market_header_style' );
function organic_market_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$organic_market_custom_css = "
        .bottom-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'organic-market-basic-style', $organic_market_custom_css );
	endif;
}
endif;