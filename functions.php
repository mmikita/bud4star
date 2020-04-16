<?php
require_once('wp_bootstrap_navwalker.php');
/**
 * bud4star functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bud4star
 */

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
    $wp_customize->add_section('logo_i_menu', array(
        'title' => 'Logo i menu',
        'priority' => 2
    ));
    $wp_customize->add_setting('logo_src');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, '
        logo_settings', array(
        'label' => 'Grafika logo',
        'section' => 'logo_i_menu',
        'settings' => 'logo_src'
    )));
    
    
    $wp_customize->add_setting('logoSize', array(
        'default' => '100'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'logoSize', array(
        'label' => 'wielkosc logo',
        'section' => 'logo_i_menu',
        'settings' => 'logoSize'
    )));
    
    $wp_customize->add_setting('upperSectionColor', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'upperSectionColor', array(
        'label' => 'Kolor górnej sekcji',
        'section' => 'logo_i_menu',
        'settings' => 'upperSectionColor'
    )));
    $wp_customize->add_setting('logo_bootstrap_columns', array(
        'default' => 'col-xs-12 col-sm-3'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapLogoColumns', array(
        'label' => '- logo - kolumny bootstrap i inne klasy',
        'section' => 'logo_i_menu',
        'settings' => 'logo_bootstrap_columns'
    )));
    $wp_customize->add_setting('menu_bootstrap_columns', array(
        'default' => 'col-xs-12 col-md-9'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapMenuColumns', array(
        'label' => 'menu - kolumny bootstrap i inne klasy',
        'section' => 'logo_i_menu',
        'settings' => 'menu_bootstrap_columns'
    )));
    
    $wp_customize->add_setting('primaryMenuFontSize', array(
        'default' => '15'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primaryMenuFontSize', array(
        'label' => 'wielkość czcionki menu(px)',
        'section' => 'logo_i_menu',
        'settings' => 'primaryMenuFontSize'
    )));
    
    $wp_customize->add_setting('primaryMenuUpper', array(
        'default' => false
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primaryMenuUpper', array(
        'label' => 'Duże litery w menu?',
        'section' => 'logo_i_menu',
        'type' => 'checkbox',
        'settings' => 'primaryMenuUpper'
    )));
    
    $wp_customize->add_setting('bootstrapMenuFont', array(
        'default' => false
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapMenuFont', array(
        'label' => 'Zmienny font dla przedziałów bootstrap',
        'section' => 'logo_i_menu',
        'settings' => 'bootstrapMenuFont',
        'type' => 'checkbox'
    )));
    
    $wp_customize->add_setting('xs-menufont', array(
        'default' => 0
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-menufont', array(
        'label' => 'menu font xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-menufont'
    )));
    
    $wp_customize->add_setting('sm-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-menufont', array(
        'label' => 'menu font sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-menufont'
    )));
    
    $wp_customize->add_setting('md-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-menufont', array(
        'label' => 'menu font md',
        'section' => 'logo_i_menu',
        'settings' => 'md-menufont'
    )));
    
    $wp_customize->add_setting('lg-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-menufont', array(
        'label' => 'menu font lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-menufont'
    )));
    $wp_customize->add_setting('xl-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-menufont', array(
        'label' => 'menu font xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-menufont'
    )));
    
    $wp_customize->add_setting('hamburgerPrimary', array(
        'default' => "sm"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hamburger', array(
        'type' => 'radio',
        'label' => 'hamburger od',
        'section' => 'logo_i_menu',
        'settings' => 'hamburgerPrimary',
        'choices' => array(
            'navbar-expand' => __('bez'),
            'navbar-expand-sm' => __('xs'),
            'navbar-expand-md' => __('sm'),
            'navbar-expand-lg' => __('md')
        )
    )));
    $wp_customize->add_setting('menuHoverColor', array(
        'default' => '#0a7db8'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menuHoverColor', array(
        'label' => 'pozycja menu aktywnego elementu i po najechaniu',
        'section' => 'logo_i_menu',
        'settings' => 'menuHoverColor'
    )));
    
    
    
    
    
    $wp_customize->add_setting('mainSpaceBetweenPrimary', array(
        'default' => '10'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mainSpaceBetweenPrimary', array(
        'label' => 'odstępy między pozycjami',
        'section' => 'logo_i_menu',
        'settings' => 'mainSpaceBetweenPrimary'
    )));
    
    
    
    $wp_customize->add_setting('spaceBetweenPrimaryBoot', array(
        'default' => false
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'spaceBetweenPrimaryBoot', array(
        'label' => 'Zmienne odstępy między pozycjami  dla bootstrap?(px)',
        'section' => 'logo_i_menu',
        'settings' => 'spaceBetweenPrimaryBoot',
        'type' => 'checkbox'
    )));
    
    $wp_customize->add_setting('xs-spaceBetweenPrimary', array(
        'default' => 0
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-spaceBetweenPrimary', array(
        'label' => 'odstęp xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('sm-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-spaceBetweenPrimary', array(
        'label' => 'odstęp sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('md-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-spaceBetweenPrimary', array(
        'label' => 'odstęp md',
        'section' => 'logo_i_menu',
        'settings' => 'md-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('lg-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-spaceBetweenPrimary', array(
        'label' => 'odstęp lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-spaceBetweenPrimary'
    )));
    $wp_customize->add_setting('xl-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-spaceBetweenPrimary', array(
        'label' => 'odstęp xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-spaceBetweenPrimary'
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

add_action('wp_enqueue_scripts', 'bud4star_scripts');
add_action('customize_register', 'bud4Settings');
add_action('wp_head', 'globalSettings');



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





// Create Slider
 
function wptuts_slider_template() {
 
    // Query Arguments
    $args = array(
        'post_type' => 'slides',
        'posts_per_page' => 5
    );  

    // The Query
    $the_query = new WP_Query( $args );

    // Check if the Query returns any posts
    if ( $the_query->have_posts() ) {

        // Start the Slider ?>
        <div class="flexslider">
            <ul class="slides">

                <?php
                // The Loop
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>

                    <?php // Check if there's a Slide URL given and if so let's a link to it
                    if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                        <a href="<?php echo esc_url( get_post_meta( get_the_id(), 'wptuts_slideurl', true) ); ?>">
                    <?php }

                    // The Slide's Image
                    echo the_post_thumbnail();

                    // Close off the Slide's Link if there is one
                    if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                        </a>
                    <?php } ?>

                    </li>
                <?php endwhile; ?>

            </ul><!-- .slides -->
        </div><!-- .flexslider -->

    <?php }

    // Reset Post Data
    wp_reset_postdata();
}








































// Meta Box for Slider URL

$slidelink_2_metabox = array(
    'id' => 'slidelink',
    'title' => 'Slide Link',
    'page' => array(
        'slides'
    ),
    'context' => 'normal',
    'priority' => 'default',
    'fields' => array(
        
        
        array(
            'name' => 'Slide URL',
            'desc' => '',
            'id' => 'wptuts_slideurl',
            'class' => 'wptuts_slideurl',
            'type' => 'text',
            'rich_editor' => 0,
            'max' => 0
        )
    )
);

add_action('admin_menu', 'wptuts_add_slidelink_2_meta_box');
function wptuts_add_slidelink_2_meta_box()
{
    
    global $slidelink_2_metabox;
    
    foreach ($slidelink_2_metabox['page'] as $page) {
        add_meta_box($slidelink_2_metabox['id'], $slidelink_2_metabox['title'], 'wptuts_show_slidelink_2_box', $page, 'normal', 'default', $slidelink_2_metabox);
    }
}

// function to show meta boxes
function wptuts_show_slidelink_2_box()
{
    global $post;
    global $slidelink_2_metabox;
    global $wptuts_prefix;
    global $wp_version;
    
    // Use nonce for verification
    echo '<input type="hidden" name="wptuts_slidelink_2_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    
    echo '<table class="form-table">';
    
    foreach ($slidelink_2_metabox['fields'] as $field) {
        // get current post meta data
        
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>', '<th style="width:20%"><label for="', $field['id'], '">', stripslashes($field['name']), '</label></th>', '<td class="wptuts_field_type_' . str_replace(' ', '_', $field['type']) . '">';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" /><br/>', '', stripslashes($field['desc']);
                break;
        }
        echo '<td>', '</tr>';
    }
    
    echo '</table>';
}

// Save data from meta box
add_action('save_post', 'wptuts_slidelink_2_save');
function wptuts_slidelink_2_save($post_id)
{
    global $post;
    global $slidelink_2_metabox;
    
    // verify nonce
    if (!wp_verify_nonce($_POST['wptuts_slidelink_2_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    
    foreach ($slidelink_2_metabox['fields'] as $field) {
        
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        
        if ($new && $new != $old) {
            if ($field['type'] == 'date') {
                $new = wptuts_format_date($new);
                update_post_meta($post_id, $field['id'], $new);
            } else {
                if (is_string($new)) {
                    $new = $new;
                }
                update_post_meta($post_id, $field['id'], $new);
                
                
            }
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}