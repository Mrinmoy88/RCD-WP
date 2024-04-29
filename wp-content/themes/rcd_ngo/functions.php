<?php

/**
 * rcd_ngo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rcd_ngo
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rcd_ngo_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rcd_ngo, use a find and replace
		* to change 'rcd_ngo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('rcd_ngo', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'rcd_ngo'),
			'menu-2' => esc_html__('Secondary', 'rcd_ngo'),
			'menu-3' => esc_html__('Tertiary', 'rcd_ngo'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rcd_ngo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'rcd_ngo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rcd_ngo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('rcd_ngo_content_width', 640);
}
add_action('after_setup_theme', 'rcd_ngo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rcd_ngo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'rcd_ngo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'rcd_ngo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'rcd_ngo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function rcd_ngo_scripts()
{
	wp_enqueue_style('rcd_ngo-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('rcd_ngo-style', 'rtl', 'replace');

	wp_enqueue_script('rcd_ngo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'rcd_ngo_scripts');

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

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

function get_nav_menu_item_children($parent_id, $nav_menu_items, $depth = true)
{
	$nav_menu_item_list = array();
	foreach ((array) $nav_menu_items as $nav_menu_item) {
		if ($nav_menu_item->menu_item_parent == $parent_id) {
			$nav_menu_item_list[] = $nav_menu_item;
			if ($depth) {
				if ($children = get_nav_menu_item_children($nav_menu_item->ID, $nav_menu_items))
					$nav_menu_item_list = array_merge($nav_menu_item_list, $children);
			}
		}
	}
	return $nav_menu_item_list;
}

add_theme_support('site-icon');

function Service_list()
{
	$args = array(
		'post_type' => 'service', // Replace 'your_post_type' with your actual post type slug
		'posts_per_page' => -1,
		'order' => 'DESC',
		'orderby' => 'date',  // Sort by date
	);

	$posts = get_posts($args);

	$options = '<option value="No service chosen">Choose a service required for your child! (Optional)</option>';

	foreach ($posts as $post) {
		$thumbnail = get_the_post_thumbnail($post->ID, 'thumbnail'); // Get the post thumbnail
		$options .= '<option value="' . $post->ID . '">' . $post->post_title . '</option>';
	}

	$select_html = '<select required name="services" class="form-select wpcf7-form-control wpcf7-text wpcf7-validates-as-required">' . $options . '</select>';

	return  $select_html;
}
add_shortcode('Service_list', 'Service_list');
