<?php
/**
 * Twenty Five functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Five
 * @since Twenty Five 1.0
 */

if ( ! function_exists( 'twentyfive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*
* Create your own twentysixteen_setup() function to override in a child theme.
*
* @since Twenty Sixteen 1.0
*/
function twentyfive_setup(){
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 0, true );
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'twentyfive' ),
			'social'  => __( 'Social Links Menu', 'twentyfive' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
	) );
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
	) );
}
endif; // twentyfive_setup
add_action( 'after_setup_theme', 'twentyfive_setup' );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentyfive_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Sidebar', 'twentyfive' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfive' ),
			'before_widget' => '<section id="%1$s" class="widget box box-white %2$s">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<div class="title"><h3>',
			'after_title'   => '</h3></div><div class="body">',
	) );

	register_sidebar( array(
			'name'          => __( 'Content Bottom 1', 'twentyfive' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentyfive' ),
			'before_widget' => '<section id="%1$s" class="widget box box-white %2$s">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<div class="title"><h3>',
			'after_title'   => '</h3></div><div class="body">',
	) );

	register_sidebar( array(
			'name'          => __( 'Content Bottom 2', 'twentyfive' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentyfive' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfive_widgets_init' );

//面包屑
include("inc/breadcrumbs.php");

include 'inc/wp-bootstrap-navwalker.php';
