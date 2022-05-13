<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {

    // Styles
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/scss/custom.css', array(), '', 'all');
	wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style'],'1.0.0');
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css', array(), '1.8.0', 'all');

    // Scripts
    wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', 'true');
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
