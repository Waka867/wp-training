
<?php


// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );






// Load CSS
function wphierarchy_enqueue_styles() {
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], array(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );









// Create and load custom post type
function portfolio_post_type_init() {
	register_post_type('portfolio', array(
	       	'labels' 	=> array(
                	'name' 		=> __( 'Portfolio' ),
                	'singular_name' => __( 'Portfolio' )
            	),
		'description' 	=> 'This is a test.',
		'show_ui'	=> true,
		'show_in_menu'	=> true,
		'public' => true
	));
}
// Connect action to the theme set-up hook
add_action('init', 'portfolio_post_type_init');








// Register Menu Locations
register_nav_menus( 
	[
		'main-menu' => esc_html__( 'Main Menu', 'wphierarchy' ),
	]
);






// Setup Widget Areas
function wphierarchy_widgets_init() {
	register_sidebar([
		'name' 		=> esc_html__( 'Main Sidebar', 'wphierarchy' ),
		'id'		=> 'main-sidebar',
		'description' 	=> esc_html__( 'Add Widgets for main sidebar here', 'wphierarchy' ),
		'before_widget'	=> '<section class="widget">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after-title'	=> '</h2>'	
	]);
	register_sidebar([
		'name' 		=> esc_html__( 'Derp Footer Area', 'wphierarchy' ),
		'id'		=> 'derp-footer-area',
		'description' 	=> esc_html__( 'Add Widgets for Derp sidebar here', 'wphierarchy' ),
		'before_widget'	=> '<section class="widget">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after-title'	=> '</h2>'	
	]);
}

add_action( 'widgets_init', 'wphierarchy_widgets_init' );


?>
