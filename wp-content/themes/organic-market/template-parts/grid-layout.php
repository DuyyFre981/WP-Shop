<?php
/**
 * The template part for displaying grid post
 *
 * @package organic-market
 * @subpackage organic-market
 * @since organic-market 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<div class="col-lg-4 col-md-4">
  <article class="page-box">
    <?php if( get_theme_mod( 'organic_market_show_featured_image_post',true) != '') { ?>
      <div class="box-img">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php } ?>
    <div class="new-text">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'organic_market_date_hide',true) != '' || get_theme_mod( 'organic_market_comment_hide',true) != '' || get_theme_mod( 'organic_market_author_hide',true) != '' || get_theme_mod( '
        organic_market_time_hide',true) != '') { ?>
        <div class="metabox">
          <?php if( get_theme_mod( 'organic_market_date_hide',true) != '') { ?>
            <span class="entry-date"><i class="fa fa-calendar"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('organic_market_metabox_separator_blog_post') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'organic_market_comment_hide',true) != '') { ?>
            <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','organic-market'), __('0 Comments','organic-market'), __('% Comments','organic-market') ); ?></span><?php echo esc_html( get_theme_mod('organic_market_metabox_separator_blog_post') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'organic_market_author_hide',true) != '') { ?>
            <span class="entry-author"><i class="fa fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('organic_market_metabox_separator_blog_post') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'organic_market_time_hide',false) != '') { ?>
            <span class="entry-time"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php }?>
      <div class="entry-content"><p><?php $organic_market_excerpt = get_the_excerpt(); echo esc_html( organic_market_string_limit_words( $organic_market_excerpt, esc_attr(get_theme_mod('organic_market_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('organic_market_post_suffix_option','...') ); ?></p></div>
      <?php if( get_theme_mod('organic_market_button_text','READ MORE') != ''){ ?>
        <div class="read-more-btn">
          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('organic_market_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('organic_market_button_text','READ MORE'));?></span></a>
        </div>
      <?php }?>
    </div>
    <div class="clearfix"></div>
  </article>
</div>