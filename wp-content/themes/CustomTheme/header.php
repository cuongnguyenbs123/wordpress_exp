<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h4><?php bloginfo('description'); ?></h4>
    </header>
    <header class="header text-center">
        <?php
        get_search_form();
        ?>

        <a class="site-title pt-lg-4 mb-0" href="index.html">SiteName.dev</a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo);
//                    the_custom_logo();
                }
                ?>
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'item_wrap' => "<ul></ul>"
                    ))
                ?>
                <hr>
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul>
                <?php
                  dynamic_sidebar('sidebar-1')
                ?>
            </div>
        </nav>
    </header>
