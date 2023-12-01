<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'veggo_shop_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'veggo-shop' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'veggo-shop' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'veggo-shop' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	// COLOR SECTION

	Kirki::add_section( 'veggo_shop_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'veggo-shop' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'veggo-shop' ),
	    'panel'          => 'veggo_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_global_colors',
		'section'     => 'veggo_shop_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'veggo_shop_global_color',
		'label'       => __( 'choose your Appropriate Color', 'veggo-shop' ),
		'section'     => 'veggo_shop_section_color',
		'default'     => '#5fcb91',
	] );

	// PANEL

	Kirki::add_panel( 'veggo_shop_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'veggo-shop' ),
	) );

	// POST SECTION

	Kirki::add_section( 'veggo_shop_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'veggo-shop' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'veggo-shop' ),
	    'panel'          => 'veggo_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_enable_post_heading',
		'section'     => 'veggo_shop_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'veggo-shop' ),
		'section'     => 'veggo_shop_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'veggo-shop' ),
		'section'     => 'veggo_shop_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'veggo_shop_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'veggo-shop' ),
		'section'     => 'veggo_shop_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'veggo_shop_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'veggo-shop' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'veggo-shop' ),
	    'panel'          => 'veggo_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_free_delivery_text_heading',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Free Delivery', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'veggo-shop' ),
		'settings' => 'veggo_shop_free_delivery_text',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL', 'veggo-shop' ),
		'settings' => 'veggo_shop_free_delivery_link',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_live_chat_text_heading',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Live Chat', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'veggo-shop' ),
		'settings' => 'veggo_shop_live_chat_text',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL', 'veggo-shop' ),
		'settings' => 'veggo_shop_live_chat_link',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_track_order_text_heading',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Track Orders', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'veggo-shop' ),
		'settings' => 'veggo_shop_track_order_text',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL', 'veggo-shop' ),
		'settings' => 'veggo_shop_track_order_link',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_enable_socail_link',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'veggo_shop_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'veggo-shop' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'veggo-shop' ),
		'settings'     => 'veggo_shop_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'veggo-shop' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'veggo-shop' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'veggo-shop' ),
				'description' => esc_html__( 'Add the social icon url here.', 'veggo-shop' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_myaccount_link_heading',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'My Account URL', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'settings' => 'veggo_shop_myaccount_link',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_features_heading',
		'section'     => 'veggo_shop_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Features', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Features 1', 'veggo-shop' ),
		'settings' => 'veggo_shop_feature_text1',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Features 2', 'veggo-shop' ),
		'settings' => 'veggo_shop_feature_text2',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );


    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Features 3', 'veggo-shop' ),
		'settings' => 'veggo_shop_feature_text3',
		'section'  => 'veggo_shop_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'veggo_shop_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'veggo-shop' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'veggo-shop' ),
        'panel'          => 'veggo_shop_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_enable_heading',
		'section'     => 'veggo_shop_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'veggo-shop' ),
		'section'     => 'veggo_shop_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'veggo-shop' ),
		'section'     => 'veggo_shop_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'veggo-shop' ),
		'section'     => 'veggo_shop_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_slider_heading',
		'section'     => 'veggo_shop_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'veggo_shop_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'veggo-shop' ),
		'section'     => 'veggo_shop_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'veggo_shop_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'veggo-shop' ),
		'section'     => 'veggo_shop_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'veggo-shop' ),
		'priority'    => 10,
		'choices'     => veggo_shop_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_slider_short_heading',
		'section'     => 'veggo_shop_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Sub Title', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'veggo_shop_slider_short_title',
		'section'  => 'veggo_shop_blog_slide_section',
		'priority' => 10,
    ] );

	// HOT PRODUCTS SECTION

	Kirki::add_section( 'veggo_shop_hot_products_section', array(
        'title'          => esc_html__( 'Hot Products Settings', 'veggo-shop' ),
        'description'    => esc_html__( 'You have to select product category to show Veggo Shop section.', 'veggo-shop' ),
        'panel'          => 'veggo_shop_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_hot_products_section_enable_heading',
		'section'     => 'veggo_shop_hot_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Hot Products Section', 'veggo-shop' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_hot_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'veggo-shop' ),
		'section'     => 'veggo_shop_hot_products_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_hot_products_heading',
		'section'     => 'veggo_shop_hot_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products Headings',  'veggo-shop' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'veggo_shop_hot_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'veggo-shop' ),
		'section'  => 'veggo_shop_hot_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_game_product_heading',
		'section'     => 'veggo_shop_hot_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'veggo-shop' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'veggo_shop_hot_products_per_page',
		'label'       => esc_html__( 'Number of products to show', 'veggo-shop' ),
		'section'     => 'veggo_shop_hot_products_section',
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'veggo_shop_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'veggo-shop' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'veggo-shop' ),
        'panel'          => 'veggo_shop_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_footer_text_heading',
		'section'     => 'veggo_shop_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'veggo_shop_footer_text',
		'section'  => 'veggo_shop_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'veggo_shop_footer_enable_heading',
		'section'     => 'veggo_shop_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'veggo-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'veggo_shop_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'veggo-shop' ),
		'section'     => 'veggo_shop_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'veggo-shop' ),
			'off' => esc_html__( 'Disable', 'veggo-shop' ),
		],
	] );	
}

add_action( 'customize_register', 'veggo_shop_customizer_settings' );
function veggo_shop_customizer_settings( $wp_customize ) {
	//Hot Products Section
	$args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('veggo_shop_hot_products_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'veggo_shop_sanitize_select',
	));
	$wp_customize->add_control('veggo_shop_hot_products_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display games ','veggo-shop'),
		'section' => 'veggo_shop_hot_products_section',
	));
}
