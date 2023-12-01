<?php
/**
 * Digital Advertising functions and definitions
 *
 * @package Digital Advertising
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Breadcrumb Begin */
function digital_advertising_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'digital_advertising_setup' ) ) :

function digital_advertising_setup() {

	$GLOBALS['content_width'] = apply_filters( 'digital_advertising_content_width', 640 );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('digital-advertising-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'digital-advertising' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
	
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support('responsive-embeds');

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', digital_advertising_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'digital_advertising_activation_notice' );
	}
}
endif;
add_action( 'after_setup_theme', 'digital_advertising_setup' );

// Dashboard Theme Notification
function digital_advertising_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dimdissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'digital-advertising' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Digital Advertising theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'digital-advertising' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=digital_advertising_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'digital-advertising' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function digital_advertising_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'digital-advertising' ),
		'description'   => __( 'Appears on blog page sidebar', 'digital-advertising' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'digital-advertising' ),
		'description'   => __( 'Appears on page sidebar', 'digital-advertising' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'digital-advertising' ),
		'description' => __( 'Appears on page sidebar', 'digital-advertising' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$digital_advertising_widget_areas = get_theme_mod('digital_advertising_footer_widget_layout', '4');
	for ($i=1; $i<=$digital_advertising_widget_areas; $i++) {
		register_sidebar( array(
			'name'        => __( 'Footer Nav ', 'digital-advertising' ) . $i,
			'id'          => 'footer-' . $i,
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	
	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'digital-advertising' ),
		'description'   => __( 'Appears on shop page', 'digital-advertising' ),	
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'digital-advertising' ),
		'description'   => __( 'Appears on shop page', 'digital-advertising' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'digital_advertising_widgets_init' );

/* Theme Font URL */
function digital_advertising_font_url() {
	$font_family = array(
	    'ABeeZee:ital@0;1',
		'Abril+Fatfac',
		'Acme',
		'Anton',
		'Architects+Daughter',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Alfa+Slab+One',
		'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad+Script',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree+Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Catamaran:wght@100;200;300;400;500;600;700;800;900',
		'Cherry+Swash:wght@400;700',
		'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming+Soon',
		'Chewy',
		'Days+One',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka+One',
		'Fjalla+One',
		'Francois+One',
		'Frank+Ruhl+Libre:wght@300;400;500;700;900',
		'Gloria+Hallelujah',
		'Great+Vibes',
		'Handlee',
		'Hammersmith+One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie+Flower',
		'IM+Fell+English+SC',
		'Julius+Sans+One',
		'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lobster',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Marck+Script',
		'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass+Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua+One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent+Marker',
		'Poiret+One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Russo+One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Slabo+13px',
		'Slabo+27px',
		'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows+Into+Light+Two',
		'Shadows+Into+Light',
		'Sacramento',
		'Shrikhand',
		'Staatliches',
		'Tangerine:wght@400;700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica+One',
		'VT323',
		'Varela+Round',
		'Vampiro+One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
		'ZCOOL+XiaoWei'
	);
	
	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/* Theme enqueue scripts */
function digital_advertising_scripts() {
	wp_enqueue_style( 'digital-advertising-font', digital_advertising_font_url(), array() );
	wp_enqueue_style( 'digital-advertising-block-patterns-style-frontend', get_theme_file_uri('/css/block-frontend.css') );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'digital-advertising-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'digital-advertising-block-style', get_template_directory_uri().'/css/block-style.css' );
    
    // Body
    $digital_advertising_body_color = get_theme_mod('digital_advertising_body_color', '');
    $digital_advertising_body_font_family = get_theme_mod('digital_advertising_body_font_family', '');
    $digital_advertising_body_font_size = get_theme_mod('digital_advertising_body_font_size', '');
	// Paragraph
    $digital_advertising_paragraph_color = get_theme_mod('digital_advertising_paragraph_color', '');
    $digital_advertising_paragraph_font_family = get_theme_mod('digital_advertising_paragraph_font_family', '');
    $digital_advertising_paragraph_font_size = get_theme_mod('digital_advertising_paragraph_font_size', '');
	// "a" tag
	$digital_advertising_atag_color = get_theme_mod('digital_advertising_atag_color', '');
    $digital_advertising_atag_font_family = get_theme_mod('digital_advertising_atag_font_family', '');
	// "li" tag
	$digital_advertising_li_color = get_theme_mod('digital_advertising_li_color', '');
    $digital_advertising_li_font_family = get_theme_mod('digital_advertising_li_font_family', '');
	// H1
	$digital_advertising_h1_color = get_theme_mod('digital_advertising_h1_color', '');
    $digital_advertising_h1_font_family = get_theme_mod('digital_advertising_h1_font_family', '');
    $digital_advertising_h1_font_size = get_theme_mod('digital_advertising_h1_font_size', '');
	// H2
	$digital_advertising_h2_color = get_theme_mod('digital_advertising_h2_color', '');
    $digital_advertising_h2_font_family = get_theme_mod('digital_advertising_h2_font_family', '');
    $digital_advertising_h2_font_size = get_theme_mod('digital_advertising_h2_font_size', '');
	// H3
	$digital_advertising_h3_color = get_theme_mod('digital_advertising_h3_color', '');
    $digital_advertising_h3_font_family = get_theme_mod('digital_advertising_h3_font_family', '');
    $digital_advertising_h3_font_size = get_theme_mod('digital_advertising_h3_font_size', '');
	// H4
	$digital_advertising_h4_color = get_theme_mod('digital_advertising_h4_color', '');
    $digital_advertising_h4_font_family = get_theme_mod('digital_advertising_h4_font_family', '');
    $digital_advertising_h4_font_size = get_theme_mod('digital_advertising_h4_font_size', '');
	// H5
	$digital_advertising_h5_color = get_theme_mod('digital_advertising_h5_color', '');
    $digital_advertising_h5_font_family = get_theme_mod('digital_advertising_h5_font_family', '');
    $digital_advertising_h5_font_size = get_theme_mod('digital_advertising_h5_font_size', '');
	// H6
	$digital_advertising_h6_color = get_theme_mod('digital_advertising_h6_color', '');
    $digital_advertising_h6_font_family = get_theme_mod('digital_advertising_h6_font_family', '');
    $digital_advertising_h6_font_size = get_theme_mod('digital_advertising_h6_font_size', '');

	$digital_advertising_custom_css ='
	    body{
		    color:'.esc_html($digital_advertising_body_color).'!important;
		    font-family: '.esc_html($digital_advertising_body_font_family).'!important;
		    font-size: '.esc_html($digital_advertising_body_font_size).'px !important;
		}
		p,span{
		    color:'.esc_attr($digital_advertising_paragraph_color).'!important;
		    font-family: '.esc_attr($digital_advertising_paragraph_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($digital_advertising_atag_color).'!important;
		    font-family: '.esc_attr($digital_advertising_atag_font_family).';
		}
		li{
		    color:'.esc_attr($digital_advertising_li_color).'!important;
		    font-family: '.esc_attr($digital_advertising_li_font_family).';
		}
		h1{
		    color:'.esc_attr($digital_advertising_h1_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h1_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($digital_advertising_h2_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h2_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($digital_advertising_h3_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h3_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($digital_advertising_h4_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h4_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($digital_advertising_h5_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h5_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($digital_advertising_h6_color).'!important;
		    font-family: '.esc_attr($digital_advertising_h6_font_family).'!important;
		    font-size: '.esc_attr($digital_advertising_h6_font_size).'!important;
		}'
	;
	wp_add_inline_style( 'digital-advertising-basic-style',$digital_advertising_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'digital-advertising-basic-style',$digital_advertising_custom_css );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'digital-advertising-custom-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digital_advertising_scripts' );

/*radio button sanitization*/

function digital_advertising_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function digital_advertising_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/**
 * Enqueue block editor style
 */
function digital_advertising_block_editor_styles() {
	wp_enqueue_style( 'digital-advertising-font', digital_advertising_font_url(), array() );
	wp_enqueue_style( 'digital-advertising-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
}
add_action( 'enqueue_block_editor_assets', 'digital_advertising_block_editor_styles' );


function digital_advertising_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'digital_advertising_loop_columns');
if (!function_exists('digital_advertising_loop_columns')) {
	function digital_advertising_loop_columns() {
		$columns = get_theme_mod( 'digital_advertising_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'digital_advertising_shop_per_page', 9 );
function digital_advertising_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'digital_advertising_product_per_page', 9 );
	return $cols;
}

// URL DEFINES
define('digital_advertising_SITE_URL',__('https://www.themescaliber.com/themes/free-advertising-wordpress-theme/','digital-advertising'));
define('digital_advertising_FREE_THEME_DOC',__('https://themescaliber.com/demo/doc/free-digital-advertising/','digital-advertising'));
define('digital_advertising_SUPPORT',__('https://wordpress.org/support/theme/digital-advertising/','digital-advertising'));
define('digital_advertising_REVIEW',__('https://wordpress.org/support/theme/digital-advertising/reviews/','digital-advertising'));
define('digital_advertising_BUY_NOW',__('https://www.themescaliber.com/themes/advertising-agency-wordpress-theme/','digital-advertising'));
define('digital_advertising_LIVE_DEMO',__('https://www.themescaliber.com/digital-advertising-pro/','digital-advertising'));
define('digital_advertising_PRO_DOC',__('https://themescaliber.com/demo/doc/digital-advertising-pro/','digital-advertising'));
define('digital_advertising_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','digital-advertising'));

if ( ! defined( 'digital_advertising_PRO_NAME' ) ) {
	define( 'digital_advertising_PRO_NAME', esc_html__( 'Digital Advertising Pro', 'digital-advertising' ));
}
if ( ! defined( 'digital_advertising_PRO_URL' ) ) {
	define( 'digital_advertising_PRO_URL', esc_url('https://www.themescaliber.com/themes/advertising-agency-wordpress-theme/'));
}

function digital_advertising_credit_link() {
    echo "<a href=".esc_url(digital_advertising_SITE_URL)." target='_blank'>".esc_html__('Advertising WordPress Theme ','digital-advertising')."</a>";
}

function digital_advertising_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function digital_advertising_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function digital_advertising_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/** Posts navigation. */
if ( ! function_exists( 'digital_advertising_post_navigation' ) ) {
	function digital_advertising_post_navigation() {
		$digital_advertising_pagination_type = get_theme_mod( 'digital_advertising_post_navigation_type', 'numbers' );
		if ( $digital_advertising_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'digital-advertising' ),
	            'next_text'          => __( 'Next page', 'digital-advertising' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'digital-advertising' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';

/* Block Pattern */
require get_template_directory() . '/block-patterns.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';