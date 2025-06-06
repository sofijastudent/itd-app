<?php
/**
 * Data Science Specialist functions and definitions
 *
 * @package data_science_specialist
 * @since 1.0
 */

if ( ! function_exists( 'data_science_specialist_support' ) ) :
	function data_science_specialist_support() {

		load_theme_textdomain( 'data-science-specialist', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

	 add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	 /* Theme Credit link */
	define('DATA_SCIENCE_SPECIALIST_BUY_NOW',__('https://www.cretathemes.com/products/machine-learning-wordpress-theme','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_PRO_DEMO',__('https://pattern.cretathemes.com/data-science-specialist/','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/data-science-specialist/','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/data-science-specialist/','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_SUPPORT',__('https://wordpress.org/support/theme/data-science-specialist','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_REVIEW',__('https://wordpress.org/support/theme/data-science-specialist/reviews/#new-post','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','data-science-specialist'));
	define('DATA_SCIENCE_SPECIALIST_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','data-science-specialist'));

		

	}
endif;
add_action( 'after_setup_theme', 'data_science_specialist_support' );


if ( ! function_exists( 'data_science_specialist_styles' ) ) :
	function data_science_specialist_styles() {
		// Register theme stylesheet.
		$data_science_specialist_theme_version = wp_get_theme()->get( 'Version' );

		$data_science_specialist_version_string = is_string( $data_science_specialist_theme_version ) ? $data_science_specialist_theme_version : false;
		wp_enqueue_style(
			'data-science-specialist-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$data_science_specialist_version_string
		);

		wp_enqueue_script( 'data-science-specialist-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'data-science-specialist-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		//homepage slider
		wp_enqueue_style('data-science-specialist-swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), $data_science_specialist_version_string);

		wp_enqueue_script('data-science-specialist-swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), $data_science_specialist_version_string, true);
	}
endif;

add_action( 'wp_enqueue_scripts', 'data_science_specialist_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';


// Add Getstart admin notice
function data_science_specialist_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'data_science_specialist_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_data-science-specialist-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Data Science Specialist Theme!', 'data-science-specialist'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=data-science-specialist-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'data-science-specialist'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'data-science-specialist'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'data-science-specialist'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'data-science-specialist'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?data_science_specialist_admin_notice=1"><?php esc_html_e( 'Dismiss', 'data-science-specialist' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'data_science_specialist_admin_notice' );

if( ! function_exists( 'data_science_specialist_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function data_science_specialist_update_admin_notice(){
    if ( isset( $_GET['data_science_specialist_admin_notice'] ) && $_GET['data_science_specialist_admin_notice'] = '1' ) {
        update_option( 'data_science_specialist_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'data_science_specialist_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'data_science_specialist_getstart_setup_options');
function data_science_specialist_getstart_setup_options () {
    update_option('data_science_specialist_admin_notice', FALSE );
}


function data_science_specialist_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'data_science_specialist_google_fonts' );