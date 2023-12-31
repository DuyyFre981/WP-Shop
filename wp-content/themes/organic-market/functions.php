<?php
/**
 * Organic Market functions and definitions
 *
 * @package organic-market
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Breadcrumb Begin */
function organic_market_the_breadcrumb() {
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
if (!function_exists('organic_market_setup')):

function organic_market_setup() {

	$GLOBALS['content_width'] = apply_filters('organic_market_content_width', 640);
    load_theme_textdomain( 'organic-market', get_template_directory() . '/languages' );
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));
	add_image_size('organic-market-homepage-thumb', 250, 145, true);
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'organic-market'),
	));

	add_theme_support('custom-background', array(
		'default-color' => 'f1f1f1',
	));
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(array('css/editor-style.css', organic_market_font_url()));

	// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated']) ) {
		add_action( 'admin_notices', 'organic_market_activation_notice' );
	}
}
endif;
add_action('after_setup_theme', 'organic_market_setup');

// Notice after Theme Activation
function organic_market_activation_notice() {
	echo '<div class="notice notice-success is-dismissible get-started">';
		echo '<p>'. esc_html__( 'Thank you for choosing ThemeShopy. We are sincerely obliged to offer our best services to you. Please proceed towards welcome page and give us the privilege to serve you.', 'organic-market' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=organic_market_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click here...', 'organic-market' ) .'</a></p>';
	echo '</div>';
}

// Theme Widgets Setup
function organic_market_widgets_init() {
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'organic-market'),
		'description'   => __('Appears on blog page sidebar', 'organic-market'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Page Sidebar', 'organic-market'),
		'description'   => __('Appears on page sidebar', 'organic-market'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Third Column Sidebar', 'organic-market'),
		'description'   => __('Appears on page sidebar', 'organic-market'),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Footer widget areas
	$organic_market_widget_areas = get_theme_mod('organic_market_footer_widget_areas', '4');
	for ($i=1; $i<=$organic_market_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'organic-market' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'organic-market' ),
		'description'   => __( 'Appears on shop page', 'organic-market' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'organic-market' ),
		'description'   => __( 'Appears on shop page', 'organic-market' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action('widgets_init', 'organic_market_widgets_init');

/* Theme Font URL */
function organic_market_font_url(){
	$font_family = array(
		'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400',
		'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900',
		'Julius+Sans+One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo+27px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass+Mono:wght@300;400;500;600;700',
		'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300;400;500;600;700',
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Pacifico',
		'Indie+Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank+Ruhl+Libre:wght@300;400;500;700;900',
		'Fjalla+One',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',	
		'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree+Serif',
		'Gloria+Hallelujah',
		'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Abril+Fatface',
		'Varela+Round',
		'Vampiro+One',
		'Shadows+Into+Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois+One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua+One',
		'Acme',
		'Satisfy',
		'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects+Daughter',
		'Russo+One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith+One',
		'Courgette',
		'Permanent+Marker',
		'Cherry+Swash:wght@400;700',
		'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret+One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa+Slab+One',
		'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great+Vibes',
		'Coming+Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days+One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine',
		'IM+Fell+English+SC',
		'Boogaloo',
		'Bangers',
		'Fredoka+One',
		'Bad+Script',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows+Into+Light+Two',
		'Marck+Script',
		'Sacramento',
		'Unica+One',
		'Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900'
	);

	$fonts_url = add_query_arg( array(
	'family' => implode( '&family=', $font_family ),
	'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

//Display the related posts
if ( ! function_exists( 'organic_market_related_posts' ) ) {
	function organic_market_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'organic_market_related_posts_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'organic_market_related_posts_taxanomies_options', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'organic_market_related_posts_taxanomies_options', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function organic_market_sanitize_dropdown_pages($page_id, $setting) {
	// Ensure $input is an absolute integer.
	$page_id = absint($page_id);
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ('publish' == get_post_status($page_id)?$page_id:$setting->default);
}

// radio button sanitization
function organic_market_sanitize_choices($input, $setting) {
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}

function organic_market_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function organic_market_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function organic_market_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function organic_market_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Excerpt Limit Begin
function organic_market_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

define('ORGANIC_MARKET_BUY_NOW',__('https://www.themeshopy.com/themes/organic-market-wordpress-theme/','organic-market'));
define('ORGANIC_MARKET_LIVE_DEMO',__('https://www.themeshopy.com/organic-market-pro/','organic-market'));
define('ORGANIC_MARKET_PRO_DOC',__('https://www.themeshopy.com/demo/docs/organic-market-pro/','organic-market'));
define('ORGANIC_MARKET_FREE_DOC',__('https://themeshopy.com/demo/docs/free-organic-market/','organic-market'));
define('ORGANIC_MARKET_CONTACT',__('https://wordpress.org/support/theme/organic-market/','organic-market'));
define('ORGANIC_MARKET_CREDIT',__('https://www.themeshopy.com/themes/free-organic-wordpress-theme/','organic-market'));

if (!function_exists('organic_market_credit')) {
	function organic_market_credit() {
		echo "<a href=".esc_url(ORGANIC_MARKET_CREDIT)." target='_blank'>".esc_html__('Organic Market WordPress Theme ', 'organic-market')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'organic_market_loop_columns');
if (!function_exists('organic_market_loop_columns')) {
	function organic_market_loop_columns() {
		$columns = get_theme_mod( 'organic_market_wooproducts_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'organic_market_shop_per_page', 20 );
function organic_market_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'organic_market_wooproducts_per_page', 9 );
	return $cols;
}

// Theme enqueue scripts
function organic_market_scripts() {
	wp_enqueue_style('organic-market-font', organic_market_font_url(), array());
	// blocks-css
	wp_enqueue_style( 'organic-market-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('organic-market-basic-style', get_stylesheet_uri());
	wp_enqueue_style('organic-market-customcss', get_template_directory_uri().'/css/custom.css');
	wp_enqueue_style('font-awesome-style', get_template_directory_uri().'/css/fontawesome-all.css');
		wp_enqueue_style('organic-market-block-pattern-frontend', get_template_directory_uri().'/theme-block-pattern/css/block-pattern-frontend.css');
	wp_style_add_data('educator-education-basic-style', 'rtl', 'replace');
	wp_enqueue_style( 'slick-style', get_template_directory_uri().'/css/slick.css' );

	// Paragraph
    $organic_market_paragraph_color = get_theme_mod('organic_market_paragraph_color', '');
    $organic_market_paragraph_font_family = get_theme_mod('organic_market_paragraph_font_family', '');
    $organic_market_paragraph_font_size = get_theme_mod('organic_market_paragraph_font_size', '');
	// "a" tag
	$organic_market_atag_color = get_theme_mod('organic_market_atag_color', '');
    $organic_market_atag_font_family = get_theme_mod('organic_market_atag_font_family', '');
	// "li" tag
	$organic_market_li_color = get_theme_mod('organic_market_li_color', '');
    $organic_market_li_font_family = get_theme_mod('organic_market_li_font_family', '');
	// H1
	$organic_market_h1_color = get_theme_mod('organic_market_h1_color', '');
    $organic_market_h1_font_family = get_theme_mod('organic_market_h1_font_family', '');
    $organic_market_h1_font_size = get_theme_mod('organic_market_h1_font_size', '');
	// H2
	$organic_market_h2_color = get_theme_mod('organic_market_h2_color', '');
    $organic_market_h2_font_family = get_theme_mod('organic_market_h2_font_family', '');
    $organic_market_h2_font_size = get_theme_mod('organic_market_h2_font_size', '');
	// H3
	$organic_market_h3_color = get_theme_mod('organic_market_h3_color', '');
    $organic_market_h3_font_family = get_theme_mod('organic_market_h3_font_family', '');
    $organic_market_h3_font_size = get_theme_mod('organic_market_h3_font_size', '');
	// H4
	$organic_market_h4_color = get_theme_mod('organic_market_h4_color', '');
    $organic_market_h4_font_family = get_theme_mod('organic_market_h4_font_family', '');
    $organic_market_h4_font_size = get_theme_mod('organic_market_h4_font_size', '');
	// H5
	$organic_market_h5_color = get_theme_mod('organic_market_h5_color', '');
    $organic_market_h5_font_family = get_theme_mod('organic_market_h5_font_family', '');
    $organic_market_h5_font_size = get_theme_mod('organic_market_h5_font_size', '');
	// H6
	$organic_market_h6_color = get_theme_mod('organic_market_h6_color', '');
    $organic_market_h6_font_family = get_theme_mod('organic_market_h6_font_family', '');
    $organic_market_h6_font_size = get_theme_mod('organic_market_h6_font_size', '');

	$organic_market_custom_css ='
		p,span{
		    color:'.esc_html($organic_market_paragraph_color).'!important;
		    font-family: '.esc_html($organic_market_paragraph_font_family).';
		    font-size: '.esc_html($organic_market_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($organic_market_atag_color).'!important;
		    font-family: '.esc_html($organic_market_atag_font_family).';
		}
		li{
		    color:'.esc_html($organic_market_li_color).'!important;
		    font-family: '.esc_html($organic_market_li_font_family).';
		}
		h1{
		    color:'.esc_html($organic_market_h1_color).'!important;
		    font-family: '.esc_html($organic_market_h1_font_family).'!important;
		    font-size: '.esc_html($organic_market_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($organic_market_h2_color).'!important;
		    font-family: '.esc_html($organic_market_h2_font_family).'!important;
		    font-size: '.esc_html($organic_market_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($organic_market_h3_color).'!important;
		    font-family: '.esc_html($organic_market_h3_font_family).'!important;
		    font-size: '.esc_html($organic_market_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($organic_market_h4_color).'!important;
		    font-family: '.esc_html($organic_market_h4_font_family).'!important;
		    font-size: '.esc_html($organic_market_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($organic_market_h5_color).'!important;
		    font-family: '.esc_html($organic_market_h5_font_family).'!important;
		    font-size: '.esc_html($organic_market_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($organic_market_h6_color).'!important;
		    font-family: '.esc_html($organic_market_h6_font_family).'!important;
		    font-size: '.esc_html($organic_market_h6_font_size).'!important;
		}
	';
	wp_add_inline_style( 'organic-market-basic-style',$organic_market_custom_css );

	wp_enqueue_script('organic-market-customscripts-jquery', get_template_directory_uri().'/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap-jquery', get_template_directory_uri().'/js/bootstrap.js', array('jquery'));
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);
	require get_parent_theme_file_path( '/inc/ts-color-pallete.php' );
	wp_add_inline_style( 'organic-market-basic-style',$organic_market_custom_css );

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'organic_market_scripts');

/*** Enqueue block editor style */
function organic_market_block_editor_styles() {
	wp_enqueue_style( 'organic-market-font', organic_market_font_url(), array() );
    wp_enqueue_style( 'block-pattern-patterns-style-editor', get_theme_file_uri( '/theme-block-pattern/css/block-pattern-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
}
add_action( 'enqueue_block_editor_assets', 'organic_market_block_editor_styles' );

/* Custom header additions. */
require get_template_directory().'/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory().'/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory().'/inc/customizer.php';

/* TGM */
require get_template_directory().'/inc/tgm.php';

/* Admin about theme */
require get_template_directory() . '/inc/admin/admin.php';

/* Implement the block pattern */
require get_template_directory().'/theme-block-pattern/theme-block-pattern.php';

/* Webfonts */
require get_template_directory() . '/inc/wptt-webfont-loader.php';