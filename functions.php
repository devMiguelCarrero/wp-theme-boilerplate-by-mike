<?php

/**
 * Wp Theme Boilerplate by Mike functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wp_Theme_Boilerplate_by_Mike
 */

if (!defined('TBM_VERSION')) {
	// Replace the version number of the theme on each release.
	define('TBM_VERSION', '1.0.0');
}

define('TBM_TEXTDOMAIN', 'wp-theme-boilerplate-by-mike');
define('TBM_VERSION', '1.0');
define('TBM_SITE_URL', get_site_url() . '/');
define('TBM_ACHIEVEMENTS_PATH', get_template_directory(__FILE__) . DIRECTORY_SEPARATOR);
define('TBM_THEME_URL', get_template_directory_uri(__FILE__) . '/');
define('TBM_INCLUDES_PATH', TBM_ACHIEVEMENTS_PATH . 'inc' . DIRECTORY_SEPARATOR);
define('TBM_APPLICATION_PATH', TBM_INCLUDES_PATH . 'application' . DIRECTORY_SEPARATOR);
define('TBM_UTILITIES_PATH', TBM_INCLUDES_PATH . 'utilities' . DIRECTORY_SEPARATOR);
define('TBM_ENQUEUE_PATH', TBM_APPLICATION_PATH . 'enqueue' . DIRECTORY_SEPARATOR);
define('TBM_CUSTOMIZER_PATH', TBM_APPLICATION_PATH . 'customizer' . DIRECTORY_SEPARATOR);
define('TBM_VIEW_PATH', TBM_APPLICATION_PATH . 'view' . DIRECTORY_SEPARATOR);
define('TBM_WIDGET_PATH', TBM_APPLICATION_PATH . 'widget' . DIRECTORY_SEPARATOR);
define('TBM_THEME_SUPPORT_PATH', TBM_APPLICATION_PATH . 'theme-support' . DIRECTORY_SEPARATOR);
define('TBM_CONFIG_PATH', TBM_INCLUDES_PATH . 'config' . DIRECTORY_SEPARATOR);
define('TBM_HELPERS_PATH', TBM_INCLUDES_PATH . 'helpers' . DIRECTORY_SEPARATOR);
define('TBM_BUILD_PATH', TBM_ACHIEVEMENTS_PATH . 'build' . DIRECTORY_SEPARATOR);
define('TBM_BUILD_URL', TBM_THEME_URL . 'build' . '/');

require_once(TBM_CONFIG_PATH . 'Config.php');
require_once(TBM_HELPERS_PATH . 'Helpers.php');
require_once(TBM_VIEW_PATH . 'View.php');
require_once(TBM_THEME_SUPPORT_PATH . 'ThemeSupport.php');

//Bootstrap 5 Navwalker
require_once(TBM_UTILITIES_PATH . 'bootstrap-5-wordpress-navbar-walker/functions.php');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_theme_boilerplate_by_mike_setup()
{

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Wp Theme Boilerplate by Mike, use a find and replace
		* to change 'wp-theme-boilerplate-by-mike' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('wp-theme-boilerplate-by-mike', get_template_directory() . '/languages');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Primary', 'wp-theme-boilerplate-by-mike'),
		)
	);
}
add_action('after_setup_theme', 'wp_theme_boilerplate_by_mike_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_theme_boilerplate_by_mike_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wp_theme_boilerplate_by_mike_content_width', 640);
}
add_action('after_setup_theme', 'wp_theme_boilerplate_by_mike_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_theme_boilerplate_by_mike_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wp-theme-boilerplate-by-mike'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wp-theme-boilerplate-by-mike'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wp_theme_boilerplate_by_mike_widgets_init');

require_once(TBM_WIDGET_PATH . 'Widget.php');

/**
 * Enqueue scripts and styles.
 */
require_once(TBM_ENQUEUE_PATH . 'Enqueue.php');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require_once TBM_CUSTOMIZER_PATH . 'Customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
