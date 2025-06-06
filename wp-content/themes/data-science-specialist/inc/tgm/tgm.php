<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function data_science_specialist_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'data-science-specialist' ),
			'slug'             => 'contact-form-7',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	data_science_specialist_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'data_science_specialist_register_recommended_plugins' );