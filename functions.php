<?php
/**
 * Functions and definitions
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */

 /**
  * Set the content width based on the theme's design and stylesheet.
  *
  * @since agencyforcewp 1.0
  */
 if ( ! isset( $content_width ) ) {
 	$content_width = 1140;
 }


 if ( ! function_exists( 'agencyforcewp_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  *
  */
 function agencyforcewp_setup() {

 	/*
 	 * Make theme available for translation.
 	 * Translations can be filed in the /languages/ directory.
 	 */
 	load_theme_textdomain('agencyforcewp', get_template_directory() . '/languages');

 	/*
     * Add default posts and comments RSS feed links to head.
     */
 	add_theme_support( 'automatic-feed-links' );

 	/*
 	 * Enable custom logo
 	 */
 	add_theme_support( 'custom-logo', array(
 		'height'      => 50,
        'width'       => 210,
 		'flex-height' => true,
 		'flex-width'  => true,
 		'header-text' => array( 'site-title', 'site-description' ),
 	) );

 	/*
 	 * Enable support for Post Thumbnails on posts and pages.
 	 * & custom image sizes
 	 *
 	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 	 */
 	add_theme_support( 'post-thumbnails' );
 	set_post_thumbnail_size( 1060, 560 ); // default size
 	add_image_size( 'agencyforcewp-post-thumb', 1060, 560 ); // post-thumb

 	/*
 	 * Let WordPress manage the document title.
 	 * By adding theme support, we declare that this theme does not use a
 	 * hard-coded <title> tag in the document head, and expect WordPress to
 	 * provide it for us.
 	 */
 	add_theme_support( 'title-tag' );

 	/*
 	 * Switch default core markup for search form, comment form, and comments
 	 * to output valid HTML5.
 	 */
 	add_theme_support( 'html5', array(
 		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
 	) );

 	/*
     * menu register
     */
 	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'agencyforcewp' ) );

 }
endif; // agencyforcewp setup
add_action( 'after_setup_theme', 'agencyforcewp_setup' );

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */

function afwp_widgets_areas() {
	// Blog sidebar widget area
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'agencyforcewp' ),
		'id'            => 'agencyforcewp_primary_sidebar',
		'description'   => __( 'Add widgets here.', 'agencyforcewp' ),
		'before_widget' => '<div id="%1$s" class="af-post-sidebar-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'afwp_widgets_areas' );

/*
 * TGM Required Plugins Activation
 * Sends a push message "to install required plugins" after theme activation
 */
require_once get_template_directory() . '/assets/inc/tgm/required-plugins.php';

/*
 * Register Customizer Options
 * for Kirki Framework
 */
if ( class_exists('Kirki') ) {
    require_once get_template_directory() . '/assets/inc/customizer.php';
}

/*
 * Register site scripts
 * css, js, google fonts
 */
require_once get_template_directory() . '/assets/inc/enqueqe.php';

/*
 * Dynamic CSS
 * Overrides main style.css via theme options
 */
require_once get_template_directory() . '/assets/inc/override-css.php';
