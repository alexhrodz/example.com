<?php


/**
 * Enqueue scripts and styles.
 */
function hw_scripts() {
	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css');
	wp_enqueue_style( 'hw-style', get_template_directory_uri() . '/assets/css/main.min.css' );


}
add_action( 'wp_enqueue_scripts', 'hw_scripts' );