<?php
/**
 * Digital Advertising: Block Patterns
 *
 * @package Digital Advertising
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'digital-advertising',
		array( 'label' => __( 'Digital Advertising', 'digital-advertising' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'digital-advertising/banner-section',
		array(
			'title'      => __( 'Banner Section', 'digital-advertising' ),
			'categories' => array( 'digital-advertising' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/images/Slider.png\",\"id\":2479,\"dimRatio\":0,\"align\":\"full\",\"className\":\"digital-agency-banner-section\"} -->\n<div class=\"wp-block-cover alignfull digital-agency-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-2479\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/images/Slider.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\"digital-agency-text-section ps-lg-5 mx-lg-5 \"} -->\n<div class=\"wp-block-columns alignfull digital-agency-text-section ps-lg-5 mx-lg-5\"><!-- wp:column {\"className\":\"digital-agency-text-section-first ps-4 pt-4\"} -->\n<div class=\"wp-block-column digital-agency-text-section-first ps-4 pt-4\"><!-- wp:heading {\"level\":1,\"style\":{\"color\":{\"text\":\"#ffab01\"},\"typography\":{\"fontSize\":\"50px\"}},\"className\":\"pt-sm\\u002d\\u002d5\"} -->\n<h1 class=\"pt-sm--5 has-text-color\" style=\"color:#ffab01;font-size:50px\">Digital Agency</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\" style=\"font-size:15px\">Lorean ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text […]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#ffab01\"},\"typography\":{\"fontSize\":\"14px\"},\"border\":{\"radius\":\"30px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:14px\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:30px;background-color:#ffab01\">Get Started</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'digital-advertising/classes-section',
		array(
			'title'      => __( 'About Section', 'digital-advertising' ),
			'categories' => array( 'digital-advertising' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"digital-agency-aboutus-section \"} -->\n<div class=\"wp-block-group alignwide digital-agency-aboutus-section\"><!-- wp:columns {\"className\":\" ps-lg-5 mx-lg-5 pt-5 pt-md-0\"} -->\n<div class=\"wp-block-columns  ps-lg-5 mx-lg-5 pt-5 pt-md-0\"><!-- wp:column {\"width\":\"40%\",\"className\":\"digital-agency-aboutus-image-section\"} -->\n<div class=\"wp-block-column digital-agency-aboutus-image-section\" style=\"flex-basis:40%\"><!-- wp:image {\"id\":2516,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/images/About-us-image.png\" alt=\"\" class=\"wp-image-2516\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\",\"width\":\"60%\",\"className\":\"digital-agency-aboutus-printing-section \"} -->\n<div class=\"wp-block-column is-vertically-aligned-top digital-agency-aboutus-printing-section\" style=\"flex-basis:60%\"><!-- wp:heading {\"textAlign\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}},\"textColor\":\"black\"} -->\n<h2 class=\"has-text-align-left has-black-color has-text-color\" style=\"font-size:30px\">About Us</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"color\":{\"text\":\"#ffab01\"},\"typography\":{\"fontSize\":\"25px\"}}} -->\n<h3 class=\"has-text-align-left has-text-color\" style=\"color:#ffab01;font-size:25px\">We Are More Than Digital Agency In The World</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\"} -->\n<p class=\"has-text-align-left\">You might be an artist who would like to introduce yourself and your work here or maybe you’re a business […]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"className\":\"digital-agency-aboutus-printing-section-p1\"} -->\n<p class=\"digital-agency-aboutus-printing-section-p1\">Lorean ipsum is simply dummy text of the printing</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"digital-agency-aboutus-printing-section-p1\"} -->\n<p class=\"has-text-align-left digital-agency-aboutus-printing-section-p1\">Lorean ipsum is simply dummy text of the printing</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#ffab01\"},\"typography\":{\"fontSize\":\"14px\"},\"border\":{\"radius\":\"30px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:14px\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:30px;background-color:#ffab01\">Get Started</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}