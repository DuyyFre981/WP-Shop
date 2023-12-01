<?php 
	$digital_advertising_custom_css ='';

	/*----------------Width Layout -------------------*/
	$digital_advertising_theme_lay = get_theme_mod( 'digital_advertising_width_options','Full Layout');
    if($digital_advertising_theme_lay == 'Full Layout'){
		$digital_advertising_custom_css .='body{';
			$digital_advertising_custom_css .='max-width: 100%;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == 'Contained Layout'){
		$digital_advertising_custom_css .='body{';
			$digital_advertising_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == 'Boxed Layout'){
		$digital_advertising_custom_css .='body{';
			$digital_advertising_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$digital_advertising_custom_css .='}';
	}

	/*------ Button Style -------*/
	$digital_advertising_top_buttom_padding = get_theme_mod('digital_advertising_top_button_padding');
	$digital_advertising_left_right_padding = get_theme_mod('digital_advertising_left_button_padding');
	if($digital_advertising_top_buttom_padding != false || $digital_advertising_left_right_padding != false ){
		$digital_advertising_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$digital_advertising_custom_css .='padding-top: '.esc_attr($digital_advertising_top_buttom_padding).'px; padding-bottom: '.esc_attr($digital_advertising_top_buttom_padding).'px; padding-left: '.esc_attr($digital_advertising_left_right_padding).'px; padding-right: '.esc_attr($digital_advertising_left_right_padding).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_button_border_radius = get_theme_mod('digital_advertising_button_border_radius');
	$digital_advertising_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$digital_advertising_custom_css .='border-radius: '.esc_attr($digital_advertising_button_border_radius).'px;';
	$digital_advertising_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$digital_advertising_woocommerce_button_padding_top = get_theme_mod('digital_advertising_woocommerce_button_padding_top');
	if($digital_advertising_woocommerce_button_padding_top != false){
		$digital_advertising_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$digital_advertising_custom_css .='padding-top: '.esc_attr($digital_advertising_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($digital_advertising_woocommerce_button_padding_top).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_woocommerce_button_padding_right = get_theme_mod('digital_advertising_woocommerce_button_padding_right');
	if($digital_advertising_woocommerce_button_padding_right != false){
		$digital_advertising_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$digital_advertising_custom_css .='padding-left: '.esc_attr($digital_advertising_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($digital_advertising_woocommerce_button_padding_right).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_woocommerce_button_border_radius = get_theme_mod('digital_advertising_woocommerce_button_border_radius');
	if($digital_advertising_woocommerce_button_border_radius != false){
		$digital_advertising_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$digital_advertising_custom_css .='border-radius: '.esc_attr($digital_advertising_woocommerce_button_border_radius).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_related_product = get_theme_mod('digital_advertising_related_product',true);

	if($digital_advertising_related_product == false){
		$digital_advertising_custom_css .='.related.products{';
			$digital_advertising_custom_css .='display: none;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_woocommerce_product_border = get_theme_mod('digital_advertising_woocommerce_product_border',true);

	if($digital_advertising_woocommerce_product_border == false){
		$digital_advertising_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$digital_advertising_custom_css .='border: none;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_woocommerce_product_padding_top = get_theme_mod('digital_advertising_woocommerce_product_padding_top',10);
		$digital_advertising_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$digital_advertising_custom_css .='padding-top: '.esc_attr($digital_advertising_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($digital_advertising_woocommerce_product_padding_top).'px;';
		$digital_advertising_custom_css .='}';

	$digital_advertising_woocommerce_product_padding_right = get_theme_mod('digital_advertising_woocommerce_product_padding_right',10);
		$digital_advertising_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$digital_advertising_custom_css .='padding-left: '.esc_attr($digital_advertising_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($digital_advertising_woocommerce_product_padding_right).'px;';
		$digital_advertising_custom_css .='}';

	$digital_advertising_woocommerce_product_border_radius = get_theme_mod('digital_advertising_woocommerce_product_border_radius');
	if($digital_advertising_woocommerce_product_border_radius != false){
		$digital_advertising_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$digital_advertising_custom_css .='border-radius: '.esc_attr($digital_advertising_woocommerce_product_border_radius).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_woocommerce_product_box_shadow = get_theme_mod('digital_advertising_woocommerce_product_box_shadow');
	if($digital_advertising_woocommerce_product_box_shadow != false){
		$digital_advertising_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$digital_advertising_custom_css .='box-shadow: '.esc_attr($digital_advertising_woocommerce_product_box_shadow).'px '.esc_attr($digital_advertising_woocommerce_product_box_shadow).'px '.esc_attr($digital_advertising_woocommerce_product_box_shadow).'px #aaa;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_product_sale_font_size = get_theme_mod('digital_advertising_product_sale_font_size');
	$digital_advertising_custom_css .='.woocommerce span.onsale {';
		$digital_advertising_custom_css .='font-size: '.esc_attr($digital_advertising_product_sale_font_size).'px;';
	$digital_advertising_custom_css .='}';

	/*---- Preloader Color ----*/
	$digital_advertising_preloader_color = get_theme_mod('digital_advertising_preloader_color');
	$digital_advertising_preloader_bg_color = get_theme_mod('digital_advertising_preloader_bg_color');

	if($digital_advertising_preloader_color != false){
		$digital_advertising_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$digital_advertising_custom_css .='background-color: '.esc_attr($digital_advertising_preloader_color).';';
		$digital_advertising_custom_css .='}';
	}
	if($digital_advertising_preloader_bg_color != false){
		$digital_advertising_custom_css .='.preloader{';
			$digital_advertising_custom_css .='background-color: '.esc_attr($digital_advertising_preloader_bg_color).';';
		$digital_advertising_custom_css .='}';
	}
	// menu color
	$digital_advertising_menu_color = get_theme_mod('digital_advertising_menu_color');

	$digital_advertising_custom_css .='.primary-navigation a,.primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation .current_page_ancestor > a{';
			$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_menu_color).'!important;';
	$digital_advertising_custom_css .='}';

	// menu hover color
	$digital_advertising_menu_hover_color = get_theme_mod('digital_advertising_menu_hover_color');
	$digital_advertising_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover{';
			$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_menu_hover_color).' !important;';
	$digital_advertising_custom_css .='}';

	// Submenu color
	$digital_advertising_submenu_menu_color = get_theme_mod('digital_advertising_submenu_menu_color');
	$digital_advertising_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a{';
			$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_submenu_menu_color).' !important;';
	$digital_advertising_custom_css .='}';

	/*---- Copyright css ----*/
	$digital_advertising_copyright_fontsize = get_theme_mod('digital_advertising_copyright_fontsize',16);
	if($digital_advertising_copyright_fontsize != false){
		$digital_advertising_custom_css .='#footer p{';
			$digital_advertising_custom_css .='font-size: '.esc_attr($digital_advertising_copyright_fontsize).'px; ';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_copyright_top_bottom_padding = get_theme_mod('digital_advertising_copyright_top_bottom_padding',15);
	if($digital_advertising_copyright_top_bottom_padding != false){
		$digital_advertising_custom_css .='#footer {';
			$digital_advertising_custom_css .='padding-top:'.esc_attr($digital_advertising_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($digital_advertising_copyright_top_bottom_padding).'px; ';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_copyright_alignment = get_theme_mod( 'digital_advertising_copyright_alignment','Center');
    if($digital_advertising_copyright_alignment == 'Left'){
		$digital_advertising_custom_css .='#footer p{';
			$digital_advertising_custom_css .='text-align:start;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_copyright_alignment == 'Center'){
		$digital_advertising_custom_css .='#footer p{';
			$digital_advertising_custom_css .='text-align:center;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_copyright_alignment == 'Right'){
		$digital_advertising_custom_css .='#footer p{';
			$digital_advertising_custom_css .='text-align:end;';
		$digital_advertising_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$digital_advertising_woocommerce_sale_top_padding = get_theme_mod('digital_advertising_woocommerce_sale_top_padding');
	$digital_advertising_woocommerce_sale_left_padding = get_theme_mod('digital_advertising_woocommerce_sale_left_padding');
	$digital_advertising_custom_css .=' .woocommerce span.onsale{';
		$digital_advertising_custom_css .='padding-top: '.esc_attr($digital_advertising_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($digital_advertising_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($digital_advertising_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($digital_advertising_woocommerce_sale_left_padding).'px;';
	$digital_advertising_custom_css .='}';

	$digital_advertising_woocommerce_sale_border_radius = get_theme_mod('digital_advertising_woocommerce_sale_border_radius', 0);
	$digital_advertising_custom_css .='.woocommerce span.onsale{';
		$digital_advertising_custom_css .='border-radius: '.esc_attr($digital_advertising_woocommerce_sale_border_radius).'px;';
	$digital_advertising_custom_css .='}';

	$digital_advertising_sale_position = get_theme_mod( 'digital_advertising_sale_position','right');
    if($digital_advertising_sale_position == 'left'){
		$digital_advertising_custom_css .='.woocommerce ul.products li.product .onsale{';
			$digital_advertising_custom_css .='left: -10px; right: auto;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_sale_position == 'right'){
		$digital_advertising_custom_css .='.woocommerce ul.products li.product .onsale{';
			$digital_advertising_custom_css .='left: auto; right: 0;';
		$digital_advertising_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$digital_advertising_footer_background_color = get_theme_mod('digital_advertising_footer_background_color');
	$digital_advertising_custom_css .='.footertown{';
		$digital_advertising_custom_css .='background-color: '.esc_attr($digital_advertising_footer_background_color).';';
	$digital_advertising_custom_css .='}';

	$digital_advertising_footer_background_img = get_theme_mod('digital_advertising_footer_background_img');
	if($digital_advertising_footer_background_img != false){
		$digital_advertising_custom_css .='.footertown{';
			$digital_advertising_custom_css .='background: url('.esc_attr($digital_advertising_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$digital_advertising_custom_css .='}';
	}

	/*---- Comment form ----*/
	$digital_advertising_comment_width = get_theme_mod('digital_advertising_comment_width', '100');
	$digital_advertising_custom_css .='#comments textarea{';
		$digital_advertising_custom_css .=' width:'.esc_attr($digital_advertising_comment_width).'%;';
	$digital_advertising_custom_css .='}';

	$digital_advertising_comment_submit_text = get_theme_mod('digital_advertising_comment_submit_text', 'Post Comment');
	if($digital_advertising_comment_submit_text == ''){
		$digital_advertising_custom_css .='#comments p.form-submit {';
			$digital_advertising_custom_css .='display: none;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_comment_title = get_theme_mod('digital_advertising_comment_title', 'Leave a Reply');
	if($digital_advertising_comment_title == ''){
		$digital_advertising_custom_css .='#comments h2#reply-title {';
			$digital_advertising_custom_css .='display: none;';
		$digital_advertising_custom_css .='}';
	}

	// Sticky Header padding
	$digital_advertising_sticky_header_padding = get_theme_mod('digital_advertising_sticky_header_padding');
	$digital_advertising_custom_css .='.fixed-header{';
		$digital_advertising_custom_css .=' padding-top:'.esc_attr($digital_advertising_sticky_header_padding).'px; padding-bottom:'.esc_attr($digital_advertising_sticky_header_padding).'px;';
	$digital_advertising_custom_css .='}';

	// Navigation Font Size 
	$digital_advertising_nav_font_size = get_theme_mod('digital_advertising_nav_font_size');
	if($digital_advertising_nav_font_size != false){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-size: '.esc_attr($digital_advertising_nav_font_size).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_navigation_case = get_theme_mod('digital_advertising_navigation_case', 'capitalize');
	if($digital_advertising_navigation_case == 'uppercase' ){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .=' text-transform: uppercase;';
		$digital_advertising_custom_css .='}';
	}elseif($digital_advertising_navigation_case == 'capitalize' ){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .=' text-transform: capitalize;';
		$digital_advertising_custom_css .='}';
	}
  
    // site title color option
	$digital_advertising_site_title_color_setting = get_theme_mod('digital_advertising_site_title_color_setting');
	$digital_advertising_custom_css .='.logo h1 a, .logo p a{';
		$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_site_title_color_setting).';';
	$digital_advertising_custom_css .='} ';

	$digital_advertising_tagline_color_setting = get_theme_mod('digital_advertising_tagline_color_setting');
	$digital_advertising_custom_css .=' .logo p.site-description{';
		$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_tagline_color_setting).';';
	$digital_advertising_custom_css .='} ';

	//Site title Font size
	$digital_advertising_site_title_fontsize = get_theme_mod('digital_advertising_site_title_fontsize');
	$digital_advertising_custom_css .='.logo h1, .logo p.site-title{';
		$digital_advertising_custom_css .='font-size: '.esc_attr($digital_advertising_site_title_fontsize).'px;';
	$digital_advertising_custom_css .='}';

	$digital_advertising_site_description_fontsize = get_theme_mod('digital_advertising_site_description_fontsize');
	$digital_advertising_custom_css .='.logo p.site-description{';
		$digital_advertising_custom_css .='font-size: '.esc_attr($digital_advertising_site_description_fontsize).'px;';
	$digital_advertising_custom_css .='}';

	/*----- Featured image css -----*/
	$digital_advertising_featured_image_border_radius = get_theme_mod('digital_advertising_featured_image_border_radius');
	if($digital_advertising_featured_image_border_radius != false){
		$digital_advertising_custom_css .='.inner-service .service-image img{';
			$digital_advertising_custom_css .='border-radius: '.esc_attr($digital_advertising_featured_image_border_radius).'px;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_featured_image_box_shadow = get_theme_mod('digital_advertising_featured_image_box_shadow');
	if($digital_advertising_featured_image_box_shadow != false){
		$digital_advertising_custom_css .='.inner-service .service-image img{';
			$digital_advertising_custom_css .='box-shadow: 8px 8px '.esc_attr($digital_advertising_featured_image_box_shadow).'px #aaa;';
		$digital_advertising_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$digital_advertising_shop_page_pagination = get_theme_mod('digital_advertising_shop_page_pagination', true);
	if($digital_advertising_shop_page_pagination == false){
		$digital_advertising_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$digital_advertising_custom_css .='display: none;';
		$digital_advertising_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$digital_advertising_post_blocks = get_theme_mod('digital_advertising_post_blocks', 'Without box');
	if($digital_advertising_post_blocks == 'Within box' ){
		$digital_advertising_custom_css .='.services-box{';
			$digital_advertising_custom_css .=' border: 1px solid #222;';
		$digital_advertising_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$digital_advertising_responsive_show_back_to_top = get_theme_mod('digital_advertising_responsive_show_back_to_top',true);
	if($digital_advertising_responsive_show_back_to_top == true && get_theme_mod('digital_advertising_show_back_to_top',true) == false){
		$digital_advertising_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$digital_advertising_custom_css .='visibility:hidden;';
		$digital_advertising_custom_css .='} }';
	}

	if($digital_advertising_responsive_show_back_to_top == false){
		$digital_advertising_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$digital_advertising_custom_css .='visibility:hidden;';
		$digital_advertising_custom_css .='} }';
	}

	$digital_advertising_responsive_preloader_hide = get_theme_mod('digital_advertising_responsive_preloader_hide',false);
	if($digital_advertising_responsive_preloader_hide == true && get_theme_mod('digital_advertising_preloader_hide',false) == false){
		$digital_advertising_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$digital_advertising_custom_css .='display:none !important;';
		$digital_advertising_custom_css .='} }';
	}

	if($digital_advertising_responsive_preloader_hide == false){
		$digital_advertising_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$digital_advertising_custom_css .='display:none !important;';
		$digital_advertising_custom_css .='} }';
	}

	// menu font weight
	$digital_advertising_theme_lay = get_theme_mod( 'digital_advertising_font_weight_menu_option','500');
    if($digital_advertising_theme_lay == '100'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight:100;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '200'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 200;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '300'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 300;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '400'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 400;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '500'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 500;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '600'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 600;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '700'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 700;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '800'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 800;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == '900'){
		$digital_advertising_custom_css .='.primary-navigation ul li a{';
			$digital_advertising_custom_css .='font-weight: 900;';
		$digital_advertising_custom_css .='}';
	}

	// slider hide css
	$digital_advertising_slider_hide_show = get_theme_mod('digital_advertising_slider_hide_show',false);
	if($digital_advertising_slider_hide_show == false) {
		$digital_advertising_custom_css .='.page-template-custom-frontpage #header{';
			$digital_advertising_custom_css .='position:static; background:#ffab01; padding: 45px 0;';
		$digital_advertising_custom_css .='}';
	}

	$digital_advertising_theme_lay = get_theme_mod( 'digital_advertising_slider_content_alignment','Left');
    if($digital_advertising_theme_lay == 'Left'){
		$digital_advertising_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$digital_advertising_custom_css .='text-align:left !important; left:15%; right:45%;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == 'Center'){
		$digital_advertising_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$digital_advertising_custom_css .='text-align:center !important; left:20%; right:20%;';
		$digital_advertising_custom_css .='}';
	}else if($digital_advertising_theme_lay == 'Right'){
		$digital_advertising_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$digital_advertising_custom_css .='text-align:right !important; left:45%; right:15%;';
		$digital_advertising_custom_css .='}';
	}

	// Logo padding
	$digital_advertising_logo_padding = get_theme_mod('digital_advertising_logo_padding');
	$digital_advertising_custom_css .='.logo{';
		$digital_advertising_custom_css .=' padding:'.esc_attr($digital_advertising_logo_padding).'px;';
	$digital_advertising_custom_css .='}';

	// Logo margin
	$digital_advertising_logo_margin = get_theme_mod('digital_advertising_logo_margin');
	$digital_advertising_custom_css .='.logo{';
		$digital_advertising_custom_css .=' margin:'.esc_attr($digital_advertising_logo_margin).'px;';
	$digital_advertising_custom_css .='}';

	// menu color option
	$digital_advertising_menu_color_setting = get_theme_mod('digital_advertising_menu_color_setting');
	$digital_advertising_custom_css .='.toggle-menu i{';
		$digital_advertising_custom_css .='color: '.esc_attr($digital_advertising_menu_color_setting).';';
	$digital_advertising_custom_css .='} ';