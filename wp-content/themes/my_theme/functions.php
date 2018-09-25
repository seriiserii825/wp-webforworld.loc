<?php

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function my_theme() {
	wp_enqueue_style( 'my_theme_zerogrid', get_template_directory_uri().'/assets/css/zerogrid.css' );
	wp_enqueue_style( 'my_theme_menu', get_template_directory_uri().'/assets/css/menu.css' );
	// wp_enqueue_style( 'my_theme_lightbox', get_template_directory_uri().'/assets/css/lightbox.css' );
	wp_enqueue_style( 'my_theme_font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );

	wp_enqueue_script( 'my_theme_jquery', get_template_directory_uri().'/assets/js/jquery1111.min.js', array( ), false, false );
	wp_enqueue_script( 'my_theme_script', get_template_directory_uri().'/assets/js/script.js', array( 'jquery' ), false, false );
	// wp_enqueue_script( 'my_theme_lightbox', get_template_directory_uri().'/assets/js/lightbox-plus-jquery.min.js', array( 'jquery' ), false, false );
}
add_action( 'wp_enqueue_scripts', 'my_theme' );


register_nav_menu( 'header-menu', 'меню в шапке' );