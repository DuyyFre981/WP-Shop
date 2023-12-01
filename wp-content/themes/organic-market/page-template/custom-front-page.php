<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'organic_market_above_slider' ); ?>
  
  <?php if( get_theme_mod( 'organic_market_slider_hide', false) != '' || get_theme_mod( 'organic_market_responsive_slider', false) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('organic_market_slider_speed_option', 3000)); ?>">
        <?php $organic_market_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'organic_market_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $organic_market_slider_pages[] = $mod;
            }
          }
          if( !empty($organic_market_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $organic_market_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel text-start">
                  <?php if( get_theme_mod('organic_market_slider_title_Show_hide',true) != ''){ ?>
                    <h1 class="m-0"><?php the_title(); ?></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('organic_market_slider_content_Show_hide',true) != ''){ ?>
                    <p><?php $organic_market_excerpt = get_the_excerpt(); echo esc_html( organic_market_string_limit_words( $organic_market_excerpt, esc_attr(get_theme_mod('organic_market_slider_excerpt_length','20')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('organic_market_slider_button','Read More') != ''){ ?>
                    <div class="readbtn my-md-3">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('organic_market_slider_button','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('organic_market_slider_button','Read More'));?></span></a>
                    </div>
                  <?php } ?>
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
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','organic-market' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','organic-market' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'organic_market_below_slider' ); ?>

  <?php do_action( 'organic_market_above_work_section' ); ?>

  <?php if( get_theme_mod('organic_market_title') != '' || get_theme_mod('organic_market_section_text') != '' || get_theme_mod( 'organic_market_setting' )!= '' || get_theme_mod( 'organic_market_best_seller_title' )!= '' || get_theme_mod( 'organic_market_best_seller_text' )!= '' || get_theme_mod( 'organic_market_product_category' )!= ''){ ?>
    <section id="best-seller" class="py-5">
      <div class="container">
        <div class="product-head text-center mb-5">
          <?php if( get_theme_mod('organic_market_title') != ''){ ?>
            <h2><?php echo esc_html(get_theme_mod('organic_market_title')); ?></h2>
          <?php } ?>
          <?php if( get_theme_mod('organic_market_section_text') != ''){ ?>
            <p><?php echo esc_html(get_theme_mod('organic_market_section_text')); ?></p>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <?php
              $organic_market_postData1=  get_theme_mod('organic_market_setting');
              if($organic_market_postData1){
                $args = array( 'name' => esc_html($organic_market_postData1 ,'organic-market'));
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="post-sec">
                      <?php
                        $content = apply_filters( 'the_content', get_the_content() );
                        $video = false;
                        // Only get video from the content if a playlist isn't present.
                        if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                          $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                        }
                      ?>
                      <?php
                        if ( ! is_single() ) {
                          // If not a single post, highlight the video file.
                          if ( ! empty( $video ) ) {
                            foreach ( $video as $video_html ) {
                              echo '<div class="entry-video">';
                                echo $video_html;
                              echo '</div>';
                            }
                          } else {
                            the_post_thumbnail();
                          }
                        }; 
                      ?>
                    </div>
                  <?php endwhile; 
                  wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
              endif; }?>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="seller-head">
              <?php if( get_theme_mod('organic_market_best_seller_title') != ''){ ?>
                <h3><?php echo esc_html(get_theme_mod('organic_market_best_seller_title')); ?></h3>
              <?php } ?>
              <?php if( get_theme_mod('organic_market_best_seller_text') != ''){ ?>
                <p><?php echo esc_html(get_theme_mod('organic_market_best_seller_text')); ?></p>
              <?php } ?>
            </div>
            <?php if(class_exists('woocommerce')){ ?>
              <div id="selling">
                <?php 
                  $args = array( 
                    'post_type' => 'product',
                    'product_cat' => get_theme_mod('organic_market_product_category'),
                    'order' => 'ASC'
                  );
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="product-box">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 align-self-center">
                          <div class="product-image">
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-8 align-self-center">
                          <h4><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                          <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                          <div class="pro-button">
                            <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                          </div>
                        </div>
                      </div>
                    </div> 
                  <?php endwhile;
                  wp_reset_postdata();
                ?>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'organic_market_below_work_section' ); ?>

  <div id="content">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>