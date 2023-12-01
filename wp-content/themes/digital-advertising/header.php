<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package Digital Advertising
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('digital_advertising_preloader_hide',false)!= '' || get_theme_mod('digital_advertising_responsive_preloader_hide',false) != ''){ ?>
    <?php if(get_theme_mod( 'digital_advertising_preloader_type','center-square') == 'center-square'){ ?>
	    <div class='preloader'>
		    <div class='preloader-squares'>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
		    </div>
			</div>
    <?php }else if(get_theme_mod( 'digital_advertising_preloader_type') == 'chasing-square') {?>    
      <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'digital-advertising' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'digital-advertising' );?></span></a>
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-11 col-md-11">
						<?php if(get_theme_mod('digital_advertising_show_topbar',false) == true) {?>
					  	<div class="topbar">
				  			<div class="row">
				  				<div class="offset-lg-2 col-lg-3 offset-md-4 col-md-4 align-self-center contact text-center">
				  					<?php if(get_theme_mod('digital_advertising_topbar_phoneno') != ''){?>
				  						<i class="fas fa-phone me-2"></i><span><?php echo esc_html('Phone:', 'digital-advertising'); ?></span> <a href="tel:<?php echo esc_attr(get_theme_mod('digital_advertising_topbar_phoneno')); ?>"><?php echo esc_html(get_theme_mod('digital_advertising_topbar_phoneno')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digital_advertising_topbar_phoneno')); ?></span></a>
				  					<?php }?>
				  				</div>
				  				<div class="col-lg-3 col-md-4 align-self-center contact px-md-0 text-md-start text-center">
				  					<?php if(get_theme_mod('digital_advertising_topbar_email') != ''){?>
				  						<i class="fas fa-envelope me-2"></i><span><?php echo esc_html('Email:', 'digital-advertising'); ?></span> <a href="mailto:<?php echo esc_attr(get_theme_mod('digital_advertising_topbar_email')); ?>"><?php echo esc_html(get_theme_mod('digital_advertising_topbar_email')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digital_advertising_topbar_email')); ?></span></a>
				  					<?php }?>
				  				</div>
				  				<div class="offset-lg-0 col-lg-4 offset-md-4 col-md-8 align-self-center contact text-lg-start text-center py-lg-0 py-2">
				  					<?php if(get_theme_mod('digital_advertising_topbar_location') != ''){?>
				  						<i class="fas fa-map-marker-alt me-2"></i><span><?php echo esc_html('Location:', 'digital-advertising'); ?></span> <span><?php echo esc_html(get_theme_mod('digital_advertising_topbar_location')); ?></span>
				  					<?php }?>
				  				</div>
				  			</div>
					  	</div>
					  <?php }?>
					  <div class="middle-header">
				  		<div class="row me-md-0">
				  			<div class="col-lg-2 col-md-4 col-9 align-self-center position-relative">
				  				<div class="logo text-md-center text-start">
						     	 	<?php if ( has_custom_logo() ) : ?>
					     	    	<div class="site-logo"><?php the_custom_logo(); ?></div>
				            <?php endif; ?>
				            <?php if( get_theme_mod( 'digital_advertising_site_title',true) != '') { ?>
					            <?php $blog_info = get_bloginfo( 'name' ); ?>
					            <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
						              <h1 class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						            <?php else : ?>
						              <p class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
					            <?php endif; ?>
						        <?php }?>
						        <?php if( get_theme_mod( 'digital_advertising_site_tagline',true) != '') { ?>
					            <?php
					            $description = get_bloginfo( 'description', 'display' );
					            if ( $description || is_customize_preview() ) :
					            ?>
						            <p class="site-description">
						              <?php echo esc_html($description); ?>
						            </p>
					            <?php endif; ?>
						        <?php }?>
							    </div>
				  			</div>
				  			<div class="col-lg-8 col-md-5 col-3 align-self-center">
				  				<div class="menubox <?php if( get_theme_mod( 'digital_advertising_sticky_header') != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?> ps-lg-5">
										<?php if(has_nav_menu('primary')){ ?>
									   	<div class="toggle-menu responsive-menu text-end">
						           	<button role="tab" onclick="digital_advertising_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('digital_advertising_responsive_open_menu_icon','fas fa-bars'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','digital-advertising'); ?></span></button>
						         	</div>
						         	<div id="menu-sidebar" class="nav side-menu">
						            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'digital-advertising' ); ?>">
						              <?php 
						                wp_nav_menu( array( 
						                  'theme_location' => 'primary',
						                  'container_class' => 'main-menu-navigation clearfix' ,
						                  'menu_class' => 'clearfix',
						                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 p-0">%3$s</ul>',
						                  'fallback_cb' => 'wp_page_menu',
						                ) ); 
						              ?>
						              <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="digital_advertising_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('digital_advertising_responsive_close_menu_icon','fas fa-times'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','digital-advertising'); ?></span></a>
						            </nav>
						        	</div>
						      	<?php }?>
						      </div>
				  			</div>
				  			<div class="col-lg-2 col-md-3 quote-btn align-self-center text-md-end text-center">
				  				<?php if(get_theme_mod('digital_advertising_quote_btn_text') != '' || get_theme_mod('digital_advertising_quote_btn_url') != '') {?>
				  					<a href="<?php echo esc_url(get_theme_mod('digital_advertising_quote_btn_url')); ?>"><?php echo esc_html(get_theme_mod('digital_advertising_quote_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digital_advertising_quote_btn_text')); ?></span></a>
				  				<?php }?>
				  			</div>
				  		</div>
					  </div>
					</div>
					<div class="col-lg-1 col-md-1 align-self-center">
						<?php if(get_theme_mod('digital_advertising_facebook_url') != '' || get_theme_mod('digital_advertising_twitter_url') != '' || get_theme_mod('digital_advertising_linkedin_url') != '' || get_theme_mod('digital_advertising_instagram_url') != ''){ ?>
							<div class="share-icon position-relative mt-md-0 mt-3">
		        		<button type="button" onclick="digital_advertising_social_show()"><i class="fas fa-share-alt"></i></button>
			        	<div class="social-icon text-md-start text-center">
		  						<?php if(get_theme_mod('digital_advertising_facebook_url') != ''){ ?>
		  							<a href="<?php echo esc_url(get_theme_mod('digital_advertising_facebook_url')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'digital-advertising'); ?></span></a>
		  						<?php }?>
		  						<?php if(get_theme_mod('digital_advertising_twitter_url') != ''){ ?>
		  							<a href="<?php echo esc_url(get_theme_mod('digital_advertising_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'digital-advertising'); ?></span></a>
		  						<?php }?>
		  						<?php if(get_theme_mod('digital_advertising_linkedin_url') != ''){ ?>
		  							<a href="<?php echo esc_url(get_theme_mod('digital_advertising_linkedin_url')); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php echo esc_html('Linkedin', 'digital-advertising'); ?></span></a>
		  						<?php }?>
		  						<?php if(get_theme_mod('digital_advertising_instagram_url') != ''){ ?>
		  							<a href="<?php echo esc_url(get_theme_mod('digital_advertising_instagram_url')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'digital-advertising'); ?></span></a>
		  						<?php }?>
		  					</div>
		        	</div>
		        <?php }?>
						<div class="search-box">
	        		<button type="button" onclick="digital_advertising_search_show()"><i class="fas fa-search"></i></button>
	        	</div>
		        <div class="search-outer">
		          <div class="serach_inner">
		          	<?php get_search_form(); ?>
		          </div>
		        	<button type="button" class="closepop" onclick="digital_advertising_search_hide()">X</button>
		        </div>
	        </div>
				</div>
			</div>
		</div>
	</header>