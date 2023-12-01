<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('grocery-shopping-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('grocery-shopping-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('grocery_shopping_footer_text') ) { ?>
              <a target="_blank" href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-grocery-wordpress-theme/', 'grocery-shopping' )); ?>" target="_blank">
              <?php esc_html_e('Grocery WordPress Theme','grocery-shopping'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('grocery_shopping_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('grocery_shopping_copyright_enable', true) == true ) : ?>
            <?php
            /* translators: %s: Misbah WP */
            printf( esc_html__( 'by %s', 'grocery-shopping' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'grocery-shopping' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'grocery-shopping' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
    <?php if ( get_theme_mod('grocery_shopping_scroll_enable_setting', true) == true ) : ?>
      <div class="scroll-up">
        <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
      </div>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
