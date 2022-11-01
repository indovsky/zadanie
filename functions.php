<?php
/**
 * specialspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package specialspace
 */

require_once('Bootstrap_Nav_Walker.php');
require_once('Repository/Post.php');
require_once('Repository/Page.php');
require_once('Models/Post.php');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function special_space_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on specialspace, use a find and replace
		* to change 'special-space' to the name of your theme in all the template files.
		*/
	// load_theme_textdomain( 'special-space', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		[
			'menu-1' => esc_html__( 'Primary', 'special-space' )
		]
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'special_space_custom_background_args',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
			]
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	// ACF options page
	if( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(
			[
				'page_title'	=>	'Ustawienia globalne',
				'menu_title'	=>	'Ustawienia globalne',
				'menu_slug'	=>	'global-settings'
			]
		);
	}

}
add_action( 'after_setup_theme', 'special_space_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function special_space_widgets_init(): void
{
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'special-space' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'special-space' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'special_space_widgets_init' );

// register compiled js and css with theme
function enqueue_webpack_scripts(): void
{
	$cssFilePath = glob( get_template_directory() . '/dist/main.min.*.css' );
	$cssFileURI = get_template_directory_uri() . '/dist/' . basename($cssFilePath[0]);
	wp_enqueue_style( 'main_css', $cssFileURI );
	
	$jsFilePath = glob( get_template_directory() . '/dist/main.min.*.js' );
	$jsFileURI = get_template_directory_uri() . '/dist/' . basename($jsFilePath[0]);
	wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
	  
}
add_action( 'wp_enqueue_scripts', 'enqueue_webpack_scripts' );

// Turn off comments on media attachments
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

function render_site_menu(): void
{
	wp_nav_menu([
		'theme_location' => 'menu-1',
		'container' => false,
		'menu_class' => '',
		'fallback_cb' => '__return_false',
		'items_wrap' => '<ul id="%1$s" class="navbar__menu %2$s">%3$s</ul>',
		'depth' => 2,
		'walker' => new Bootstrap_Nav_Walker()
	]);
}

function get_current_page_id(): int
{
	return get_queried_object_id();
}

function get_site_header_background(): string
{
	$current_page = get_current_page_id();

	if( has_post_thumbnail( $current_page ) ) {
		return 'background-image: url('.esc_attr( esc_url( get_the_post_thumbnail_url( $current_page, 'full' ) ) ).');';
	}

	return 'background-color: #efefef;';
}

/**
 * @return string Build uri for the file in target directory
 */
function get_assets_uri( string $target, string $file ): string
{
	return esc_url( get_template_directory_uri() . '/' . $target . '/' . $file );
}


/**
 * Dump and die
 */
function dd( $var )
{
	echo "<pre>";
    print_r($var);
    exit;
}
  