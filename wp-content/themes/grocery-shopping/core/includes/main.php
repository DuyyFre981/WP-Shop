<?php

add_action( 'admin_menu', 'grocery_shopping_getting_started' );
function grocery_shopping_getting_started() {
	add_theme_page( esc_html__('Get Started', 'grocery-shopping'), esc_html__('Get Started', 'grocery-shopping'), 'edit_theme_options', 'grocery-shopping-guide-page', 'grocery_shopping_test_guide');
}

function grocery_shopping_admin_enqueue_scripts() {
	wp_enqueue_style( 'grocery-shopping-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'grocery_shopping_admin_enqueue_scripts' );

if ( ! defined( 'GROCERY_SHOPPING_DOCS_FREE' ) ) {
define('GROCERY_SHOPPING_DOCS_FREE',__('https://www.misbahwp.com/docs/grocery-shopping-free-docs/','grocery-shopping'));
}
if ( ! defined( 'GROCERY_SHOPPING_DOCS_PRO' ) ) {
define('GROCERY_SHOPPING_DOCS_PRO',__('https://www.misbahwp.com/docs/grocery-shopping-pro-docs','grocery-shopping'));
}
if ( ! defined( 'GROCERY_SHOPPING_BUY_NOW' ) ) {
define('GROCERY_SHOPPING_BUY_NOW',__('https://www.misbahwp.com/themes/grocery-store-wordpress-theme/','grocery-shopping'));
}
if ( ! defined( 'GROCERY_SHOPPING_SUPPORT_FREE' ) ) {
define('GROCERY_SHOPPING_SUPPORT_FREE',__('https://wordpress.org/support/theme/grocery-shopping','grocery-shopping'));
}
if ( ! defined( 'GROCERY_SHOPPING_REVIEW_FREE' ) ) {
define('GROCERY_SHOPPING_REVIEW_FREE',__('https://wordpress.org/support/theme/grocery-shopping/reviews/#new-post','grocery-shopping'));
}
if ( ! defined( 'GROCERY_SHOPPING_DEMO_PRO' ) ) {
define('GROCERY_SHOPPING_DEMO_PRO',__('https://www.misbahwp.com/demo/grocery-shopping/','grocery-shopping'));
}

function grocery_shopping_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( GROCERY_SHOPPING_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'grocery-shopping' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'grocery-shopping' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( GROCERY_SHOPPING_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'grocery-shopping' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( GROCERY_SHOPPING_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'grocery-shopping' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','grocery-shopping'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'grocery-shopping'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','grocery-shopping'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','grocery-shopping'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','grocery-shopping'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','grocery-shopping'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'grocery-shopping' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','grocery-shopping'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( GROCERY_SHOPPING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'grocery-shopping' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( GROCERY_SHOPPING_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'grocery-shopping' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( GROCERY_SHOPPING_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'grocery-shopping' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
