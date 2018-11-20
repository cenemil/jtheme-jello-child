<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Elementor hello theme child functions

// Theme styles & scripts here
add_action( 'wp_enqueue_scripts', 'custom_hello_theme_scripts' );
function custom_hello_theme_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}