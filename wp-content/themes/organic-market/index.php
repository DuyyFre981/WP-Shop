<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package organic-market
 */

get_header(); ?>

<main role="main" id="maincontent" class="our-services">
  <div class="innerlightbox">
	  <div class="container">
      <?php
      $organic_market_left_right = get_theme_mod( 'organic_market_layout_options','Right Sidebar');
      if($organic_market_left_right == 'Left Sidebar'){ ?>
        <div class="row m-0">
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' , get_post_format() ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'organic_market_blog_post_pagination',true) != '') { ?>
          	  <div class="navigation">
                <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'organic-market' ),
                      'next_text'          => __( 'Next page', 'organic-market' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'organic-market' ) . ' </span>',
                  ) );
                ?>
              </div>
            <?php } ?> 
    	    </div>
        </div>
      <?php }else if($organic_market_left_right == 'Right Sidebar'){ ?>
        <div class="row m-0">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' , get_post_format() ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'organic_market_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'organic-market' ),
                      'next_text'          => __( 'Next page', 'organic-market' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'organic-market' ) . ' </span>',
                  ) );
                ?>
              </div>
            <?php } ?>  
          </div>
      	  <div class="col-lg-4 col-md-4">
      			<?php get_sidebar();?>
      	  </div>
        </div>
      <?php }else if($organic_market_left_right == 'One Column'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content' , get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'organic_market_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'organic-market' ),
                    'next_text'          => __( 'Next page', 'organic-market' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'organic-market' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
      <?php }else if($organic_market_left_right == 'Grid Layout'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('row m-0'); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/grid-layout' ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'organic_market_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'organic-market' ),
                    'next_text'          => __( 'Next page', 'organic-market' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'organic-market' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
      <?php } else { ?>
        <div class="row m-0">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' , get_post_format() ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'organic_market_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'organic-market' ),
                      'next_text'          => __( 'Next page', 'organic-market' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'organic-market' ) . ' </span>',
                  ) );
                ?>
              </div>
            <?php } ?>  
          </div>
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
        </div>  
      <?php }?>
		  <div class="clearfix"></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>