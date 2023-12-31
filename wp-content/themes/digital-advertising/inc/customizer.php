<?php
/**
 * Digital Advertising Theme Customizer
 *
 * @package Digital Advertising
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function digital_advertising_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'digital_advertising_customize_partial_blogname',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'digital_advertising_customize_partial_blogdescription',
		)
	);

	//add home page setting pannel
	$wp_customize->add_panel( 'digital_advertising_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'digital-advertising' ),
	) );

    $digital_advertising_font_array= array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Color / Font Pallete
	$wp_customize->add_section( 'digital_advertising_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'digital-advertising' ),
		'priority'   => 30,
		'panel' => 'digital_advertising_panel_id'
	) );
	
    // This is Body Color setting
	$wp_customize->add_setting( 'digital_advertising_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_body_color', array(
		'label' => __('Body Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('digital_advertising_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
		'digital_advertising_body_font_family', array(
		'section'  => 'digital_advertising_typography',
		'label'    => __( 'Body Fonts','digital-advertising'),
		'type'     => 'select',
		'choices'  => $digital_advertising_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('digital_advertising_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_body_font_size',array(
		'label'	=> __('Body Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_body_font_size',
		'type'	=> 'text'
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'digital_advertising_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_paragraph_color', array(
		'label' => __('Paragraph Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_paragraph_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'Paragraph Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	$wp_customize->add_setting('digital_advertising_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'digital_advertising_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_atag_color', array(
		'label' => __('"a" Tag Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_atag_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( '"a" Tag Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'digital_advertising_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_li_color', array(
		'label' => __('"li" Tag Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_li_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( '"li" Tag Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h1_color', array(
		'label' => __('h1 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h1_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h1 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('digital_advertising_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h1_font_size',array(
		'label'	=> __('h1 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h2_color', array(
		'label' => __('h2 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h2_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h2 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('digital_advertising_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h2_font_size',array(
		'label'	=> __('h2 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h3_color', array(
		'label' => __('h3 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h3_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h3 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('digital_advertising_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h3_font_size',array(
		'label'	=> __('h3 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h4_color', array(
		'label' => __('h4 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h4_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h4 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('digital_advertising_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h4_font_size',array(
		'label'	=> __('h4 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h5_color', array(
		'label' => __('h5 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h5_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h5 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('digital_advertising_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h5_font_size',array(
		'label'	=> __('h5 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'digital_advertising_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_h6_color', array(
		'label' => __('h6 Color', 'digital-advertising'),
		'section' => 'digital_advertising_typography',
		'settings' => 'digital_advertising_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('digital_advertising_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digital_advertising_h6_font_family', array(
	    'section'  => 'digital_advertising_typography',
	    'label'    => __( 'h6 Fonts','digital-advertising'),
	    'type'     => 'select',
	    'choices'  => $digital_advertising_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('digital_advertising_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digital_advertising_h6_font_size',array(
		'label'	=> __('h6 Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_typography',
		'setting'	=> 'digital_advertising_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'digital_advertising_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'digital-advertising' ),
		'priority'   => 30,
		'panel' => 'digital_advertising_panel_id'
	) );

	$wp_customize->add_setting('digital_advertising_width_options',array(
        'default' => 'Full Layout',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_width_options',array(
        'type' => 'select',
        'label' => __('Select Site Layout','digital-advertising'),
        'section' => 'digital_advertising_left_right',
        'choices' => array(
            'Full Layout' => __('Full Layout','digital-advertising'),
            'Contained Layout' => __('Contained Layout','digital-advertising'),
            'Boxed Layout' => __('Boxed Layout','digital-advertising'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('digital_advertising_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	) );
	$wp_customize->add_control('digital_advertising_theme_options', array(
        'type' => 'radio',
        'label' => __('Sidebar Layout','digital-advertising'),
        'section' => 'digital_advertising_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','digital-advertising'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising'),
            'One Column' => __('One Column','digital-advertising'),
            'Three Columns' => __('Three Columns','digital-advertising'),
            'Four Columns' => __('Four Columns','digital-advertising'),
            'Grid Layout' => __('Grid Layout','digital-advertising')
        ),
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('digital_advertising_single_post_sidebar',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	) );
	$wp_customize->add_control('digital_advertising_single_post_sidebar', array(
        'type' => 'radio',
        'label' => __('Single Post Sidebar Layout','digital-advertising'),
        'section' => 'digital_advertising_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','digital-advertising'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising'),
            'One Column' => __('One Column','digital-advertising'),
        ),
    ));

    $wp_customize->add_setting( 'digital_advertising_single_page_breadcrumb',array(
		'default' => true,
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','digital-advertising' ),
        'section' => 'digital_advertising_left_right'
    ));

    //Topbar
	$wp_customize->add_section('digital_advertising_topbar',array(
		'title'	=> __('Topbar','digital-advertising'),
		'priority'	=> null,
		'panel' => 'digital_advertising_panel_id',
	));

	$wp_customize->add_setting( 'digital_advertising_show_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_show_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show/Hide Topbar','digital-advertising' ),
        'section' => 'digital_advertising_topbar'
    ));

    $wp_customize->add_setting('digital_advertising_topbar_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('digital_advertising_topbar_email',array(
		'label'	=> __('Add Email Address','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('digital_advertising_topbar_phoneno',array(
		'default'	=> '',
		'sanitize_callback'	=> 'digital_advertising_sanitize_phone_number'
	));	
	$wp_customize->add_control('digital_advertising_topbar_phoneno',array(
		'label'	=> __('Add Phone Number','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('digital_advertising_topbar_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('digital_advertising_topbar_location',array(
		'label'	=> __('Add Location','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('digital_advertising_facebook_url',array(
		'label'	=> __('Add Facebook URL','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('digital_advertising_twitter_url',array(
		'label'	=> __('Add Twitter URL','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('digital_advertising_linkedin_url',array(
		'label'	=> __('Add Linkedin URL','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('digital_advertising_instagram_url',array(
		'label'	=> __('Add Instagram URL','digital-advertising'),
		'section' => 'digital_advertising_topbar',
		'type'	=> 'text'
	));

	//Header
	$wp_customize->add_section('digital_advertising_header',array(
		'title'	=> __('Header','digital-advertising'),
		'priority'	=> null,
		'panel' => 'digital_advertising_panel_id',
	));

	//Sticky Header
	$wp_customize->add_setting( 'digital_advertising_sticky_header',array(
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','digital-advertising' ),
        'section' => 'digital_advertising_header'
    ));

    $wp_customize->add_setting('digital_advertising_sticky_header_padding', array(
		'default'=> '',
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_sticky_header_padding', array(
		'label'	=> __('Sticky Header Padding','digital-advertising'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 50,
        ),
		'section'=> 'digital_advertising_header',
		'type'=> 'number',
	));

	$wp_customize->add_setting('digital_advertising_quote_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('digital_advertising_quote_btn_text',array(
		'label'	=> __('Add Quote Button Text','digital-advertising'),
		'section' => 'digital_advertising_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_quote_btn_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('digital_advertising_quote_btn_url',array(
		'label'	=> __('Add Quote Button URL','digital-advertising'),
		'section' => 'digital_advertising_header',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('digital_advertising_navigation_case',array(
        'default' => 'capitalize',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_navigation_case',array(
        'type' => 'select',
        'label' => __('Navigation Case','digital-advertising'),
        'section' => 'digital_advertising_header',
        'choices' => array(
            'uppercase' => __('Uppercase','digital-advertising'),
            'capitalize' => __('Capitalize','digital-advertising'),
        ),
	) );

	$wp_customize->add_setting( 'digital_advertising_nav_font_size', array(
		'default'           => 15,
		'sanitize_callback' => 'digital_advertising_sanitize_float',
	) );
	$wp_customize->add_control( 'digital_advertising_nav_font_size', array(
		'label' => __( 'Navigation Font Size','digital-advertising' ),
		'section'     => 'digital_advertising_header',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	$wp_customize->add_setting('digital_advertising_font_weight_menu_option',array(
        'default' => '500',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
    ));
    $wp_customize->add_control('digital_advertising_font_weight_menu_option',array(
        'type' => 'select',
        'label' => __('Navigation Font Weight','digital-advertising'),
        'section' => 'digital_advertising_header',
        'choices' => array(
            '100' => __('100','digital-advertising'),
            '200' => __('200','digital-advertising'),
            '300' => __('300','digital-advertising'),
            '400' => __('400','digital-advertising'),
            '500' => __('500','digital-advertising'),
            '600' => __('600','digital-advertising'),
            '700' => __('700','digital-advertising'),
            '800' => __('800','digital-advertising'),
            '900' => __('900','digital-advertising'),
        ),
	) );

	// Preloader
	$wp_customize->add_setting( 'digital_advertising_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','digital-advertising' ),
        'section' => 'digital_advertising_header'
    ));

    $wp_customize->add_setting('digital_advertising_preloader_type',array(
        'default'   => 'center-square',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control( 'digital_advertising_preloader_type', array(
		'label' => __( 'Preloader Type','digital-advertising' ),
		'section' => 'digital_advertising_header',
		'type'  => 'select',
		'settings' => 'digital_advertising_preloader_type',
		'choices' => array(
		    'center-square' => __('Center Square','digital-advertising'),
		    'chasing-square' => __('Chasing Square','digital-advertising'),
	    ),
	));

	$wp_customize->add_setting( 'digital_advertising_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_preloader_color', array(
  		'label' => 'Preloader Color',
	    'section' => 'digital_advertising_header',
	    'settings' => 'digital_advertising_preloader_color',
  	)));

  	$wp_customize->add_setting( 'digital_advertising_preloader_bg_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_preloader_bg_color', array(
  		'label' => 'Preloader Background Color',
	    'section' => 'digital_advertising_header',
	    'settings' => 'digital_advertising_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('digital_advertising_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digital_advertising_menu_color', array(
		'label'    => __('Menu Color', 'digital-advertising'),
		'section'  => 'digital_advertising_header',
		'settings' => 'digital_advertising_menu_color',
	)));

	$wp_customize->add_setting('digital_advertising_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digital_advertising_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'digital-advertising'),
		'section'  => 'digital_advertising_header',
		'settings' => 'digital_advertising_menu_hover_color',
	)));

	$wp_customize->add_setting('digital_advertising_submenu_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digital_advertising_submenu_menu_color', array(
		'label'    => __('Submenu Color', 'digital-advertising'),
		'section'  => 'digital_advertising_header',
		'settings' => 'digital_advertising_submenu_menu_color',
	)));

	//home page slider
	$wp_customize->add_section( 'digital_advertising_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'digital-advertising' ),
		'priority'   => null,
		'panel' => 'digital_advertising_panel_id'
	) );

	$wp_customize->selective_refresh->add_partial(
		'digital_advertising_slider_hide_show',
		array(
			'selector'        => '#slider .inner_carousel h1',
			'render_callback' => 'digital_advertising_customize_partial_digital_advertising_slider_hide_show',
		)
	);

	$wp_customize->add_setting('digital_advertising_slider_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_slider_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider','digital-advertising'),
	   'description' => __('Image size (1080px x 600px)','digital-advertising'),
	   'section' => 'digital_advertising_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'digital_advertising_slider_page' . $count, array(
			'default'  => '',
			'sanitize_callback' => 'digital_advertising_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'digital_advertising_slider_page' . $count, array(
			'label' => __( 'Select Slide Image Page', 'digital-advertising' ),
			'section' => 'digital_advertising_slidersettings',
			'type'    => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('digital_advertising_slider_title',array(
       'default' => 'true',
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_slider_title',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Title','digital-advertising'),
	   'section' => 'digital_advertising_slidersettings',
	));

	$wp_customize->add_setting('digital_advertising_slider_content',array(
       'default' => 'true',
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_slider_content',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Content','digital-advertising'),
	   'section' => 'digital_advertising_slidersettings',
	));

	//content layout
	$wp_customize->add_setting('digital_advertising_slider_content_alignment',array(
    	'default' => 'Left',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','digital-advertising'),
        'section' => 'digital_advertising_slidersettings',
        'choices' => array(
            'Center' => __('Center','digital-advertising'),
            'Left' => __('Left','digital-advertising'),
            'Right' => __('Right','digital-advertising'),
        ),
	) );

	//Slider excerpt
	$wp_customize->add_setting( 'digital_advertising_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'digital_advertising_sanitize_float',
	) );
	$wp_customize->add_control( 'digital_advertising_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','digital-advertising' ),
		'section'     => 'digital_advertising_slidersettings',
		'type'        => 'number',
		'settings'    => 'digital_advertising_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//About Section
	$wp_customize->add_section('digital_advertising_about_section',array(
		'title'	=> __('About Section','digital-advertising'),
		'panel' => 'digital_advertising_panel_id',
	));

	$wp_customize->add_setting('digital_advertising_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('digital_advertising_section_title',array(
		'label'	=> esc_html__('Section Title','digital-advertising'),
		'section'=> 'digital_advertising_about_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'digital_advertising_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'digital_advertising_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'digital_advertising_about_page', array(
		'label'   => __( 'Select About Page', 'digital-advertising' ),
		'section' => 'digital_advertising_about_section',
		'type'    => 'dropdown-pages'
	) );

	$wp_customize->add_setting('digital_advertising_noof_list',array(
		'default' => 2,
		'sanitize_callback' => 'digital_advertising_sanitize_float',
	));
	$wp_customize->add_control('digital_advertising_noof_list',array(
		'type'    => 'number',
		'label' => __('No. of list','digital-advertising'),
		'section' => 'digital_advertising_about_section',
	));

	$digital_advertising_noof_list = get_theme_mod('digital_advertising_noof_list',2);
	for ( $count = 1; $count <= $digital_advertising_noof_list; $count++ ) {
		$wp_customize->add_setting( 'digital_advertising_about_list_text' . $count, array(
			'default'  => '',
			'sanitize_callback' => 'sanitize_text_field'
		) );
		$wp_customize->add_control( 'digital_advertising_about_list_text' . $count, array(
			'label' => __( 'About list text', 'digital-advertising' ).$count,
			'section' => 'digital_advertising_about_section',
			'type'    => 'text'
		) );
	}

	//Blog Post
	$wp_customize->add_section('digital_advertising_blog_post',array(
		'title'	=> __('Post Settings','digital-advertising'),
		'panel' => 'digital_advertising_panel_id',
	));	

	$wp_customize->add_setting('digital_advertising_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Date','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting('digital_advertising_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Author','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting('digital_advertising_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Comments','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting('digital_advertising_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Time','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting('digital_advertising_feature_image_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_feature_image_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured Image','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting( 'digital_advertising_featured_image_border_radius', array(
		'default' => 0,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control( 'digital_advertising_featured_image_border_radius', array(
		'label' => __( 'Featured image border radius','digital-advertising' ),
		'section' => 'digital_advertising_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

    $wp_customize->add_setting( 'digital_advertising_featured_image_box_shadow', array(
		'default' => 0,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control( 'digital_advertising_featured_image_box_shadow', array(
		'label' => __( 'Featured image box shadow','digital-advertising' ),
		'section' => 'digital_advertising_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

    $wp_customize->add_setting('digital_advertising_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_post_content',array(
        'type' => 'radio',
        'label' => __('Post Content Type','digital-advertising'),
        'section' => 'digital_advertising_blog_post',
        'choices' => array(
            'No Content' => __('No Content','digital-advertising'),
            'Full Content' => __('Full Content','digital-advertising'),
            'Excerpt Content' => __('Excerpt Content','digital-advertising'),
        ),
	) );

    $wp_customize->add_setting( 'digital_advertising_post_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control( 'digital_advertising_post_excerpt_length', array(
		'label' => esc_html__( 'Post Excerpt Length','digital-advertising' ),
		'section'  => 'digital_advertising_blog_post',
		'type'  => 'number',
		'settings' => 'digital_advertising_post_excerpt_length',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'digital_advertising_button_excerpt_suffix', array(
		'default'   => __('[...]','digital-advertising' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'digital_advertising_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Suffix','digital-advertising' ),
		'section'     => 'digital_advertising_blog_post',
		'type'        => 'text',
		'settings' => 'digital_advertising_button_excerpt_suffix'
	) );

	$wp_customize->add_setting( 'digital_advertising_post_button_text', array(
		'default'   => esc_html__('Read More','digital-advertising' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'digital_advertising_post_button_text', array(
		'label' => esc_html__('Post Button Text','digital-advertising' ),
		'section'     => 'digital_advertising_blog_post',
		'type'        => 'text',
		'settings'    => 'digital_advertising_post_button_text'
	) );

	$wp_customize->add_setting('digital_advertising_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_top_button_padding',array(
		'label'	=> __('Top Bottom Button Padding','digital-advertising'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 50,
        ),
		'section'=> 'digital_advertising_blog_post',
		'type'=> 'number',
	));

	$wp_customize->add_setting('digital_advertising_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_left_button_padding',array(
		'label'	=> __('Left Right Button Padding','digital-advertising'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'digital_advertising_blog_post',
		'type'=> 'number',
	));

	$wp_customize->add_setting( 'digital_advertising_button_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control('digital_advertising_button_border_radius', array(
        'label'  => __('Button Border Radius','digital-advertising'),
        'type'=> 'number',
        'section'  => 'digital_advertising_blog_post',
        'input_attrs' => array(
        	'step' => 1,
            'min' => 0,
            'max' => 50,
        ),
    ));

    $wp_customize->add_setting( 'digital_advertising_post_blocks', array(
        'default'			=> 'Without box',
        'sanitize_callback'	=> 'digital_advertising_sanitize_choices'
    ));
    $wp_customize->add_control( 'digital_advertising_post_blocks', array(
        'section' => 'digital_advertising_blog_post',
        'type' => 'select',
        'label' => __( 'Post blocks', 'digital-advertising' ),
        'choices' => array(
            'Within box'  => __( 'Within box', 'digital-advertising' ),
            'Without box' => __( 'Without box', 'digital-advertising' ),
    )));

    $wp_customize->add_setting('digital_advertising_navigation_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_navigation_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Navigation','digital-advertising'),
       'section' => 'digital_advertising_blog_post'
    ));

    $wp_customize->add_setting( 'digital_advertising_post_navigation_type', array(
        'default'			=> 'numbers',
        'sanitize_callback'	=> 'digital_advertising_sanitize_choices'
    ));
    $wp_customize->add_control( 'digital_advertising_post_navigation_type', array(
        'section' => 'digital_advertising_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Type', 'digital-advertising' ),
        'choices' => array(
            'numbers'  => __( 'Number', 'digital-advertising' ),
            'next-prev' => __( 'Next/Prev Button', 'digital-advertising' ),
    )));

    $wp_customize->add_setting( 'digital_advertising_post_navigation_position', array(
        'default'			=> 'bottom',
        'sanitize_callback'	=> 'digital_advertising_sanitize_choices'
    ));
    $wp_customize->add_control( 'digital_advertising_post_navigation_position', array(
        'section' => 'digital_advertising_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Position', 'digital-advertising' ),
        'choices' => array(
            'top'  => __( 'Top', 'digital-advertising' ),
            'bottom' => __( 'Bottom', 'digital-advertising' ),
            'both' => __( 'Both', 'digital-advertising' ),
    )));

    //Single Post Settings
	$wp_customize->add_section('digital_advertising_single_post',array(
		'title'	=> __('Single Post Settings','digital-advertising'),
		'panel' => 'digital_advertising_panel_id',
	));	

	$wp_customize->add_setting('digital_advertising_feature_image',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_feature_image',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Feature Image','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_tags',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Tags','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_comment',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Comment','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

     $wp_customize->add_setting('digital_advertising_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
 	));
 	$wp_customize->add_control('digital_advertising_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','digital-advertising'),
		'section' => 'digital_advertising_single_post'
	));

	 $wp_customize->add_setting( 'digital_advertising_single_post_breadcrumb',array(
		'default' => true,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','digital-advertising' ),
        'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting( 'digital_advertising_comment_width', array(
		'default' => 100,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control( 'digital_advertising_comment_width', array(
		'label' => __( 'Comment Textarea Width', 'digital-advertising'),
		'section' => 'digital_advertising_single_post',
		'type' => 'number',
		'settings' => 'digital_advertising_comment_width',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

    $wp_customize->add_setting('digital_advertising_comment_title',array(
       'default' => __('Leave a Reply','digital-advertising'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_comment_submit_text',array(
       'default' => __('Post Comment','digital-advertising'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Button Text','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related Posts','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting('digital_advertising_related_posts_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','digital-advertising'),
       'section' => 'digital_advertising_single_post'
    ));

    $wp_customize->add_setting( 'digital_advertising_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	) );
	$wp_customize->add_control( 'digital_advertising_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','digital-advertising' ),
		'section' => 'digital_advertising_single_post',
		'type' => 'number',
		'settings' => 'digital_advertising_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'digital_advertising_post_order', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'digital_advertising_sanitize_choices'
    ));
    $wp_customize->add_control( 'digital_advertising_post_order', array(
        'section' => 'digital_advertising_single_post',
        'type' => 'radio',
        'label' => __( 'Related Posts Order By', 'digital-advertising' ),
        'choices' => array(
            'categories' => __('Categories', 'digital-advertising'),
            'tags' => __( 'Tags', 'digital-advertising' ),
    )));

    //404 page settings
	$wp_customize->add_section('digital_advertising_404_page',array(
		'title'	=> __('404 & No Result Page Settings','digital-advertising'),
		'priority'	=> null,
		'panel' => 'digital_advertising_panel_id',
	));

	$wp_customize->add_setting('digital_advertising_404_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_404_title',array(
       'type' => 'text',
       'label' => __('404 Page Title','digital-advertising'),
       'section' => 'digital_advertising_404_page'
    ));

    $wp_customize->add_setting('digital_advertising_404_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_404_text',array(
       'type' => 'text',
       'label' => __('404 Page Text','digital-advertising'),
       'section' => 'digital_advertising_404_page'
    ));

    $wp_customize->add_setting('digital_advertising_404_button_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_404_button_text',array(
       'type' => 'text',
       'label' => __('404 Page Button Text','digital-advertising'),
       'section' => 'digital_advertising_404_page'
    ));

    $wp_customize->add_setting('digital_advertising_no_result_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_no_result_title',array(
       'type' => 'text',
       'label' => __('No Result Page Title','digital-advertising'),
       'section' => 'digital_advertising_404_page'
    ));

    $wp_customize->add_setting('digital_advertising_no_result_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('digital_advertising_no_result_text',array(
       'type' => 'text',
       'label' => __('No Result Page Text','digital-advertising'),
       'section' => 'digital_advertising_404_page'
    ));

    $wp_customize->add_setting('digital_advertising_show_search_form',array(
        'default' => true,
        'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_show_search_form',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Search Form','digital-advertising'),
      	'section' => 'digital_advertising_404_page',
	));

	//Footer
	$wp_customize->add_section('digital_advertising_footer_section',array(
		'title'	=> __('Footer Section','digital-advertising'),
		'priority'	=> null,
		'panel' => 'digital_advertising_panel_id',
	));

	$wp_customize->selective_refresh->add_partial(
		'digital_advertising_show_back_to_top',
		array(
			'selector'        => '.scrollup',
			'render_callback' => 'digital_advertising_customize_partial_digital_advertising_show_back_to_top',
		)
	);

	$wp_customize->add_setting('digital_advertising_show_back_to_top',array(
        'default' => 'true',
        'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Back to Top Button','digital-advertising'),
      	'section' => 'digital_advertising_footer_section',
	));

	$wp_customize->add_setting('digital_advertising_back_to_top_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new digital_advertising_Icon_Changer(
        $wp_customize, 'digital_advertising_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','digital-advertising'),
		'section'	=> 'digital_advertising_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('digital_advertising_back_to_top_text',array(
		'default'	=> __('Back to Top','digital-advertising'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('digital_advertising_back_to_top_text',array(
		'label'	=> __('Back to Top Button Text','digital-advertising'),
		'section'	=> 'digital_advertising_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('digital_advertising_back_to_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_back_to_top_alignment',array(
        'type' => 'select',
        'label' => __('Back to Top Button Alignment','digital-advertising'),
        'section' => 'digital_advertising_footer_section',
        'choices' => array(
            'Left' => __('Left','digital-advertising'),
            'Right' => __('Right','digital-advertising'),
            'Center' => __('Center','digital-advertising'),
        ),
	) );

	$wp_customize->add_setting('digital_advertising_footer_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digital_advertising_footer_background_color', array(
		'label'    => __('Footer Background Color', 'digital-advertising'),
		'section'  => 'digital_advertising_footer_section',
	)));

	$wp_customize->add_setting('digital_advertising_footer_background_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'digital_advertising_footer_background_img',array(
        'label' => __('Footer Background Image','digital-advertising'),
        'section' => 'digital_advertising_footer_section'
	)));

	$wp_customize->add_setting('digital_advertising_footer_widget_layout',array(
        'default'           => '4',
        'sanitize_callback' => 'digital_advertising_sanitize_choices',
    ));
    $wp_customize->add_control('digital_advertising_footer_widget_layout',array(
        'type' => 'radio',
        'label'  => __('Footer widget layout', 'digital-advertising'),
        'section'     => 'digital_advertising_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'digital-advertising'),
        'choices' => array(
            '1'     => __('One', 'digital-advertising'),
            '2'     => __('Two', 'digital-advertising'),
            '3'     => __('Three', 'digital-advertising'),
            '4'     => __('Four', 'digital-advertising')
        ),
    ));

    $wp_customize->add_setting('digital_advertising_copyright_alignment',array(
        'default' => 'Center',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_copyright_alignment',array(
        'type' => 'select',
        'label' => __('Copyright Alignment','digital-advertising'),
        'section' => 'digital_advertising_footer_section',
        'choices' => array(
            'Left' => __('Left','digital-advertising'),
            'Right' => __('Right','digital-advertising'),
            'Center' => __('Center','digital-advertising'),
        ),
	) );

	$wp_customize->add_setting('digital_advertising_copyright_fontsize',array(
		'default'	=> 16,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float',
	));	
	$wp_customize->add_control('digital_advertising_copyright_fontsize',array(
		'label'	=> __('Copyright Font Size','digital-advertising'),
		'section'	=> 'digital_advertising_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('digital_advertising_copyright_top_bottom_padding',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'digital_advertising_sanitize_float',
	));	
	$wp_customize->add_control('digital_advertising_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top Bottom Padding','digital-advertising'),
		'section'	=> 'digital_advertising_footer_section',
		'type'		=> 'number'
	));

    $wp_customize->selective_refresh->add_partial(
		'digital_advertising_footer_copy',
		array(
			'selector'        => '#footer p',
			'render_callback' => 'digital_advertising_customize_partial_digital_advertising_footer_copy',
		)
	);
	
	$wp_customize->add_setting('digital_advertising_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('digital_advertising_footer_copy',array(
		'label'	=> __('Copyright Text','digital-advertising'),
		'section'	=> 'digital_advertising_footer_section',
		'type'		=> 'text'
	));

	//Mobile Media Section
	$wp_customize->add_section( 'digital_advertising_mobile_media_options' , array(
    	'title'      => __( 'Mobile Media Options', 'digital-advertising' ),
		'priority'   => null,
		'panel' => 'digital_advertising_panel_id'
	) );

	$wp_customize->add_setting('digital_advertising_responsive_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new digital_advertising_Icon_Changer(
        $wp_customize, 'digital_advertising_responsive_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','digital-advertising'),
		'section'	=> 'digital_advertising_mobile_media_options',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'digital_advertising_menu_color_setting', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_advertising_menu_color_setting', array(
  		'label' => __('Menu Icon Color Option', 'digital-advertising'),
		'section' => 'digital_advertising_mobile_media_options',
		'settings' => 'digital_advertising_menu_color_setting',
  	)));

	$wp_customize->add_setting('digital_advertising_responsive_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new digital_advertising_Icon_Changer(
        $wp_customize, 'digital_advertising_responsive_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','digital-advertising'),
		'section'	=> 'digital_advertising_mobile_media_options',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('digital_advertising_responsive_show_back_to_top',array(
        'default' => true,
        'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
	));
	$wp_customize->add_control('digital_advertising_responsive_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back to Top Button','digital-advertising'),
      	'section' => 'digital_advertising_mobile_media_options',
	));

	$wp_customize->add_setting( 'digital_advertising_responsive_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_responsive_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','digital-advertising' ),
        'section' => 'digital_advertising_mobile_media_options'
    ));

	//Woocommerce Section
	$wp_customize->add_section( 'digital_advertising_woocommerce_options' , array(
    	'title'      => __( 'Additional WooCommerce Options', 'digital-advertising' ),
		'priority'   => null,
		'panel' => 'digital_advertising_panel_id'
	) );

	// Product Columns
	$wp_customize->add_setting( 'digital_advertising_products_per_row' , array(
		'default'           => '3',
		'sanitize_callback' => 'digital_advertising_sanitize_choices',
	) );

	$wp_customize->add_control('digital_advertising_products_per_row', array(
		'label' => __( 'Product per row', 'digital-advertising' ),
		'section'  => 'digital_advertising_woocommerce_options',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
	) );

	$wp_customize->add_setting('digital_advertising_product_per_page',array(
		'default'	=> '9',
		'sanitize_callback'	=> 'digital_advertising_sanitize_float'
	));	
	$wp_customize->add_control('digital_advertising_product_per_page',array(
		'label'	=> __('Product per page','digital-advertising'),
		'section'	=> 'digital_advertising_woocommerce_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('digital_advertising_shop_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_shop_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page sidebar','digital-advertising'),
       'section' => 'digital_advertising_woocommerce_options',
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('digital_advertising_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'digital_advertising_sanitize_choices',
	));
	$wp_customize->add_control('digital_advertising_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'digital-advertising'),
		'section'        => 'digital_advertising_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'digital-advertising'),
			'Right Sidebar' => __('Right Sidebar', 'digital-advertising'),
		),
	));

	$wp_customize->add_setting( 'digital_advertising_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digital_advertising_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Enable / Disable Single Product Page Sidebar','digital-advertising'),
		'section' => 'digital_advertising_woocommerce_options'
    ));

    // single product page sidebar alignment
    $wp_customize->add_setting('digital_advertising_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'digital_advertising_sanitize_choices',
	));
	$wp_customize->add_control('digital_advertising_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'digital-advertising'),
		'section'        => 'digital_advertising_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'digital-advertising'),
			'Right Sidebar' => __('Right Sidebar', 'digital-advertising'),
		),
	));

	$wp_customize->add_setting('digital_advertising_shop_page_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_shop_page_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page pagination','digital-advertising'),
       'section' => 'digital_advertising_woocommerce_options',
    ));

    $wp_customize->add_setting('digital_advertising_product_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_product_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Product page sidebar','digital-advertising'),
       'section' => 'digital_advertising_woocommerce_options',
    ));

    $wp_customize->add_setting('digital_advertising_related_product',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_related_product',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','digital-advertising'),
       'section' => 'digital_advertising_woocommerce_options',
    ));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_button_padding_top',array(
		'default' => 10,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control( 'digital_advertising_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_button_padding_right',array(
	 	'default' => 20,
	 	'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_button_padding_right',	array(
	 	'label' => esc_html__( 'Button Right Left Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_button_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

    $wp_customize->add_setting('digital_advertising_woocommerce_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'digital_advertising_sanitize_checkbox'
    ));
    $wp_customize->add_control('digital_advertising_woocommerce_product_border',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','digital-advertising'),
       'section' => 'digital_advertising_woocommerce_options',
    ));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_product_padding_top',array(
		'default' => 10,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_product_padding_top', array(
		'label' => esc_html__( 'Product Top Bottom Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_product_padding_right',array(
		'default' => 10,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_product_padding_right', array(
		'label' => esc_html__( 'Product Right Left Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_product_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_product_box_shadow',array(
		'default' => 0,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control( 'digital_advertising_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('digital_advertising_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'digital_advertising_sanitize_choices'
	));
	$wp_customize->add_control('digital_advertising_sale_position',array(
        'type' => 'select',
        'label' => __('Sale badge Position','digital-advertising'),
        'section' => 'digital_advertising_woocommerce_options',
        'choices' => array(
            'left' => __('Left','digital-advertising'),
            'right' => __('Right','digital-advertising'),
        ),
	) );

	$wp_customize->add_setting( 'digital_advertising_woocommerce_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control( 'digital_advertising_woocommerce_sale_top_padding',	array(
		'label' => esc_html__( 'Sale Top Bottom Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_sale_left_padding',array(
	 	'default' => 0,
	 	'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_sale_left_padding',	array(
	 	'label' => esc_html__( 'Sale Right Left Padding','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_woocommerce_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_woocommerce_sale_border_radius',array(
		'label' => esc_html__( 'Sale Border Radius','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digital_advertising_product_sale_font_size',array(
		'default' => '',
		'sanitize_callback' => 'digital_advertising_sanitize_float'
	));
	$wp_customize->add_control('digital_advertising_product_sale_font_size',array(
		'label' => esc_html__( 'Sale Font Size','digital-advertising' ),
		'type' => 'number',
		'section' => 'digital_advertising_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));
}
add_action( 'customize_register', 'digital_advertising_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-width.php' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class digital_advertising_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
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
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );
		
		// Register custom section types.
		$manager->register_section_type( 'digital_advertising_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new digital_advertising_Customize_Section_Pro(
				$manager,
				'digital_advertising_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html(digital_advertising_PRO_NAME),
					'pro_text' => esc_html( 'Go Pro','digital-advertising' ),
					'pro_url'  => esc_url( digital_advertising_PRO_URL ),
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

		wp_enqueue_script( 'digital-advertising-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'digital-advertising-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
digital_advertising_Customize::get_instance();