<?php
/**
 * Block Styles
 *
 * @package data_science_specialist
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function data_science_specialist_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'data-science-specialist-padding-0',
				'label' => esc_html__( 'No Padding', 'data-science-specialist' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'data-science-specialist-post-author-card',
				'label' => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'data-science-specialist-button',
				'label'        => esc_html__( 'Plain', 'data-science-specialist' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'data-science-specialist-post-comments',
				'label'        => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'data-science-specialist-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'data-science-specialist-wp-table',
				'label'        => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'data-science-specialist-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'data-science-specialist-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'data-science-specialist' ),
			)
		);
	}
	add_action( 'init', 'data_science_specialist_register_block_styles' );
}
