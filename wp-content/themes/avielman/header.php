<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avielman
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'avielman'); ?></a>

    <header id="masthead" class="site-header">
        <div id="top_info"></div>
        <div id="logo_menu">
            <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="site-branding">
                        <?php
                        the_custom_logo();
                        ?>
                    </div><!-- .site-branding -->

                </div>
                <div class="col-md-10">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'avielman'); ?></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            </div>
        </div>
        <div id="main_banner">
            <div class="container" id="main_banner_container">
                <div class="row align-items-center">
                    <div class="col">
                        <h2>Auditoría III - Registro</h2>
                    </div>
                </div>
            </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
