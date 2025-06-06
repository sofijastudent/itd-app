<?php
add_action( 'admin_menu', 'data_science_specialist_getting_started' );
function data_science_specialist_getting_started() {
	add_theme_page( esc_html__('Get Started', 'data-science-specialist'), esc_html__('Get Started', 'data-science-specialist'), 'edit_theme_options', 'data-science-specialist-guide-page', 'data_science_specialist_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function data_science_specialist_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'data_science_specialist_admin_theme_style');

//guidline for about theme
function data_science_specialist_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'data-science-specialist' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'data-science-specialist'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'data-science-specialist'); ?></a>
						<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'data-science-specialist'); ?></a>
						<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'data-science-specialist'); ?></a>
						<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'data-science-specialist'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'data-science-specialist'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'data-science-specialist'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'data-science-specialist'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'data-science-specialist'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'data-science-specialist'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'data-science-specialist'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'data-science-specialist'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'data-science-specialist'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'data-science-specialist'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'data-science-specialist'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'data-science-specialist');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'data-science-specialist');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'data-science-specialist');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'data-science-specialist');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'data-science-specialist');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'data-science-specialist'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'data-science-specialist'); ?><strong><?php esc_html_e('Extra 20%', 'data-science-specialist'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'data-science-specialist'); ?><strong><?php esc_html_e('“HEAT20”', 'data-science-specialist'); ?></strong></p>
					<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For $86', 'data-science-specialist'); ?></a>
				</div>
				<div class="pro-boxes">
					<h4><?php esc_html_e('Data Science Specialist Pro', 'data-science-specialist'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'data-science-specialist'); ?><strong><?php esc_html_e('Extra 25%', 'data-science-specialist'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'data-science-specialist'); ?><strong><?php esc_html_e('“SUMMER25”', 'data-science-specialist'); ?></strong></p>
					<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro', 'data-science-specialist'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'data-science-specialist'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( DATA_SCIENCE_SPECIALIST_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'data-science-specialist'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>