<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package organic-market
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="middle-align">
			<h1><?php echo esc_html(get_theme_mod('organic_market_title_404_page',__('404 Not Found','organic-market')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('organic_market_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','organic-market')));?></p>
			<?php if( get_theme_mod('organic_market_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button px-3 py-2"><?php echo esc_html(get_theme_mod('organic_market_button_404_page',__('Back to Home Page','organic-market')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('organic_market_button_404_page',__('Back to Home Page','organic-market')));?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>