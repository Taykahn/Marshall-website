<?php
/**
 * Functions
 */

//Require included files
require_once STYLESHEETPATH . '/includes/mbc-theme-class.php';
require_once STYLESHEETPATH . '/includes/post-types.php';
require_once STYLESHEETPATH . '/includes/mbc-hooks.php';


/**
 * Load theme styles and scripts
 *
 * @add_action wp_enqueue_scripts
 *
 * @return void
 */
function mbc_scripts() {

global $wp_scripts;
	wp_enqueue_style      ( 'mbc_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style      ( 'mbc_main_css',      get_template_directory_uri() . '/css/app.css' );
	wp_register_script    ( 'html5_shiv',    'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
	wp_register_script    ( 'respond_js',    'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data ( 'html5_shiv',    'conditional', 'lt IE 9' );
	$wp_scripts->add_data ( 'respond_js',    'conditional', 'lt IE 9' );
	wp_enqueue_script     ( 'bootstrap_js',  get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script     ( 'app_min_js',  get_template_directory_uri() . '/js/app.min.js', array('jquery'), '', true );
	wp_enqueue_script     ( 'app_js',  get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'mbc_scripts' );

add_filter( 'show_admin_bar', '__return_false' );

add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles() {

	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );

	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');

}

/**
 * add menus
 */
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

/**
 * Add Options Page ACF 
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Portfolio Chevron',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/**
 * add widgets
 */

function wpb_widgets_init() {
 
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'wpb' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
 
	register_sidebar( array(
		'name'          =>__( 'Front page sidebar', 'wpb'),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	}
 
add_action( 'widgets_init', 'wpb_widgets_init' );


add_theme_support( 'post-thumbnails' );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function my_acf_init() {
	acf_update_setting('google_api_key', 'xxx');
}

add_action('acf/init', 'my_acf_init');



?>