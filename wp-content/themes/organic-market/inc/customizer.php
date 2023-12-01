<?php
/**
 * Organic Market Theme Customizer
 *
 * @package organic-market
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function organic_market_customize_register($wp_customize) {
	//add home page setting pannel
	$wp_customize->add_panel('organic_market_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'organic-market'),
	));	

	// font array
	$organic_market_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Coming+Soon' => 'Coming+Soon',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Noto Sans' => 'Noto Sans',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Poppins' => 'Poppins',
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Roboto' => 'Roboto',
        'Roboto Condensed' => 'Roboto Condensed',
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Satisfy' => 'Satisfy',
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Unica One' => 'Unica One',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	$wp_customize->add_section( 'organic_market_typography', array(
    	'title'      => __( 'Typography', 'organic-market' ),
		'priority'   => 30,
		'panel' => 'organic_market_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'organic_market_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_paragraph_color', array(
		'label' => __('Paragraph Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('organic_market_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control(
	    'organic_market_paragraph_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'Paragraph Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	$wp_customize->add_setting('organic_market_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'organic_market_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_atag_color', array(
		'label' => __('"a" Tag Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('organic_market_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_atag_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( '"a" Tag Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'organic_market_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_li_color', array(
		'label' => __('"li" Tag Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('organic_market_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_li_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( '"li" Tag Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'organic_market_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h1_color', array(
		'label' => __('H1 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h1_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'H1 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('organic_market_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h1_font_size',array(
		'label'	=> __('h1 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'organic_market_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h2_color', array(
		'label' => __('h2 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h2_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'h2 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('organic_market_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h2_font_size',array(
		'label'	=> __('h2 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'organic_market_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h3_color', array(
		'label' => __('h3 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h3_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'h3 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('organic_market_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h3_font_size',array(
		'label'	=> __('h3 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'organic_market_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h4_color', array(
		'label' => __('h4 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h4_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'h4 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('organic_market_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h4_font_size',array(
		'label'	=> __('h4 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'organic_market_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h5_color', array(
		'label' => __('h5 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h5_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'h5 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('organic_market_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h5_font_size',array(
		'label'	=> __('h5 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'organic_market_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_h6_color', array(
		'label' => __('h6 Color', 'organic-market'),
		'section' => 'organic_market_typography',
		'settings' => 'organic_market_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('organic_market_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control(
	    'organic_market_h6_font_family', array(
	    'section'  => 'organic_market_typography',
	    'label'    => __( 'h6 Fonts','organic-market'),
	    'type'     => 'select',
	    'choices'  => $organic_market_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('organic_market_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_h6_font_size',array(
		'label'	=> __('h6 Font Size','organic-market'),
		'section'	=> 'organic_market_typography',
		'setting'	=> 'organic_market_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('organic_market_background_skin_mode',array(
        'default' => 'Transpert Background',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_background_skin_mode',array(
        'type' => 'select',
        'label' => 'Background Type',
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','organic-market'),
            'Transpert Background' => __('Transparent Background','organic-market'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('organic_market_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','organic-market'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('organic_market_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','organic-market'),
       'section' => 'woocommerce_product_catalog',
    ));

   $wp_customize->add_setting( 'organic_market_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	) );
	$wp_customize->add_control( 'organic_market_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'organic-market' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('organic_market_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));	
	$wp_customize->add_control('organic_market_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','organic-market'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'organic_market_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control( 'organic_market_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','organic-market' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'organic_market_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control( 'organic_market_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','organic-market' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'organic_market_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'organic_market_sanitize_number_range',
	));
	$wp_customize->add_control('organic_market_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','organic-market' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'organic_market_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'organic_market_sanitize_number_range',
	));
	$wp_customize->add_control('organic_market_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','organic-market' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('organic_market_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'organic_market_sanitize_choices'
    ));
   $wp_customize->add_control('organic_market_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','organic-market'),
       'choices' => array(
            'Yes' => __('Yes','organic-market'),
            'No' => __('No','organic-market'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('organic_market_product_button_section', array(
		'title'    => __('Product Button Settings', 'organic-market'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'organic_market_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','organic-market' ),
		'section' => 'organic_market_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'organic_market_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','organic-market' ),
		'section' => 'organic_market_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'organic_market_product_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'    => 'organic_market_sanitize_number_range',
	));
	$wp_customize->add_control('organic_market_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','organic-market' ),
		'section' => 'organic_market_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('organic_market_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'organic-market'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('organic_market_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','organic-market'),
        'section' => 'organic_market_product_sale_section',
        'choices' => array(
            'Right' => __('Right','organic-market'),
            'Left' => __('Left','organic-market'),
        ),
	) );

	$wp_customize->add_setting( 'organic_market_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','organic-market'),
        'section'  => 'organic_market_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('organic_market_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'organic_market_sanitize_float'
	));
	$wp_customize->add_control('organic_market_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','organic-market'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'organic_market_product_sale_section',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'organic_market_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control( 'organic_market_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','organic-market' ),
		'section' => 'organic_market_product_sale_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'organic_market_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control( 'organic_market_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','organic-market' ),
		'section' => 'organic_market_product_sale_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	//Layouts
	$wp_customize->add_section('organic_market_left_right', array(
		'title'    => __('Layout Settings', 'organic-market'),
		'priority' => null,
		'panel'    => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','organic-market'),
       'section' => 'organic_market_left_right'
    ));

   $wp_customize->add_setting( 'organic_market_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'organic-market'),
	    'section' => 'organic_market_left_right',
	    'settings' => 'organic_market_loader_background_color_settings',
  	)));

  	$wp_customize->add_setting('organic_market_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'organic-market'),
			'Preloader 2' => __('Preloader 2', 'organic-market'),
		),
	));

   	$wp_customize->add_setting( 'organic_market_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('organic_market_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','organic-market'),
		'section' => 'organic_market_left_right'
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('organic_market_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'organic-market'),
			'Right Sidebar' => __('Right Sidebar', 'organic-market'),
		),
	));

	$wp_customize->add_setting( 'organic_market_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('organic_market_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','organic-market'),
		'section' => 'organic_market_left_right'
    ));

    // single product page sidebar alignment
    $wp_customize->add_setting('organic_market_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'organic-market'),
			'Right Sidebar' => __('Right Sidebar', 'organic-market'),
		),
	));

   	$wp_customize->add_setting( 'organic_market_single_page_breadcrumb',array(
		'default' => true,
      	'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
    $wp_customize->add_control('organic_market_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','organic-market' ),
        'section' => 'organic_market_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('organic_market_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'organic-market'),
			'Right Sidebar' => __('Right Sidebar', 'organic-market'),
			'One Column'    => __('One Column', 'organic-market'),
			'Grid Layout'   => __('Grid Layout', 'organic-market')
		),
	));

	$wp_customize->add_setting('organic_market_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'organic-market'),
			'Right Sidebar' => __('Right Sidebar', 'organic-market'),
			'One Column'    => __('One Column', 'organic-market'),
		),
	));

	$wp_customize->add_setting('organic_market_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'organic-market'),
		'section'        => 'organic_market_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'organic-market'),
			'Right Sidebar' => __('Right Sidebar', 'organic-market'),
			'One Column'    => __('One Column', 'organic-market'),
		),
	));

	$wp_customize->add_setting('organic_market_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','organic-market'),
        'description' => __('Here you can change the Width layout. ','organic-market'),
        'section' => 'organic_market_left_right',
        'choices' => array(
            'Default' => __('Default','organic-market'),
            'Container' => __('Container','organic-market'),
            'Box Container' => __('Box Container','organic-market'),
        ),
	));

	// Button
	$wp_customize->add_section( 'organic_market_theme_button', array(
		'title' => __('Button Option','organic-market'),
		'panel' => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','organic-market'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'organic_market_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('organic_market_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','organic-market'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'organic_market_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'organic_market_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	) );
	$wp_customize->add_control( 'organic_market_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','organic-market' ),
		'section'     => 'organic_market_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('organic_market_topbar',array(
		'title'	=> __('Topbar Section','organic-market'),
		'description'	=> __('Add topbar content','organic-market'),
		'priority'	=> null,
		'panel' => 'organic_market_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'organic_market_display_topbar',array(
		'default' => true,
      	'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
   $wp_customize->add_control('organic_market_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','organic-market' ),
        'section' => 'organic_market_topbar'
    ));

   $wp_customize->add_setting('organic_market_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','organic-market'),
       'section' => 'organic_market_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'organic_market_sticky_header',array(
		'default' => false,
      'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
   $wp_customize->add_control('organic_market_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','organic-market' ),
        'section' => 'organic_market_topbar'
    ));

   $wp_customize->add_setting( 'organic_market_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	) );
	$wp_customize->add_control( 'organic_market_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','organic-market' ),
		'section'     => 'organic_market_topbar',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
    
	$wp_customize->add_setting('organic_market_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('organic_market_topbar_text',array(
		'label'	=> __('Add Tobar Text','organic-market'),
		'section'	=> 'organic_market_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('organic_market_purchase_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('organic_market_purchase_btn_text',array(
		'label'	=> __('Add Button Text','organic-market'),
		'section'	=> 'organic_market_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('organic_market_purchase_btn_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('organic_market_purchase_btn_url',array(
		'label'	=> __('Add Button URL','organic-market'),
		'section'	=> 'organic_market_topbar',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('organic_market_phone_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_phone_number',
	));
	$wp_customize->add_control('organic_market_phone_number',array(
		'label'	=> __('Phone Number','organic-market'),
		'section'	=> 'organic_market_topbar',
		'type'	=> 'text'
	));

	//menu settings
	$wp_customize->add_section('organic_market_menu_setting',array(
		'title'	=> __('Menus Setting','organic-market'),
		'description'	=> __('Add menus content','organic-market'),
		'priority'	=> null,
		'panel' => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_menu_weight',array(
		'label'	=> __('Menus Weight ','organic-market'),
		'section'=> 'organic_market_menu_setting',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','organic-market'),
            '200' => __('200','organic-market'),
            '300' => __('300','organic-market'),
            '400' => __('400','organic-market'),
            '500' => __('500','organic-market'),
            '600' => __('600','organic-market'),
            '700' => __('700','organic-market'),
            '800' => __('800','organic-market'),
            '900' => __('900','organic-market'),
        ),
	));

	$wp_customize->add_setting( 'organic_market_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_menu_color_settings', array(
  		'label' => __('Menu Color', 'organic-market'),
	    'section' => 'organic_market_menu_setting',
	    'settings' => 'organic_market_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'organic_market_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'organic-market'),
	    'section' => 'organic_market_menu_setting',
	    'settings' => 'organic_market_menu_hover_color_settings',
  	)));
 
  	$wp_customize->add_setting( 'organic_market_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'organic-market'),
	    'section' => 'organic_market_menu_setting',
	    'settings' => 'organic_market_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'organic_market_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'organic-market'),
	    'section' => 'organic_market_menu_setting',
	    'settings' => 'organic_market_submenu_hover_color_settings',
  	)));

	// Social Icons
	$wp_customize->add_section('organic_market_social_icons',array(
		'title'	=> __('Social Icons','organic-market'),
		'description'	=> __('Add topbar content','organic-market'),
		'priority'	=> null,
		'panel' => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('organic_market_facebook_url',array(
		'label'	=> __('Add Facebook link','organic-market'),
		'section'	=> 'organic_market_social_icons',
		'setting'	=> 'organic_market_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('organic_market_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('organic_market_twitter_url',array(
		'label'	=> __('Add Twitter link','organic-market'),
		'section'	=> 'organic_market_social_icons',
		'setting'	=> 'organic_market_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('organic_market_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('organic_market_linkedin_url',array(
		'label'	=> __('Add Linkedin link','organic-market'),
		'section'	=> 'organic_market_social_icons',
		'setting'	=> 'organic_market_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('organic_market_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('organic_market_instagram_url',array(
		'label'	=> __('Add Instagram link','organic-market'),
		'section'	=> 'organic_market_social_icons',
		'setting'	=> 'organic_market_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('organic_market_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('organic_market_youtube_url',array(
		'label'	=> __('Add You Tube link','organic-market'),
		'section'	=> 'organic_market_social_icons',
		'setting'	=> 'organic_market_youtube_url',
		'type'	=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'organic_market_slider' , array(
    	'title'      => __( 'Slider Settings', 'organic-market' ),
		// 'priority'   => null,
		'panel' => 'organic_market_panel_id'
	) );

	$wp_customize->add_setting('organic_market_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','organic-market'),
       'section' => 'organic_market_slider'
    ));

   $wp_customize->add_setting('organic_market_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','organic-market'),
       'section' => 'organic_market_slider'
    ));

   $wp_customize->add_setting('organic_market_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','organic-market'),
       'section' => 'organic_market_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

	$wp_customize->add_setting( 'organic_market_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'organic_market_sanitize_dropdown_pages'
		) );
	$wp_customize->add_control( 'organic_market_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'organic-market' ),
			'description'	=> __('Size of image should be 1500 x 600','organic-market'),
			'section'  => 'organic_market_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('organic_market_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','organic-market'),
		'description'    => __('This option will add colors over the slider.','organic-market'),
       'section' => 'organic_market_slider'
   ));

   $wp_customize->add_setting('organic_market_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'organic_market_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'organic-market'),
		'section'  => 'organic_market_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','organic-market'),
		'settings' => 'organic_market_slider_image_overlay_color',
	)));

	//content layout
   $wp_customize->add_setting('organic_market_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','organic-market'),
        'section' => 'organic_market_slider',
        'choices' => array(
            'Center' => __('Center ','organic-market'),
            'Left' => __('Left','organic-market'),
            'Right' => __('Right','organic-market'),
        ),
	) );

   //Slider excerpt
	$wp_customize->add_setting( 'organic_market_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	) );
	$wp_customize->add_control( 'organic_market_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','organic-market' ),
		'section'     => 'organic_market_slider',
		'type'        => 'number',
		'settings'    => 'organic_market_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('organic_market_slider_image_opacity',array(
      'default'              => 0.5,
      'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control( 'organic_market_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','organic-market' ),
	'section'     => 'organic_market_slider',
	'type'        => 'select',
	'settings'    => 'organic_market_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','organic-market'),
		'0.1' =>  esc_attr('0.1','organic-market'),
		'0.2' =>  esc_attr('0.2','organic-market'),
		'0.3' =>  esc_attr('0.3','organic-market'),
		'0.4' =>  esc_attr('0.4','organic-market'),
		'0.5' =>  esc_attr('0.5','organic-market'),
		'0.6' =>  esc_attr('0.6','organic-market'),
		'0.7' =>  esc_attr('0.7','organic-market'),
		'0.8' =>  esc_attr('0.8','organic-market'),
		'0.9' =>  esc_attr('0.9','organic-market')
	),
	));

	$wp_customize->add_setting( 'organic_market_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'organic_market_sanitize_number_range',
	));
	$wp_customize->add_control( 'organic_market_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','organic-market' ),
		'section' => 'organic_market_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('organic_market_slider_image_height',array(
		'default'=> __('550','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_slider_image_height',array(
		'label'	=> __('Slider Image Height','organic-market'),
		'section'=> 'organic_market_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_slider_button',array(
		'default'=> __('Read More','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_slider_button',array(
		'label'	=> __('Slider Button','organic-market'),
		'section'=> 'organic_market_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','organic-market'),
		'section'=> 'organic_market_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('organic_market_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','organic-market'),
		'section'=> 'organic_market_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//How it works Section
	$wp_customize->add_section('organic_market_products_section',array(
		'title'	=> __('Products Section','organic-market'),
		'panel' => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_title',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('organic_market_title',array(
	    'label' => __('Section Title','organic-market'),
	    'section' => 'organic_market_products_section',
	    'type'  => 'text'
   	));

	$wp_customize->add_setting('organic_market_section_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('organic_market_section_text',array(
	    'label' => __('Section Text','organic-market'),
	    'section' => 'organic_market_products_section',
	    'type'  => 'text'
   	));

   	$arg =  array( 'numberposts' => 0 );
   	$post_list = get_posts( $arg );
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('organic_market_setting',array(
  		'sanitize_callback' => 'organic_market_sanitize_choices',
	));
	$wp_customize->add_control('organic_market_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','organic-market'),
		'section' => 'organic_market_products_section',
	));

	$wp_customize->add_setting('organic_market_best_seller_title',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('organic_market_best_seller_title',array(
	    'label' => __('Best Seller Title','organic-market'),
	    'section' => 'organic_market_products_section',
	    'type'  => 'text'
   	));

	$wp_customize->add_setting('organic_market_best_seller_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('organic_market_best_seller_text',array(
	    'label' => __('Best Seller Text','organic-market'),
	    'section' => 'organic_market_products_section',
	    'type'  => 'text'
   	));

   	$args = array(
       'type'             => 'product',
        'child_of'        => 0,
        'parent'          => '',
        'orderby'         => 'term_group',
        'order'           => 'ASC',
        'hide_empty'      => false,
        'hierarchical'    => 1,
        'number'          => '',
        'taxonomy'        => 'product_cat',
        'pad_counts'      => false
    );
	$categories = get_categories($args);
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('organic_market_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'organic_market_sanitize_choices',
	));	
	$wp_customize->add_control('organic_market_product_category',array(
		'type'    => 'select',
		'choices' => $cat_post,		
		'label' => __('Select Category to display products','organic-market'),
		'section' => 'organic_market_products_section',
	));

	//404 Page Setting
	$wp_customize->add_section('organic_market_404_page_setting',array(
		'title'	=> __('404 Page','organic-market'),
		'panel' => 'organic_market_panel_id',
	));	

	$wp_customize->add_setting('organic_market_title_404_page',array(
		'default'=> __('404 Not Found','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_title_404_page',array(
		'label'	=> __('404 Page Title','organic-market'),
		'section'=> 'organic_market_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_content_404_page',array(
		'label'	=> __('404 Page Content','organic-market'),
		'section'=> 'organic_market_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_button_404_page',array(
		'default'=> __('Back to Home Page','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_button_404_page',array(
		'label'	=> __('404 Page Button','organic-market'),
		'section'=> 'organic_market_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('organic_market_responsive_setting',array(
		'title'	=> __('Responsive Settings','organic-market'),
		'panel' => 'organic_market_panel_id',
	));

	// taggle button color
  	$wp_customize->add_setting( 'organic_market_taggle_menu_bg_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'organic_market_taggle_menu_bg_color_settings', array(
  		'label' => __('Toggle Menu Bg Color', 'organic-market'),
	   'section' => 'organic_market_responsive_setting',
	   'settings' => 'organic_market_taggle_menu_bg_color_settings',
  	)));

	$wp_customize->add_setting('organic_market_mobile_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_mobile_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

    $wp_customize->add_setting('organic_market_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

    $wp_customize->add_setting('organic_market_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

    $wp_customize->add_setting('organic_market_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

    $wp_customize->add_setting('organic_market_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

    $wp_customize->add_setting('organic_market_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','organic-market'),
       'section' => 'organic_market_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('organic_market_blog_post',array(
		'title'	=> __('Blog Page Settings','organic-market'),
		'panel' => 'organic_market_panel_id',
	));	

	$wp_customize->add_setting('organic_market_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

   $wp_customize->add_setting('organic_market_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

   $wp_customize->add_setting('organic_market_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

   $wp_customize->add_setting('organic_market_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

   //blog post img radius
   $wp_customize->add_setting( 'organic_market_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	) );
	$wp_customize->add_control( 'organic_market_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','organic-market' ),
		'section'     => 'organic_market_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

   $wp_customize->add_setting('organic_market_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

	$wp_customize->add_setting( 'organic_market_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','organic-market' ),
		'section' => 'organic_market_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

   $wp_customize->add_setting('organic_market_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','organic-market'),
        'section' => 'organic_market_blog_post',
        'choices' => array(
            'No Content' => __('No Content','organic-market'),
            'Excerpt Content' => __('Excerpt Content','organic-market'),
            'Full Content' => __('Full Content','organic-market'),
        ),
	) );

   $wp_customize->add_setting( 'organic_market_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	) );
	$wp_customize->add_control( 'organic_market_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','organic-market' ),
		'section'     => 'organic_market_blog_post',
		'type'        => 'number',
		'settings'    => 'organic_market_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'organic_market_post_suffix_option', array(
		'default'   => __('...','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'organic_market_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','organic-market' ),
		'section'     => 'organic_market_blog_post',
		'type'        => 'text',
		'settings'    => 'organic_market_post_suffix_option',
	) );

	$wp_customize->add_setting('organic_market_button_text',array(
		'default'=> __('READ MORE','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_button_text',array(
		'label'	=> __('Add Button Text','organic-market'),
		'section'=> 'organic_market_blog_post',
		'type'=> 'text'
	));

    $wp_customize->add_setting( 'organic_market_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'organic_market_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','organic-market' ),
		'input_attrs' => array(
      'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'organic-market' ),
        ),
		'section'     => 'organic_market_blog_post',
		'type'        => 'text',
		'settings'    => 'organic_market_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('organic_market_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','organic-market'),
        'section' => 'organic_market_blog_post',
        'choices' => array(
            'In Box' => __('In Box','organic-market'),
            'Without Box' => __('Without Box','organic-market'),
        ),
	) );

	$wp_customize->add_setting('organic_market_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   $wp_customize->add_control('organic_market_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','organic-market'),
       'section' => 'organic_market_blog_post'
    ));

	//Single Post Settings
	$wp_customize->add_section('organic_market_single_post',array(
		'title'	=> __('Single Post Settings','organic-market'),
		'panel' => 'organic_market_panel_id',
	));	

	$wp_customize->add_setting('organic_market_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    $wp_customize->add_setting('organic_market_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    $wp_customize->add_setting('organic_market_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    $wp_customize->add_setting('organic_market_single_post_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_single_post_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Time','organic-market'),
       'section' => 'organic_market_single_post'
    ));

	$wp_customize->add_setting( 'organic_market_single_post_breadcrumb',array(
		'default' => true,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
    $wp_customize->add_control('organic_market_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','organic-market' ),
        'section' => 'organic_market_single_post'
    ));

   	$wp_customize->add_setting('organic_market_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   	$wp_customize->add_control('organic_market_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','organic-market'),
       'section' => 'organic_market_single_post'
    ));

   	$wp_customize->add_setting('organic_market_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   	$wp_customize->add_control('organic_market_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','organic-market'),
       'section' => 'organic_market_single_post'
    ));
   	$wp_customize->add_setting('organic_market_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
   	$wp_customize->add_control('organic_market_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','organic-market'),
       'section' => 'organic_market_single_post'
    ));

   	$wp_customize->add_setting( 'organic_market_show_related_post',array(
		   'default' => true,
      	'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('organic_market_show_related_post',array(
    	  'type' => 'checkbox',
        'label' => __( 'Related Post','organic-market' ),
        'section' => 'organic_market_single_post'
    ));

   	$wp_customize->add_setting( 'organic_market_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
	) );
	$wp_customize->add_control('organic_market_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','organic-market'),
		'section' => 'organic_market_single_post'
	));

	$wp_customize->add_setting('organic_market_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    $wp_customize->add_setting('organic_market_title_comment_form',array(
       'default' => __('Leave a Reply','organic-market'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('organic_market_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    $wp_customize->add_setting('organic_market_comment_form_button_content',array(
       'default' => __('Post Comment','organic-market'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('organic_market_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','organic-market'),
       'section' => 'organic_market_single_post'
    ));

    //Comment Textarea Width
    $wp_customize->add_setting( 'organic_market_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'organic_market_comment_width', array(
		'label'  => __('Comment Textarea Width','organic-market'),
		'section'  => 'organic_market_single_post',
		'description' => __('Measurement is in %.','organic-market'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
    ));

    $wp_customize->add_setting( 'organic_market_single_post_meta_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'organic_market_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','organic-market' ),
		'section'     => 'organic_market_single_post',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','organic-market'),
		'type'        => 'text',
		'settings'    => 'organic_market_single_post_meta_seperator',
	) );

   	$wp_customize->add_setting('organic_market_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','organic-market'),
        'section' => 'organic_market_single_post',
        'choices' => array(
            'categories' => __('Categories','organic-market'),
            'tags' => __('Tags','organic-market'),
        ),
	) );

	$wp_customize->add_setting('organic_market_related_post_title',array(
		'default'=> __('Related Posts','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_related_post_title',array(
		'label'	=> __('Related Post Title','organic-market'),
		'section'=> 'organic_market_single_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('organic_market_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_related_posts_number',array(
		'label'	=> __('Related Post Number','organic-market'),
		'section'=> 'organic_market_single_post',
		'type'=> 'number',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('organic_market_noresult_found',array(
		'title'	=> __('No Result Found','organic-market'),
		'panel' => 'organic_market_panel_id',
	));	

	$wp_customize->add_setting('organic_market_nosearch_found_title',array(
		'default'=> __('Nothing Found','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','organic-market'),
		'section'=> 'organic_market_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','organic-market'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_market_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','organic-market'),
		'section'=> 'organic_market_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('organic_market_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
    ));
    $wp_customize->add_control('organic_market_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','organic-market'),
       'section' => 'organic_market_noresult_found'
    ));

	//Footer
	$wp_customize->add_section('organic_market_footer_section', array(
		'title'       => __('Footer Text', 'organic-market'),
		'priority'    => null,
		'panel'       => 'organic_market_panel_id',
	));

	$wp_customize->add_setting('organic_market_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'organic_market_sanitize_choices',
    ));
    $wp_customize->add_control('organic_market_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'organic-market'),
        'section'     => 'organic_market_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'organic-market'),
        'choices' => array(
            '1'     => __('One', 'organic-market'),
            '2'     => __('Two', 'organic-market'),
            '3'     => __('Three', 'organic-market'),
            '4'     => __('Four', 'organic-market')
        ),
    ));

    $wp_customize->add_setting('organic_market_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'organic_market_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'organic-market'),
		'section'  => 'organic_market_footer_section',
	)));

	$wp_customize->add_setting('organic_market_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'organic_market_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','organic-market'),
        'section' => 'organic_market_footer_section'
	)));

	$wp_customize->add_setting('organic_market_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('organic_market_footer_copy', array(
		'label'   => __('Copyright Text', 'organic-market'),
		'section' => 'organic_market_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('organic_market_copyright_bg_color_settings', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'organic_market_copyright_bg_color_settings', array(
		'label'    => __('Copyright Background Color', 'organic-market'),
		'section'  => 'organic_market_footer_section',
	)));

	$wp_customize->add_setting('organic_market_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','organic-market'),
        'section' => 'organic_market_footer_section',
        'choices' => array(
            'left' => __('Left','organic-market'),
            'right' => __('Right','organic-market'),
            'center' => __('Center','organic-market'),
        ),
	) );

	$wp_customize->add_setting('organic_market_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','organic-market' ),
		'section'=> 'organic_market_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('organic_market_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_copyright_padding',array(
		'label'	=> __('Copyright Padding','organic-market'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'organic_market_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('organic_market_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'organic_market_sanitize_checkbox'
	));
	$wp_customize->add_control('organic_market_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','organic-market'),
      	'section' => 'organic_market_footer_section',
	));

	$wp_customize->add_setting('organic_market_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'organic_market_sanitize_choices'
	));
	$wp_customize->add_control('organic_market_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','organic-market'),
        'section' => 'organic_market_footer_section',
        'choices' => array(
            'Left' => __('Left','organic-market'),
            'Right' => __('Right','organic-market'),
            'Center' => __('Center','organic-market'),
        ),
	) );

	$wp_customize->add_setting('organic_market_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'organic_market_sanitize_float',
	));
	$wp_customize->add_control('organic_market_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','organic-market'),
		'section'=> 'organic_market_footer_section',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
}
add_action('customize_register', 'organic_market_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Organic_Market_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conorganic_market_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Organic_Market_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Organic_Market_Customize_Section_Pro(
				$manager,
				'organic_market_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Organic Market Pro ', 'organic-market'),
					'pro_text' => esc_html__('Go Pro', 'organic-market'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/organic-market-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('organic-market-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('organic-market-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Organic_Market_Customize::get_instance();