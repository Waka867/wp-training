<?php

// Load CSS
function script_starter() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
}


add_action( 'wp_enqueue_scripts', 'script_starter' );





/*
// Register Widget Area / Sidebar
function register_widget_area() {
	$args = [
		'Test Sidebar',
		'test-sidebar',
		'This sidebar is a test put together by Led',
		'',
		'',
		'',
		'',
		''
	];

	register_sidebar( $args );
}

add_action( 'widgets_init', 'register_widget_area' );
 */



// Setup Widget Areas
function wptags_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'wptags' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'wptags' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'wptags_widgets_init' );


?>
