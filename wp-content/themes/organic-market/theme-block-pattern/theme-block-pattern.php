<?php
/**
 * Organic Market: Block Patterns
 *
 * @package Organic Market
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'organic-market',
		array( 'label' => __( 'Organic Market', 'organic-market' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'organic-market/banner-section',
		array(
			'title'      => __( 'Banner Section', 'organic-market' ),
			'categories' => array( 'organic-market' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/theme-block-pattern/images/banner.png\",\"id\":481,\"dimRatio\":10,\"isDark\":false,\"align\":\"full\",\"className\":\"banner-section \"} -->\n<div class=\"wp-block-cover alignfull is-light banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-10 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-481\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/theme-block-pattern/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\",\"textTransform\":\"capitalize\"},\"color\":{\"text\":\"#010146\"}}} -->\n<h1 class=\"has-text-align-center has-text-color\" style=\"color:#010146;font-size:40px;text-transform:capitalize\">High Quality Organic Product</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"color\":{\"text\":\"#010146\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#010146;font-size:14px\">Lorem ipsum&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups .</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"color\":{\"background\":\"#f7941d\"},\"typography\":{\"fontSize\":\"15px\"},\"border\":{\"radius\":\"0px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:0px;background-color:#f7941d\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->"
		)
	);

	register_block_pattern(
		'organic-market/Products Section',
		array(
			'title'      => __( 'Products Section', 'organic-market' ),
			'categories' => array( 'organic-market' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"products-section pt-md-5 pt-3\"} -->\n<div class=\"wp-block-group alignwide products-section pt-md-5 pt-3\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#010146\"},\"typography\":{\"fontSize\":\"30px\"}}} -->\n<h2 class=\"has-text-align-center has-text-color\" style=\"color:#010146;font-size:30px\">Our Best Seller Product</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"color\":{\"text\":\"#1a2428\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#1a2428;font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"pt-md-5  pt-0 top-seller-section mx-md-0 mx-3\"} -->\n<div class=\"wp-block-columns alignwide pt-md-5  pt-0 top-seller-section mx-md-0 mx-3\"><!-- wp:column {\"width\":\"40.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:40.33%\"><!-- wp:embed {\"url\":\"https://youtu.be/yAoLSRbwxL8\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://youtu.be/yAoLSRbwxL8\n</div></figure>\n<!-- /wp:embed --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"60.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:60.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"25px\"},\"color\":{\"text\":\"#010146\"}}} -->\n<h3 class=\"has-text-color\" style=\"color:#010146;font-size:25px\">Top Seller</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#1a2428\"}}} -->\n<p class=\"has-text-color\" style=\"color:#1a2428;font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:woocommerce/product-category {\"columns\":2,\"rows\":2,\"contentVisibility\":{\"image\":true,\"title\":true,\"price\":true,\"rating\":true,\"button\":true},\"categories\":[20],\"orderby\":\"price_asc\"} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}