<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package organic-market
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">

    <!-- preloader -->
    <?php if(get_theme_mod('organic_market_preloader_option',true)!= '' || get_theme_mod('organic_market_responsive_preloader', true) != ''){ ?>
      <?php if(get_theme_mod('organic_market_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('organic_market_preloader_type_options', 'Preloader 2') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'organic-market' ); ?></a>

    <div id="header">
      <?php if( get_theme_mod('organic_market_display_topbar',false) != ''){ ?>
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-5 align-self-center d-md-flex">
                <?php if(class_exists('GTranslate')){ ?> 
                  <div class="translate-lang">
                    <?php echo do_shortcode( '[gtranslate]' );?>
                  </div>
                <?php }?>
                <?php if( defined( 'WPWHAM_CURRENCY_SWITCHER_VERSION' )) {?>
                  <div class="currency-box">
                    <?php echo do_shortcode( '[woocommerce_currency_switcher_drop_down_box]' );?>
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-6 col-md-7 align-self-center">
                <?php if(get_theme_mod('organic_market_topbar_text') != ''){?>
                  <p class="topbar-text mb-0 text-lg-center text-md-end text-center"><?php echo esc_html(get_theme_mod('organic_market_topbar_text')); ?></p>
                <?php }?>
              </div>
              <div class="col-lg-3 col-md-12 align-self-center">
                <?php if( get_theme_mod( 'organic_market_facebook_url') != '' || get_theme_mod( 'organic_market_twitter_url') != '' || get_theme_mod( 'organic_market_linkedin_url') != '' || get_theme_mod( 'organic_market_instagram_url') != '' || get_theme_mod( 'organic_market_youtube_url') != '') { ?>
                  <div class="social-icons text-lg-end text-center">
                    <span><?php echo esc_html('Social Icons: ', 'organic-market'); ?></span>
                    <?php if( get_theme_mod( 'organic_market_facebook_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'organic_market_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','organic-market' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'organic_market_twitter_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'organic_market_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','organic-market' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'organic_market_linkedin_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'organic_market_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','organic-market' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'organic_market_instagram_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'organic_market_instagram_url','' ) ); ?>"><span class="screen-reader-text"><?php esc_html_e( 'Instagram','organic-market' );?></span><i class="fab fa-instagram"></i></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'organic_market_youtube_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'organic_market_youtube_url','' ) ); ?>"><i class="fab fa-youtube m-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','organic-market' );?></span></a>
                    <?php } ?>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      <div class="container position-relative">
        <div class="bottom-header">
          <div class="row">
            <div class="col-lg-3 col-md-5 align-self-center">
              <div class="logo">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('organic_market_site_title',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title text-uppercase pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                  <?php if( get_theme_mod('organic_market_tagline',true) != ''){ ?>
                    <p class="site-description m-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
            <div class="<?php if(get_theme_mod('organic_market_purchase_btn_text') != '' || get_theme_mod('organic_market_purchase_btn_url') != '') {?> col-lg-5 <?php } else {?> col-lg-6 <?php }?> col-md-7  align-self-center px-lg-0">
              <?php if(get_theme_mod('organic_market_search_option',true) != ''){ ?>
                <div class="search-cat d-md-flex">
                  <?php if(class_exists('woocommerce')){ ?>   
                    <div class="product-cat-box">
                      <button class="product-btn"><?php esc_html_e('All Categories','organic-market'); ?><i class="fas fa-chevron-down ms-2"></i></button>
                      <div class="product-cat">
                        <?php
                          $args = array(
                            'orderby'    => 'title',
                            'order'      => 'ASC',
                            'hide_empty' => 0,
                            'parent'  => 0
                          );
                          $product_categories = get_terms( 'product_cat', $args );
                          $count = count($product_categories);
                          if ( $count > 0 ){
                              foreach ( $product_categories as $product_category ) {
                                $product_cat_id   = $product_category->term_id;
                                $cat_link = get_category_link( $product_cat_id );
                                if ($product_category->category_parent == 0) { ?>
                              <li class="drp_dwn_menu p-2"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
                              <?php
                            }
                            echo esc_html( $product_category->name ); ?></a></li>
                        <?php } } ?>
                      </div>
                    </div>
                  <?php }?>
                  <div class="search-box">
                    <?php get_search_form(); ?>
                  </div>
                </div>  
              <?php }?>
            </div>
            <div class="<?php if(get_theme_mod('organic_market_purchase_btn_text') != '' || get_theme_mod('organic_market_purchase_btn_url') != '') {?> col-lg-4 <?php } else {?> col-lg-3 <?php }?> col-md-12 align-self-center woo-icons text-lg-end text-center">
              <?php if(class_exists('woocommerce')){ ?>
                <div class="login-account">
                  <?php if ( is_user_logged_in() ) { ?>
                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e( 'MY ACCOUNT','organic-market' );?><span class="screen-reader-text"><?php esc_html_e( 'MY ACCOUNT','organic-market' );?></span></a>
                  <?php }
                  else { ?>
                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('LOGIN/REGISTER','organic-market'); ?><span class="screen-reader-text"><?php esc_html_e( 'LOGIN/REGISTER','organic-market' );?></span></a>
                  <?php } ?>
                </div>
              <?php }?>
              <div class="wishlist">
                <?php if(defined('YITH_WCWL')){ ?>
                  <a class="wishlist_view position-relative" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>"><i class="fas fa-heart"></i>
                  <?php $wishlist_count = YITH_WCWL()->count_products(); ?>
                  <span class="wishlist-counter"><?php echo $wishlist_count; ?></span></a>
                <?php }?>
              </div>
              <?php if(class_exists('woocommerce')){ ?>
                <div class="cart_no">
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','organic-market' ); ?>"><i class="fas fa-shopping-bag"></i><span class="screen-reader-text"><?php esc_html_e( 'shopping cart','organic-market' );?></span></a>
                  <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
                </div>
              <?php }?>
              <?php if(get_theme_mod('organic_market_purchase_btn_text') != '' || get_theme_mod('organic_market_purchase_btn_url') != '') {?>
                <a href="<?php echo esc_url(get_theme_mod('organic_market_purchase_btn_url')); ?>" class="purchase-btn"><?php echo esc_html(get_theme_mod('organic_market_purchase_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('organic_market_purchase_btn_text')); ?></span></a>
              <?php }?>
            </div>
          </div>
          <div class="menu-section">
            <div class="row">
              <div class="col-lg-9 col-md-8 col-3 align-self-center">
                <?php 
                  if(has_nav_menu('primary')){ ?>
                  <div class="toggle-menu mobile-menu">
                    <button class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','organic-market'); ?></span></button>
                  </div>
                <?php }?>
                <div class="main-menu <?php if( get_theme_mod( 'organic_market_sticky_header', false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
                  <div id="menu-sidebar" class="nav sidebar text-center">
                    <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'organic-market' ); ?>">
                      <?php 
                        if(has_nav_menu('primary')){ 
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        } 
                      ?>
                    </nav>
                    <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','organic-market'); ?></span></a>
                  </div>
                </div>
              </div>
              <?php if(get_theme_mod('organic_market_phone_number') != '') {?>
                <div class="col-lg-3 col-md-4 col-9 align-self-center text-end phone">
                  <span class="me-2"><?php echo esc_html('Call:', 'organic-market'); ?> <a href="tel:<?php echo esc_attr(get_theme_mod('organic_market_phone_number')); ?>"><?php echo esc_html(get_theme_mod('organic_market_phone_number')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('organic_market_phone_number')); ?></span></a></span>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>