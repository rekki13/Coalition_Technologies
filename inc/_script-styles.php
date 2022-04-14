<?php

add_action( 'admin_enqueue_scripts', 'include_admin' );

function include_admin() {

	// I recommend to add additional conditions just to not to load the scipts on each page

	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}

	wp_enqueue_script( 'uploadlogoscript',
		get_stylesheet_directory_uri() . '/admin/js/admin_script.js',
		array( 'jquery' ) );
	wp_enqueue_style( 'adminstyle',
		get_stylesheet_directory_uri() . '/admin/css/admin_style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_enqueue_style( 'adminstyle',
		get_stylesheet_directory_uri() . '/assets/style/style.css' );
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/assets/scripts/script.js', array( 'jquery' ) );

}

function add_google_fonts() {

	wp_enqueue_style( 'add_google_fonts_bebas',
		'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap',
		false );
	wp_enqueue_style( 'add_google_fonts_open_sans',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap',
		false );
	wp_enqueue_style( 'add_google_fonts_ubuntu',
		'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap',
		false );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );