<?php
function mycustomtheme_theme_support(){
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mycustomtheme_theme_support');

function mycustomtheme_menu(){
    $locations = array(
        'pimary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'mycustomtheme_menu');
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

function mycustomtheme_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_title' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>'

        ),
        array(
            'name' => 'Sidebar Area',
            'id'=> 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'mycustomtheme_widget_areas');
?>