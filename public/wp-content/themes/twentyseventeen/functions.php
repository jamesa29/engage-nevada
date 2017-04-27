<?php

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style(
	 'bootstrap', 
	  get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	// Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );
	

	// Load the html5 shiv.
	wp_enqueue_script(
	 'bootstrap', 
	  get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery') );
	
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );