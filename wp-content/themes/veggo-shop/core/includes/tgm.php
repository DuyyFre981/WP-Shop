<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function veggo_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'veggo-shop' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	veggo_shop_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'veggo_shop_register_recommended_plugins' );