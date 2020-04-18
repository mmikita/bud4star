<?php
require_once('wp_bootstrap_navwalker.php');


if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('bud4star_setup')): 
    function bud4star_setup()
    {
    
        load_theme_textdomain('bud4star', get_template_directory() . '/languages');
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
      
        add_theme_support('title-tag');
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menuPrimary' => esc_html__('Menu główne', 'bud4star')
        ));
        
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ));
        
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('bud4star_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => ''
        )));
        
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true
        ));
    }
endif;
add_action('after_setup_theme', 'bud4star_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bud4star_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('bud4star_content_width', 640);
}
add_action('after_setup_theme', 'bud4star_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bud4star_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'bud4star'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'bud4star'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'bud4star_widgets_init');






function globalSettings()
{
    include(get_template_directory() . '/styles.php');
}

function bud4Settings($wp_customize)
{
    //ustawienia globalne
    $wp_customize->add_section('globalSettings', array(
        'title' => 'Ustawienia globalne',
        'priority' => 1
    ));
    $wp_customize->add_setting('contentWidth', array(
        'default' => '1200'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contentWidth-control', array(
        'label' => 'szerokość contentu (px)',
        'section' => 'globalSettings',
        'settings' => 'contentWidth'
    )));
    
    //logo i menu  
    require get_template_directory() . '/functions/logoMenu.php';
    



    $wp_customize->add_section('slider', array(
        'title' => 'Slider',
        'priority' => 3
    ));

    $wp_customize->add_setting('slderTextSize', array(
        'default' => 'col-xs-12 col-sm-5 offset-sm-7'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slderTextSize', array(
        'label' => 'slider - treść - kolumny',
        'section' => 'slider',
        'settings' => 'slderTextSize'
    )));




}
function bud4star_scripts()
{
    
    wp_enqueue_script('bud4star-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
    wp_enqueue_script('bud4star-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(
        'jquery'
    ), NULL, true);
    wp_enqueue_style('bud4star-style', get_stylesheet_uri(), array(), _S_VERSION);
    
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false, NULL, 'all');
    
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function enqueue_my_AdminScripts()
{
    wp_enqueue_script('tinyMCE', get_template_directory_uri() . '/js/tinyMCE.js', array(), _S_VERSION, true);
    wp_enqueue_script('adminScripts', get_template_directory_uri() . '/js/adminScripts.js', array(), _S_VERSION, true);
}



add_action('wp_enqueue_scripts', 'bud4star_scripts');
add_action('customize_register', 'bud4Settings');
add_action('wp_head', 'globalSettings');
add_action('admin_enqueue_scripts', 'enqueue_my_AdminScripts');



add_action('customize_register', function($wp_customize)
{
    $header_text_controls = array_filter(array(
        $wp_customize->get_control('blogname'),
        $wp_customize->get_control('blogdescription')
    ));
    foreach ($header_text_controls as $control) {
        $control->active_callback = function($control)
        {
            $setting = $control->manager->get_setting('header_textcolor');
            if (!$setting) {
                return true;
            }
            return 'blank' !== $setting->value();
        };
    }
}, 11);
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php'; // Create Slider Post Type
require(get_template_directory() . '/inc/slider_post_type.php');
require(get_template_directory() . '/inc/slider.php');

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

require_once('inc/sliderSetting.php');