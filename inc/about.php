<?php
/**
 * Theme About Page
 *
 * @package Landscaper
 * @since 1.0
 */

function landscaper_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_landscaper-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'landscaper-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'landscaper_theme_page_admin_style' );

/**
 * Add theme page
 */
function landscaper_menu() {
	add_theme_page( esc_html__( 'Landscaper Theme Info', 'landscaper' ), esc_html__( 'Landscaper Theme Info', 'landscaper' ), 'edit_theme_options', 'landscaper-theme', 'landscaper_theme_page_display' );
}
add_action( 'admin_menu', 'landscaper_menu' );

/**
 * Display About page
 */
function landscaper_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p>Free Full Site Editing WordPress Theme</p>
				<div class="logo-panel">
					<a href="https://risingthemes.net/"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3>Getting Started with Landscaper!</h3>
							<p>Awesome! Landscaper has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.</p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3>More Features with Landscaper Pro Theme</h3>
							<p>To get more features and unique home page sections, we recommend you activate the Landscaper Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.</p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://risingthemes.net/shop/landscaper-wordpress-theme/">Buy Landscaper Pro</a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3>Important Links</h3>
						<a target="_blank" href="https://risingthemes.net/shop/landscaper-wordpress-theme/">Theme Info</a>
						<a target="_blank" href="http://risingthemesdemo.net/landscaper/">View Demo</a>
						<a target="_blank" href="https://risingthemes.net/forums/">Support</a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3>Leave us a review</h3>
						<p>Loved Landscaper? Feel free to leave your feedback. Your opinion helps us reach more audiences!</p>
						<a href="https://wordpress.org/support/theme/landscaper/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank">Review</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
