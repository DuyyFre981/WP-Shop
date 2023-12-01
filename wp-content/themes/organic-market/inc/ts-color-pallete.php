<?php

	$organic_market_custom_css = '';

	/*---------------------------Width Layout -------------------*/
	$organic_market_theme_lay = get_theme_mod( 'organic_market_theme_options','Default');
    if($organic_market_theme_lay == 'Default'){
		$organic_market_custom_css .='body{';
			$organic_market_custom_css .='max-width: 100%;';
		$organic_market_custom_css .='}';
		$organic_market_custom_css .='.page-template-custom-home-page .middle-header{';
			$organic_market_custom_css .='width: 97.3%';
		$organic_market_custom_css .='}';
	}else if($organic_market_theme_lay == 'Container'){
		$organic_market_custom_css .='body{';
			$organic_market_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$organic_market_custom_css .='}';
		$organic_market_custom_css .='.page-template-custom-home-page .middle-header{';
			$organic_market_custom_css .='width: 97.7%';
		$organic_market_custom_css .='}';
		$organic_market_custom_css .='.serach_outer{';
			$organic_market_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$organic_market_custom_css .='}';
	}else if($organic_market_theme_lay == 'Box Container'){
		$organic_market_custom_css .='body{';
			$organic_market_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$organic_market_custom_css .='}';
		$organic_market_custom_css .='.serach_outer{';
			$organic_market_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$organic_market_custom_css .='}';
	}

	// css
	$organic_market_show_header = get_theme_mod( 'organic_market_display_topbar', true);
	if($organic_market_show_header == false){
		$organic_market_custom_css .='.main-menu{';
			$organic_market_custom_css .='margin: 10px 0;';
		$organic_market_custom_css .='}';
		$organic_market_custom_css .='.logo{';
			$organic_market_custom_css .='padding: 10px 0;';
		$organic_market_custom_css .='}';
	}

	$organic_market_show_slider = get_theme_mod( 'organic_market_slider_hide', false);
	if($organic_market_show_slider == false){
		$organic_market_custom_css .='.page-template-custom-front-page .bottom-header{';
			$organic_market_custom_css .='position: static;';
		$organic_market_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$organic_market_theme_lay = get_theme_mod( 'organic_market_slider_content_alignment','Center');
    if($organic_market_theme_lay == 'Left'){
		$organic_market_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$organic_market_custom_css .='text-align:left; left:15%; right:45%;';
		$organic_market_custom_css .='}';
	}else if($organic_market_theme_lay == 'Center'){
		$organic_market_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$organic_market_custom_css .='text-align:center !important; left:25%; right:25%;';
		$organic_market_custom_css .='}';
	}else if($organic_market_theme_lay == 'Right'){
		$organic_market_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$organic_market_custom_css .='text-align:right !important; left:45%; right:15%;';
		$organic_market_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$organic_market_theme_lay = get_theme_mod( 'organic_market_slider_image_opacity','0.5');
	if($organic_market_theme_lay == '0'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.1'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.1';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.2'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.2';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.3'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.3';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.4'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.4';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.5'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.5';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.6'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.6';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.7'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.7';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.8'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.8';
		$organic_market_custom_css .='}';
		}else if($organic_market_theme_lay == '0.9'){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:0.9';
		$organic_market_custom_css .='}';
		}

	/*------------------------------ Button Settings option-----------------------*/
	$organic_market_button_padding_top_bottom = get_theme_mod('organic_market_button_padding_top_bottom');
	$organic_market_button_padding_left_right = get_theme_mod('organic_market_button_padding_left_right');
	$organic_market_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($organic_market_button_padding_top_bottom).'px; padding-left: '.esc_attr($organic_market_button_padding_left_right).'px; padding-right: '.esc_attr($organic_market_button_padding_left_right).'px; display:inline-block;';
	$organic_market_custom_css .='}';

	$organic_market_button_border_radius = get_theme_mod('organic_market_button_border_radius');
	$organic_market_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$organic_market_custom_css .='border-radius: '.esc_attr($organic_market_button_border_radius).'px;';
	$organic_market_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$organic_market_slider = get_theme_mod( 'organic_market_responsive_slider',false);
	if($organic_market_slider == true && get_theme_mod( 'organic_market_slider_hide', false) == false){
    	$organic_market_custom_css .='#slider{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} ';
	}
    if($organic_market_slider == true){
    	$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#slider{';
			$organic_market_custom_css .='display:block;';
		$organic_market_custom_css .='} }';
	}else if($organic_market_slider == false){
		$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#slider{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} }';
	}

	$organic_market_slider = get_theme_mod( 'organic_market_responsive_scroll',true);
	if($organic_market_slider == true && get_theme_mod( 'organic_market_enable_disable_scroll', true) == false){
    	$organic_market_custom_css .='#scroll-top{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} ';
	}
    if($organic_market_slider == true){
    	$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#scroll-top{';
			$organic_market_custom_css .='visibility: visible !important;';
		$organic_market_custom_css .='} }';
	}else if($organic_market_slider == false){
		$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#scroll-top{';
			$organic_market_custom_css .='visibility: hidden !important;';
		$organic_market_custom_css .='} }';
	}

	$organic_market_sidebar = get_theme_mod( 'organic_market_responsive_sidebar',true);
    if($organic_market_sidebar == true){
    	$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#sidebar{';
			$organic_market_custom_css .='display:block;';
		$organic_market_custom_css .='} }';
	}else if($organic_market_sidebar == false){
		$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#sidebar{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} }';
	}

	$organic_market_loader = get_theme_mod( 'organic_market_responsive_preloader', true);
	if($organic_market_loader == true && get_theme_mod( 'organic_market_preloader_option', true) == false){
    	$organic_market_custom_css .='#loader-wrapper{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} ';
	}
    if($organic_market_loader == true){
    	$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#loader-wrapper{';
			$organic_market_custom_css .='display:block;';
		$organic_market_custom_css .='} }';
	}else if($organic_market_loader == false){
		$organic_market_custom_css .='@media screen and (max-width:575px) {';
		$organic_market_custom_css .='#loader-wrapper{';
			$organic_market_custom_css .='display:none;';
		$organic_market_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$organic_market_theme_lay = get_theme_mod( 'organic_market_background_skin_mode','Transpert Background');
    if($organic_market_theme_lay == 'With Background'){
		$organic_market_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.post-sec,.front-page-content,.background-img-skin, .noresult-content{';
			$organic_market_custom_css .='background-color: #fff; padding:10px;';
		$organic_market_custom_css .='}';
	}else if($organic_market_theme_lay == 'Transpert Background'){
		$organic_market_custom_css .='.page-box-single{';
			$organic_market_custom_css .='background-color: transparent;';
		$organic_market_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$organic_market_top_bottom_product_button_padding = get_theme_mod('organic_market_top_bottom_product_button_padding', 10);
	$organic_market_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($organic_market_top_bottom_product_button_padding).'px;';
	$organic_market_custom_css .='}';

	$organic_market_left_right_product_button_padding = get_theme_mod('organic_market_left_right_product_button_padding', 16);
	$organic_market_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$organic_market_custom_css .='padding-left: '.esc_attr($organic_market_left_right_product_button_padding).'px; padding-right: '.esc_attr($organic_market_left_right_product_button_padding).'px;';
	$organic_market_custom_css .='}';

	$organic_market_product_button_border_radius = get_theme_mod('organic_market_product_button_border_radius', 3);
	$organic_market_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$organic_market_custom_css .='border-radius: '.esc_attr($organic_market_product_button_border_radius).'px;';
	$organic_market_custom_css .='}';

	$organic_market_show_related_products = get_theme_mod('organic_market_show_related_products',true);
	if($organic_market_show_related_products == false){
		$organic_market_custom_css .='.related.products{';
			$organic_market_custom_css .='display: none;';
		$organic_market_custom_css .='}';
	}

	$organic_market_show_wooproducts_border = get_theme_mod('organic_market_show_wooproducts_border', false);
	if($organic_market_show_wooproducts_border == true){
		$organic_market_custom_css .='.products li{';
			$organic_market_custom_css .='border: 1px solid #d4d2d2;';
		$organic_market_custom_css .='}';
	}

	$organic_market_top_bottom_wooproducts_padding = get_theme_mod('organic_market_top_bottom_wooproducts_padding',0);
	$organic_market_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($organic_market_top_bottom_wooproducts_padding).'px !important;';
	$organic_market_custom_css .='}';

	$organic_market_left_right_wooproducts_padding = get_theme_mod('organic_market_left_right_wooproducts_padding',0);
	$organic_market_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$organic_market_custom_css .='padding-left: '.esc_attr($organic_market_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($organic_market_left_right_wooproducts_padding).'px !important;';
	$organic_market_custom_css .='}';

	$organic_market_wooproducts_border_radius = get_theme_mod('organic_market_wooproducts_border_radius',0);
	$organic_market_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$organic_market_custom_css .='border-radius: '.esc_attr($organic_market_wooproducts_border_radius).'px;';
	$organic_market_custom_css .='}';

	$organic_market_wooproducts_box_shadow = get_theme_mod('organic_market_wooproducts_box_shadow',0);
	$organic_market_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$organic_market_custom_css .='box-shadow: '.esc_attr($organic_market_wooproducts_box_shadow).'px '.esc_attr($organic_market_wooproducts_box_shadow).'px '.esc_attr($organic_market_wooproducts_box_shadow).'px #eee;';
	$organic_market_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$organic_market_copyright_content_align = get_theme_mod('organic_market_copyright_content_align');
	if($organic_market_copyright_content_align != false){
		$organic_market_custom_css .='.copyright{';
			$organic_market_custom_css .='text-align: '.esc_attr($organic_market_copyright_content_align).';';
		$organic_market_custom_css .='}';
	}

	$organic_market_footer_content_font_size = get_theme_mod('organic_market_footer_content_font_size', 16);
	$organic_market_custom_css .='.copyright p{';
		$organic_market_custom_css .='font-size: '.esc_attr($organic_market_footer_content_font_size).'px !important;';
	$organic_market_custom_css .='}';

	$organic_market_copyright_padding = get_theme_mod('organic_market_copyright_padding', 15);
	$organic_market_custom_css .='.copyright{';
		$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_copyright_padding).'px; padding-bottom: '.esc_attr($organic_market_copyright_padding).'px;';
	$organic_market_custom_css .='}';

	$organic_market_footer_widget_bg_color = get_theme_mod('organic_market_footer_widget_bg_color');
	$organic_market_custom_css .='#footer{';
		$organic_market_custom_css .='background-color: '.esc_attr($organic_market_footer_widget_bg_color).';';
	$organic_market_custom_css .='}';

	$organic_market_footer_widget_bg_image = get_theme_mod('organic_market_footer_widget_bg_image');
	if($organic_market_footer_widget_bg_image != false){
		$organic_market_custom_css .='#footer{';
			$organic_market_custom_css .='background: url('.esc_attr($organic_market_footer_widget_bg_image).');';
		$organic_market_custom_css .='}';
	}

	// scroll to top
	$organic_market_scroll_font_size_icon = get_theme_mod('organic_market_scroll_font_size_icon', 22);
	$organic_market_custom_css .='#scroll-top .fas{';
		$organic_market_custom_css .='font-size: '.esc_attr($organic_market_scroll_font_size_icon).'px;';
	$organic_market_custom_css .='}';

	// Slider Height 
	$organic_market_slider_image_height = get_theme_mod('organic_market_slider_image_height');
	$organic_market_custom_css .='#slider img{';
		$organic_market_custom_css .='height: '.esc_attr($organic_market_slider_image_height).'px;';
	$organic_market_custom_css .='}';

	// Display Blog Post 
	$organic_market_display_blog_page_post = get_theme_mod( 'organic_market_display_blog_page_post','In Box');
    if($organic_market_display_blog_page_post == 'Without Box'){
		$organic_market_custom_css .='.page-box{';
			$organic_market_custom_css .='border:none; margin:25px 0; box-shadow: none;';
		$organic_market_custom_css .='}';
	}

	// slider overlay
	$organic_market_slider_overlay = get_theme_mod('organic_market_slider_overlay', true);
	if($organic_market_slider_overlay == false){
		$organic_market_custom_css .='#slider img{';
			$organic_market_custom_css .='opacity:1;';
		$organic_market_custom_css .='}';
	} 
	$organic_market_slider_image_overlay_color = get_theme_mod('organic_market_slider_image_overlay_color');
	if($organic_market_slider_overlay != ''){
		$organic_market_custom_css .='#slider{';
			$organic_market_custom_css .='background-color: '.esc_attr($organic_market_slider_image_overlay_color).';';
		$organic_market_custom_css .='}';
	}

	// site title and tagline font size option
	$organic_market_site_title_size_option = get_theme_mod('organic_market_site_title_size_option', 22);{
	$organic_market_custom_css .='.logo h1 a, .logo p a{';
	$organic_market_custom_css .='font-size: '.esc_attr($organic_market_site_title_size_option).'px;';
		$organic_market_custom_css .='}';
	}

	$organic_market_site_tagline_size_option = get_theme_mod('organic_market_site_tagline_size_option', 12);{
	$organic_market_custom_css .='.logo p{';
	$organic_market_custom_css .='font-size: '.esc_attr($organic_market_site_tagline_size_option).'px;';
		$organic_market_custom_css .='}';
	}

	// woocommerce product sale settings
	$organic_market_border_radius_product_sale = get_theme_mod('organic_market_border_radius_product_sale',50);
	$organic_market_custom_css .='.woocommerce span.onsale {';
		$organic_market_custom_css .='border-radius: '.esc_attr($organic_market_border_radius_product_sale).'%;';
	$organic_market_custom_css .='}';

	$organic_market_align_product_sale = get_theme_mod('organic_market_align_product_sale', 'Right');
	if($organic_market_align_product_sale == 'Right' ){
		$organic_market_custom_css .='.woocommerce ul.products li.product .onsale{';
			$organic_market_custom_css .=' left:auto; right:0;';
		$organic_market_custom_css .='}';
	}elseif($organic_market_align_product_sale == 'Left' ){
		$organic_market_custom_css .='.woocommerce ul.products li.product .onsale{';
			$organic_market_custom_css .=' left:0; right:auto;';
		$organic_market_custom_css .='}';
	}

	$organic_market_product_sale_font_size = get_theme_mod('organic_market_product_sale_font_size',14);
	$organic_market_custom_css .='.woocommerce span.onsale{';
		$organic_market_custom_css .='font-size: '.esc_attr($organic_market_product_sale_font_size).'px;';
	$organic_market_custom_css .='}';


	// preloader background option
	$organic_market_loader_background_color_settings = get_theme_mod('organic_market_loader_background_color_settings');
	$organic_market_custom_css .='#loader-wrapper .loader-section{';
		$organic_market_custom_css .='background-color: '.esc_attr($organic_market_loader_background_color_settings).';';
	$organic_market_custom_css .='} ';

	// fixed header padding option
	$organic_market_sticky_header_padding_settings = get_theme_mod('organic_market_sticky_header_padding_settings', 0);
	$organic_market_custom_css .=' .fixed-header, .header-fixed{';
		$organic_market_custom_css .='padding: '.esc_attr($organic_market_sticky_header_padding_settings).'px;';
	$organic_market_custom_css .='}';
	$organic_market_custom_css .='@media screen and (max-width:1000px) {';
	$organic_market_custom_css .=' .fixed-header{';
		$organic_market_custom_css .='padding: 0 !important; }';
	$organic_market_custom_css .='}';

	// woocommerce Product Navigation
	$organic_market_products_navigation = get_theme_mod('organic_market_products_navigation', 'Yes');
	if($organic_market_products_navigation == 'No'){
		$organic_market_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$organic_market_custom_css .='display: none;';
		$organic_market_custom_css .='}';
	}

	// featured image setting
	$organic_market_featured_img_border_radius = get_theme_mod('organic_market_featured_img_border_radius', 0);
	$organic_market_custom_css .='.our-services img, .box-img img{';
		$organic_market_custom_css .='border-radius: '.esc_attr($organic_market_featured_img_border_radius).'px;';
	$organic_market_custom_css .='}';

	$organic_market_featured_img_box_shadow = get_theme_mod('organic_market_featured_img_box_shadow',0);
	$organic_market_custom_css .='.our-services img, .page-box-single img{';
		$organic_market_custom_css .='box-shadow: '.esc_attr($organic_market_featured_img_box_shadow).'px '.esc_attr($organic_market_featured_img_box_shadow).'px '.esc_attr($organic_market_featured_img_box_shadow).'px #ccc;';
	$organic_market_custom_css .='}';

	// slider top and bottom padding
	$organic_market_top_bottom_slider_content_space = get_theme_mod('organic_market_top_bottom_slider_content_space');
	$organic_market_left_right_slider_content_space = get_theme_mod('organic_market_left_right_slider_content_space');
	$organic_market_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$organic_market_custom_css .='top: '.esc_attr($organic_market_top_bottom_slider_content_space).'%; bottom: '.esc_attr($organic_market_top_bottom_slider_content_space).'%;left: '.esc_attr($organic_market_left_right_slider_content_space).'%;right: '.esc_attr($organic_market_left_right_slider_content_space).'%;';
	$organic_market_custom_css .='}';

	/*------ Footer background css -------*/
	$organic_market_copyright_bg_color_settings = get_theme_mod('organic_market_copyright_bg_color_settings');
	if($organic_market_copyright_bg_color_settings != false){
		$organic_market_custom_css .='.copyright{';
			$organic_market_custom_css .='background-color: '.esc_attr($organic_market_copyright_bg_color_settings).';';
		$organic_market_custom_css .='}';
	}

	// site tagline color
	$organic_market_site_tagline_color = get_theme_mod('organic_market_site_tagline_color');
	$organic_market_custom_css .='.logo p {';
		$organic_market_custom_css .='color: '.esc_attr($organic_market_site_tagline_color).' !important;';
	$organic_market_custom_css .='}';

	// site title color
	$organic_market_site_title_color = get_theme_mod('organic_market_site_title_color');
	$organic_market_custom_css .='.site-title a{';
		$organic_market_custom_css .='color: '.esc_attr($organic_market_site_title_color).' !important;';
	$organic_market_custom_css .='}';

	// site top-bottom logo padding 
	$organic_market_logo_padding_top = get_theme_mod('organic_market_logo_padding_top', '');
	$organic_market_custom_css .='.logo{';
	$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_logo_padding_top).'px; padding-bottom: '.esc_attr($organic_market_logo_padding_top).'px;';
	$organic_market_custom_css .='}';

	// site left-right logo padding 
	$organic_market_logo_padding_left = get_theme_mod('organic_market_logo_padding_left', '');
	$organic_market_custom_css .='.logo{';
	$organic_market_custom_css .='padding-left: '.esc_attr($organic_market_logo_padding_left).'px; padding-right: '.esc_attr($organic_market_logo_padding_left).'px;';
	$organic_market_custom_css .='}';

	// site top-bottom logo margin 
	$organic_market_logo_margin_top = get_theme_mod('organic_market_logo_margin_top', '');
	$organic_market_custom_css .='.logo{';
	$organic_market_custom_css .='margin-top: '.esc_attr($organic_market_logo_margin_top).'px; margin-bottom: '.esc_attr($organic_market_logo_margin_top).'px;';
	$organic_market_custom_css .='}';

	// site left-right logo margin
	$organic_market_logo_margin_left = get_theme_mod('organic_market_logo_margin_left', '');
	$organic_market_custom_css .='.logo{';
	$organic_market_custom_css .='margin-left: '.esc_attr($organic_market_logo_margin_left).'px; margin-right: '.esc_attr($organic_market_logo_margin_left).'px;';
	$organic_market_custom_css .='}';

	// toggle button color 
	$organic_market_taggle_menu_bg_color_settings = get_theme_mod('organic_market_taggle_menu_bg_color_settings', '');
	$organic_market_custom_css .='.toggle-menu i {';
	$organic_market_custom_css .='background-color:'.esc_attr($organic_market_taggle_menu_bg_color_settings).'';
	$organic_market_custom_css .='}';

	// menu font weight
	$organic_market_menu_weight = get_theme_mod('organic_market_menu_weight');{
	$organic_market_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
	$organic_market_custom_css .='font-weight: '.esc_attr($organic_market_menu_weight).';';
	$organic_market_custom_css .='}';
	}

	// Menu Color Option
	$organic_market_menu_color_settings = get_theme_mod('organic_market_menu_color_settings');
	$organic_market_custom_css .='.primary-navigation ul li a{';
	$organic_market_custom_css .='color: '.esc_attr($organic_market_menu_color_settings).';';
	$organic_market_custom_css .='} ';

	// Menu Hover Color Option
	$organic_market_menu_hover_color_settings = get_theme_mod('organic_market_menu_hover_color_settings');
	$organic_market_custom_css .='.primary-navigation ul li a:hover {';
	$organic_market_custom_css .='color: '.esc_attr($organic_market_menu_hover_color_settings).';';
	$organic_market_custom_css .='} ';

	// Submenu Color Option
	$organic_market_submenu_color_settings = get_theme_mod('organic_market_submenu_color_settings');
	$organic_market_custom_css .='.primary-navigation ul.sub-menu li a {';
	$organic_market_custom_css .='color: '.esc_attr($organic_market_submenu_color_settings).';';
	$organic_market_custom_css .='} ';

	// Submenu Color Option
	$organic_market_submenu_color_settings = get_theme_mod('organic_market_submenu_color_settings');
	$organic_market_custom_css .='.primary-navigation ul.sub-menu li a{';
	$organic_market_custom_css .='color: '.esc_attr($organic_market_submenu_color_settings).';';
	$organic_market_custom_css .='} ';

	// Submenu Hover Color Option
	$organic_market_submenu_hover_color_settings = get_theme_mod('organic_market_submenu_hover_color_settings');
	$organic_market_custom_css .='.primary-navigation ul.sub-menu li a:hover {';
	$organic_market_custom_css .='color: '.esc_attr($organic_market_submenu_hover_color_settings).';';
	$organic_market_custom_css .='} ';

	// product sale padding top /bottom
	$organic_market_sale_padding_top = get_theme_mod('organic_market_sale_padding_top', '');
	$organic_market_custom_css .='.woocommerce ul.products li.product .onsale{';
	$organic_market_custom_css .='padding-top: '.esc_attr($organic_market_sale_padding_top).'px; padding-bottom: '.esc_attr($organic_market_sale_padding_top).'px !important;';
	$organic_market_custom_css .='}';

	// product sale padding top /bottom
	$organic_market_sale_padding_left = get_theme_mod('organic_market_sale_padding_left', '');
	$organic_market_custom_css .='.woocommerce ul.products li.product .onsale{';
	$organic_market_custom_css .='padding-left: '.esc_attr($organic_market_sale_padding_left).'px; padding-right: '.esc_attr($organic_market_sale_padding_left).'px;';
	$organic_market_custom_css .='}';

	/*----Comment title text----*/
	$organic_market_title_comment_form = get_theme_mod('
		organic_market_title_comment_form', 'Leave a Reply');
	if($organic_market_title_comment_form == ''){
	$organic_market_custom_css .='#comments h2#reply-title {';
	$organic_market_custom_css .='display: none;';
	$organic_market_custom_css .='}';
	}

	/*----Comment button text----*/
	$organic_market_comment_form_button_content = get_theme_mod('organic_market_comment_form_button_content', 'Post Comment');
	if($organic_market_comment_form_button_content == ''){
	$organic_market_custom_css .='#comments p.form-submit {';
	$organic_market_custom_css .='display: none;';
	$organic_market_custom_css .='}';
	}

	/*---- Comment form ----*/
	$organic_market_comment_width = get_theme_mod('organic_market_comment_width', '100');
	$organic_market_custom_css .='#comments textarea{';
	$organic_market_custom_css .=' width:'.esc_attr($organic_market_comment_width).'%;';
	$organic_market_custom_css .='}';



	
