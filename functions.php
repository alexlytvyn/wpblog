<?php
/**
 * Enqueue scripts and styles.
 */
function wpblog_scripts() {
	wp_enqueue_style('wpblog-wp-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('wpblog-custom-style', get_template_directory_uri() . '/css/blog.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wpblog_scripts');

/**
 * Register WP Bootstrap Navwalker
 */
 require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');

 /**
  * Theme Support
  */
	function wpblog_theme_setup() {
		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
		));
	}

	add_action('after_setup_theme', 'wpblog_theme_setup');
