<?php

// Load CSS
function script_starter() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
}


add_action( 'wp_enqueue_scripts', 'script_starter' );



?>
