<?php
/**
 * Under LTE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Under_LTE
 */

if ( ! function_exists( 'under_lte_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function under_lte_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Under LTE, use a find and replace
		 * to change 'under-lte' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'under-lte', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'under-lte' ),
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
		add_theme_support( 'custom-background', apply_filters( 'under_lte_custom_background_args', array(
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
add_action( 'after_setup_theme', 'under_lte_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function under_lte_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'under_lte_content_width', 640 );
}
add_action( 'after_setup_theme', 'under_lte_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function under_lte_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'under-lte' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'under-lte' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<li class="header">',
		'after_title'   => '</li>',
	) );
}
add_action( 'widgets_init', 'under_lte_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function under_lte_scripts() {
    wp_enqueue_style( 'under-lte-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'under-lte-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'under-lte-ionicons', '//cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-9/css/ionicons.min.css' );
    wp_enqueue_style( 'under-lte-adminlte', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css' );
    wp_enqueue_style( 'under-lte-skin', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css' );
    wp_enqueue_style( 'under-lte-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic' );
	wp_enqueue_style( 'under-lte-style', get_stylesheet_uri() );

	wp_enqueue_script( 'under-lte-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'under-lte-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-fastclick', '//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-adminlte', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-sparkline', '//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-jvectormap', '//cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.js', array(), '20151215', true );
    wp_enqueue_script( 'under-lte-slimscroll', '//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js', array(), '20151215', true );    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'under_lte_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add theme options.
 */
function under_lte_navswatch() {
    add_option('color');
    add_action('admin_menu', 'option_menu_create');
    function option_menu_create() {
        add_theme_page(esc_attr__( 'Theme Options' ), esc_attr__( 'Theme Options' ), 'edit_themes', basename(__FILE__), 'option_page_create');
    }
    function option_page_create() {
        $saved = under_lte_save_option();
        require TEMPLATEPATH.'/admin-option.php';
    }
}
function under_lte_save_option() {
    if (empty($_REQUEST['color'])) return;
    $save = update_option('color', $_REQUEST['color']);
    return $save;
}
add_action('init', 'under_lte_navswatch');
