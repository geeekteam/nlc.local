<?php
/**
 * nlc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nlc
 */

if ( ! function_exists( 'nlc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nlc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nlc, use a find and replace
	 * to change 'nlc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nlc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'nlc' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nlc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'nlc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nlc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nlc_content_width', 640 );
}
add_action( 'after_setup_theme', 'nlc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nlc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nlc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nlc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nlc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nlc_scripts() {
	wp_enqueue_style( 'nlc-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nlc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nlc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nlc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function print_arr($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}


function buildTree($elements, $parentId = 0) {
    $branch = array();

    foreach ($elements as $element) {

        if ($element->menu_item_parent == $parentId) {
            $children = buildTree($elements, $element->ID);
            if ($children) {
                $element->sub = $children;
            }
            $branch[] = $element;
        }
    }

    return $branch;
}

function get_post_by_slug($slug){
    $posts = get_posts(array(
        'name' => $slug,
    ));

    return $posts[0];
}

function get_custom_cat_template($single_template) {
    global $post;
    if ( in_category( 'news' )) {
        $single_template = dirname( __FILE__ ) . '/single-news.php';
    }
    if ( in_category( 'blog' )) {
        $single_template = dirname( __FILE__ ) . '/single-blog.php';
    }
    if ( in_category( 'instagram' )) {
        $single_template = dirname( __FILE__ ) . '/single-instagram.php';
    }
    return $single_template;
}

add_filter( "single_template", "get_custom_cat_template" ) ;

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});