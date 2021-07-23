<?php

/**
 * JunYong functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JunYong
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('junyong_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function junyong_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JunYong, use a find and replace
		 * to change 'junyong' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('junyong', get_template_directory() . '/languages');

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
				'menu-1' => esc_html__('Primary', 'junyong'),
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
				'junyong_custom_background_args',
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
endif;
add_action('after_setup_theme', 'junyong_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function junyong_content_width()
{
	$GLOBALS['content_width'] = apply_filters('junyong_content_width', 640);
}
add_action('after_setup_theme', 'junyong_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function junyong_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'junyong'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'junyong'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'junyong_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function junyong_scripts()
{
	// wp_enqueue_style( 'junyong-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('junyong-main', get_template_directory_uri() . '/css/main.min.css');
	wp_style_add_data('junyong-style', 'rtl', 'replace');

	//For the widget posts pagination
	wp_enqueue_script("script-for-post-pagination", get_template_directory_uri() . '/js/post-container.js', array('jquery'));
	wp_localize_script('script-for-post-pagination', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

	//Main js
	wp_enqueue_script("script-for-navbar-scroll", get_template_directory_uri() . '/js/main.js', array('jquery'));

	//Js for the bootstrap dropdown
	wp_enqueue_script("script-for-bootstrap", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));


	wp_enqueue_script('junyong-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'junyong_scripts');


/**
 * Custom Fonts
 */
function enqueue_custom_fonts()
{
	if (!is_admin()) {
		wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');
		wp_enqueue_style('montserrat');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');


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

//Ajax call to return posts
add_action('wp_ajax_get_posts_for_front_page', 'get_posts_for_front_page');
add_action('wp_ajax_nopriv_get_posts_for_front_page', 'get_posts_for_front_page');
function get_posts_for_front_page()
{
	$page = sanitize_text_field($_POST['page']);
	$posts_per_page = sanitize_text_field($_POST['posts_per_page']);

	$args = [
		'posts_per_page'             => $posts_per_page,
		'paged'                     => $page,
		'post_type'                 => 'post'
	];

	$post_query = new WP_Query($args);

	while ($post_query->have_posts()) : $post_query->the_post();

		echo '<div class="col-md-3 col-6  mb-3">' .
			'<div class="flip-in-ver-right card h-100" onclick="document.location=\'' . get_the_permalink() . '\'">';
		//Thumbnail
		if (has_post_thumbnail()) {
			echo the_post_thumbnail(
				'medium' .
					['class' => 'row']
			);
		} else {
			echo "No thumbnail";
		}

		echo '<div class="card-body">';
		echo the_title('<h6 class="card-title">', '</h6>');
		echo '<p class="card-text d-none d-lg-block">' . wp_trim_words(get_the_excerpt(), 30) . '</p>' .
			'</div>
		</div>
	</div>';
	endwhile;
	wp_reset_postdata();

	die();
}

add_action('customize_register', 'add_contact_form');
function add_contact_form($wp_customize) {

	$wp_customize->add_section( 'contact_form' , array(
		'title'      => __( 'Contact Form', 'mytheme' ),
		'priority'   => 30,
	) );

	$wp_customize->add_setting( 'contact_form_shortcode', array(
	'default' => '',
	'capability' => 'edit_theme_options'
	) );
   
	$wp_customize->add_control( 'contact_form_shortcode', array(
	'label' => 'Contact Form Shortcode',
	'section' => 'contact_form',
	'type' => 'text'
	) );
   }


//Disable unused pages
add_action('template_redirect', 'disable_pages');
function disable_pages()
{
    if(is_tag() || is_category() || is_date() || is_author())
    {
        global $wp_query;
        $wp_query->set_404();
    }
}