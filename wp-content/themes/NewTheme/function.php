<?php

function resign_style(){
   wp_enqueue_style('style',get_template_directory_uri()."/style.css");
    wp_enqueue_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css", array());
}
add_action('wp_enqueue_scripts','resign_style');

function resign_js(){
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array());
    wp_enqueue_script('popper', "https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js", array(), '', true);
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", array(), '', true);
}
add_action('wp_enqueue_scripts','resign_js');
?>