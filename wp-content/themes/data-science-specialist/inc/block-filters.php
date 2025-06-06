<?php
/**
 * Block Filters
 *
 * @package data_science_specialist
 * @since 1.0
 */

function data_science_specialist_block_wrapper( $data_science_specialist_block_content, $data_science_specialist_block ) {

	if ( 'core/button' === $data_science_specialist_block['blockName'] ) {
		
		if( isset( $data_science_specialist_block['attrs']['className'] ) && strpos( $data_science_specialist_block['attrs']['className'], 'has-arrow' ) ) {
			$data_science_specialist_block_content = str_replace( '</a>', data_science_specialist_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $data_science_specialist_block_content );
			return $data_science_specialist_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $data_science_specialist_block['blockName'] ) {
			if( 'post_tag' === $data_science_specialist_block['attrs']['term'] ) {
				$data_science_specialist_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $data_science_specialist_block_content );
			}

			if( 'category' ===  $data_science_specialist_block['attrs']['term'] ) {
				$data_science_specialist_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $data_science_specialist_block_content );
			}
			return $data_science_specialist_block_content;
		}
		if ( 'core/post-date' === $data_science_specialist_block['blockName'] ) {
			$data_science_specialist_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $data_science_specialist_block_content );
			return $data_science_specialist_block_content;
		}
		if ( 'core/post-author' === $data_science_specialist_block['blockName'] ) {
			$data_science_specialist_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $data_science_specialist_block_content );
			return $data_science_specialist_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $data_science_specialist_block['blockName'] ) {
			if( isset( $data_science_specialist_block['attrs']['type'] ) && 'previous' === $data_science_specialist_block['attrs']['type'] ) {
				$data_science_specialist_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $data_science_specialist_block_content );
			}
			else {
				$data_science_specialist_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . data_science_specialist_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $data_science_specialist_block_content );
			}
			return $data_science_specialist_block_content;
		}
		if ( 'core/post-date' === $data_science_specialist_block['blockName'] ) {
            $data_science_specialist_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . data_science_specialist_get_svg( array( 'icon' => 'calendar' ) ), $data_science_specialist_block_content );
            return $data_science_specialist_block_content;
        }
		if ( 'core/post-author' === $data_science_specialist_block['blockName'] ) {
            $data_science_specialist_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . data_science_specialist_get_svg( array( 'icon' => 'user' ) ), $data_science_specialist_block_content );
            return $data_science_specialist_block_content;
        }

	}
    return $data_science_specialist_block_content;
}
	
add_filter( 'render_block', 'data_science_specialist_block_wrapper', 10, 2 );
