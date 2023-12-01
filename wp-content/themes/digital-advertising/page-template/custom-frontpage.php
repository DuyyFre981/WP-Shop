<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Digital Advertising
 */
get_header(); ?>

<main id="main" role="main">
  
  <?php if( get_theme_mod( 'digital_advertising_slider_hide_show', false) != ''){ ?>
    <div class="slider-section position-relative">
      <section id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> 
          <?php $digital_advertising_slider_pages = array();
            for ( $count = 1; $count <= 4; $count++ ) {
              $mod = intval( get_theme_mod( 'digital_advertising_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $digital_advertising_slider_pages[] = $mod;
              }
            }
            if( !empty($digital_advertising_slider_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $digital_advertising_slider_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <div class="slider-bgimage">
                           <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Slider.png" alt="" />
                <?php } ?>
              </div>
              <div class="carousel-caption">
                <div class="inner_carousel">
                   <?php if( get_theme_mod('digital_advertising_slider_title',true) != ''){ ?>
                  <h1 class="my-3 p-0"><?php the_title(); ?></h1>
                  <?php }?>
                  <?php if( get_theme_mod('digital_advertising_slider_content',true) != ''){ ?>
                  <p class="mb-3"><?php $digital_advertising_excerpt = get_the_excerpt(); echo esc_html( digital_advertising_string_limit_words( $digital_advertising_excerpt,esc_attr(get_theme_mod('digital_advertising_slider_excerpt_length','20')))); ?></p>
                   <?php }?>
                  <div class="read-btn mt-lg-4">
                    <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html('Get Started', 'digital-advertising'); ?><i class="fas fa-arrow-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html('Get Started', 'digital-advertising'); ?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous','digital-advertising');?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next','digital-advertising');?></span>
          </a>
        </div> 
      </section> 
    </div>
  <?php }?>

  <?php do_action( 'digital_advertising_before_product_section' ); ?>

  <section id="about-section" class="py-5">
    <div class="container">
      <?php $digital_advertising_about_page = array();
        $mod = absint( get_theme_mod( 'digital_advertising_about_page'));
        if ( 'page-none-selected' != $mod ) {
          $digital_advertising_about_page[] = $mod;
        }
        if( !empty($digital_advertising_about_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $digital_advertising_about_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <?php if(has_post_thumbnail()) {?>
                    <div class="image-box position-relative">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  <?php }?>
                </div>
                <div class="col-lg-7 col-md-7">
                  <?php if(get_theme_mod('digital_advertising_section_title') != ''){ ?>
                    <h2><?php echo esc_html(get_theme_mod('digital_advertising_section_title')); ?></h2>
                  <?php }?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php $digital_advertising_excerpt = get_the_excerpt(); echo esc_html( digital_advertising_string_limit_words( $digital_advertising_excerpt, 25)); ?></p>
                  <div class="about-list">
                    <?php $digital_advertising_noof_list = get_theme_mod('digital_advertising_noof_list',2);
                    for ($i=1; $i <= $digital_advertising_noof_list; $i++) { ?>
                      <span class="list mb-3"><i class="fas fa-desktop me-2"></i><?php echo esc_html(get_theme_mod('digital_advertising_about_list_text'.$i));?></span>
                    <?php }?>
                  </div>
                  <div class="read-btn mt-lg-4">
                    <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html('Get In Touch', 'digital-advertising'); ?><i class="fas fa-arrow-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html('Get In Touch', 'digital-advertising'); ?></span>
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </section>

  <?php do_action( 'digital_advertising_after_product_section' ); ?>

  <div id="content-ma">
  	<div class="container">
    	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  	</div>
  </div>
</main>

<?php get_footer(); ?>