<?php

function custom_theme_assets() {
	// CSS
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'beranda', get_template_directory_uri() . '/assets/css/beranda.css' );
	wp_enqueue_style( 'katalog', get_template_directory_uri() . '/assets/css/katalog.css' );
	wp_enqueue_style( 'tentangkami', get_template_directory_uri() . '/assets/css/tentangkami.css' );
	wp_enqueue_style( 'artikel', get_template_directory_uri() . '/assets/css/artikel.css' );

	// JS
	wp_enqueue_script( 'style', get_template_directory_uri() . '/style.js' );
	wp_enqueue_script( 'beranda', get_template_directory_uri() . '/assets/js/beranda.js' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );