<?php
/**
 * buddhist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package buddhist
 */

if ( ! function_exists( 'buddhist_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function buddhist_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on buddhist, use a find and replace
		 * to change 'buddhist' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'buddhist', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'buddhist' ),
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
		add_theme_support( 'custom-background', apply_filters( 'buddhist_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'buddhist_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buddhist_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'buddhist_content_width', 640 );
}
add_action( 'after_setup_theme', 'buddhist_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function buddhist_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'buddhist' ),
		'id'            => 'footer_one',
		'description'   => esc_html__( 'Add widgets here.', 'buddhist' ),
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		
	) );
}
add_action( 'widgets_init', 'buddhist_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function buddhist_scripts() {
	wp_enqueue_style( 'buddhist-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',false,'1.1','all');
   
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css',false,'1.1','all');

	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/flaticon/flaticon.css',false,'1.1','all');
   
	wp_enqueue_style( 'jquery.animatedheadline', get_template_directory_uri() . '/assets/css/jquery.animatedheadline.css',false,'1.1','all');
   
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css',false,'1.1','all');
   
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',false,'1.1','all');
     
	wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',false,'1.1','all');
	
	wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/css/animate.min.css',false,'1.1','all');
	
	wp_enqueue_style( 'jquery.datepicker', get_template_directory_uri() . '/assets/css/jquery.datepicker.css',false,'1.1','all');
	
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css',false,'1.1','all');
	
	wp_enqueue_style( 'slicknav.min', get_template_directory_uri() . '/assets/css/slicknav.min.css',false,'1.1','all');
	
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.css',false,'1.1','all');
	
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css',false,'1.1','all');
	
  
   
   //Script Start
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.2', true );
 
	wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'jquery.animatedheadline.min', get_template_directory_uri() . '/assets/js/jquery.animatedheadline.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'jquery.slicknav.min', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'jquery.datepicker.min', get_template_directory_uri() . '/aassets/js/jquery.datepicker.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'jquery.nice-select.min', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'waypoints-min', get_template_directory_uri() . '/assets/js/waypoints-min.js', array(), '1.2', true );
	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.2', true );
	
   
   
}
add_action( 'wp_enqueue_scripts', 'buddhist_scripts' );

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
 * Custom Post type File.
 */
require get_template_directory() . '/inc/post_type.php';

 
 // Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

