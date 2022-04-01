<?php

/**
 * Setup theme
 */
function boccog_theme_setup() {

	register_nav_menus(
		array(
			'main-nav'   => __( 'Main Menu', 'bocco-group' ),
			'footer-nav' => __( 'Footer Menu', 'bocco-group' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_theme_support( 'widgets' );

	add_theme_support( 'widgets-block-editor' );

	add_image_size( 'custom', 1920, 900, array( 'center', 'center' ) );

}
add_action( 'after_setup_theme', 'boccog_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function boccog_theme_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer Widgets',
			'id'            => 'footer_widgets',
			'before_widget' => '<div id="%1$s" class="col-12 col-sm-6 col-md-6 col-lg-6 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'boccog_theme_widgets_init' );

/**
 * Enqueue styles and scripts
 */
function boccog_theme_enqueue_styles() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	if ( ! is_admin() ) :
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
		wp_register_style( 'googleFonts', 'fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null );
	endif;

}
add_action( 'wp_enqueue_scripts', 'boccog_theme_enqueue_styles' );

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses    wp_check_filetype()        https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses    in_array()                http://php.net/manual/en/function.in-array.php
 */
function boccog_sanitize_image( $file, $setting ) {

	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
	);

	// Check file type from file name
	$file_ext = wp_check_filetype( $file, $mimes );

	// If file has a valid mime type return it, otherwise return default
	return ( $file_ext['ext'] ? $file : $setting->default );
}

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/theme-customizer.php';

// Custom navigation walker.
require get_template_directory() . '/inc/custom-nav-walker.php';


function console_log($output, $with_script_tags = true) {
	$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
	if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
	}
	echo $js_code;
}