<?php

function custom_theme()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'custom_theme');
// add style to header
function custom_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
    wp_enqueue_style('anotherStyle', get_template_directory_uri() . "/assets/css/anotherStyle.css", array());
    wp_enqueue_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css", array());
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

function import_js_libs()
{
    wp_enqueue_script('js1', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array());
    wp_enqueue_script('js2', "https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js", array(), '', true);
    wp_enqueue_script('js3', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", array(), '', true);
    wp_enqueue_script('main_script', get_template_directory_uri() . "/assets/js/main.js", array(), '', true);
}

add_action('wp_enqueue_scripts', 'import_js_libs');

function custom_menu()
{
    $locations = array(
        'primary' => "Menu items 1",
        'footer' => "Menu items 2"
    );
    register_nav_menus($locations);
}
add_action('init', 'custom_menu');


function widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget'=>''
        ),
        array(
            'name'=>'Sidebar area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Widget Area'
        )
    );
}
add_action('widgets_init','widget_areas');


add_theme_support('post-formats', array('aside', 'gallery'));

add_post_type_support('page', 'post-formats');

?>