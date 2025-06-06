<?php
/**
 * Block Patterns
 *
 * @package data_science_specialist
 * @since 1.0
 */

function data_science_specialist_register_block_patterns() {
	$data_science_specialist_block_pattern_categories = array(
		'data-science-specialist' => array( 'label' => esc_html__( 'Data Science Specialist', 'data-science-specialist' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'data-science-specialist' ) ),
	);

	$data_science_specialist_block_pattern_categories = apply_filters( 'data_science_specialist_data_science_specialist_block_pattern_categories', $data_science_specialist_block_pattern_categories );

	foreach ( $data_science_specialist_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'data_science_specialist_register_block_patterns', 9 );