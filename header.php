<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bud4star
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bud4star' ); ?></a>
	<header>
                <div class="top-section">
                    <div class="center">
                        <div class="navigationContainer row">
                            <div
                                class="logo <?php echo get_theme_mod('logo_bootstrap_columns', 'col-xs-12 col-sm-3')?>">
                                <div class="logoInner">
                                    <a href="#">
                                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('logo_src'))?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div
                                class="menu <?php echo get_theme_mod('menu_bootstrap_columns', 'col-xs-12 col-md-9')?>">
                        

                                        <nav class="navbar navbar-expand-sm navbar-light">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <!-- End -->
                                            <!-- Your website Links -->
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                                                            <?php
                                                        wp_nav_menu( array(
                                                  
                                                        'theme_location'    => 'menuPrimary',
                                                        'depth'             => 2,
                                                        'container'         => 'div',
                                                        'container_class'   => '',
                                                        'container_id'      => 'primaryMenu',
                                                        'menu_class'        => 'navbar-nav mr-auto',
                                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                                        'walker'            => new wp_bootstrap_navwalker())
                                                        );
                                                ?>
                                            </div>
                                            <!-- End -->
                                        </nav>

                               
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </header>

	<div id="content" class="site-content">
