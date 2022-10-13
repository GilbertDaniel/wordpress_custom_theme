<?php
function mycustomtheme_theme_support(){
    // Add dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mycustomtheme_theme_support');
function mycustomtheme_register_styles(){
    wp_enqueue_style('mycustomtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('mycustomtheme-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('mycustomtheme-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'mycustomtheme_register_styles');

function mycustomtheme_register_scripts(){
    wp_enqueue_script('mycustomtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mycustomtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mycustomtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('mycustomtheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'mycustomtheme_register_scripts');
?>