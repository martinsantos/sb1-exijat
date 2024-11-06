<?php

function ultimamilla_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => 'Menú Principal'
    ));
}
add_action('after_setup_theme', 'ultimamilla_setup');

function ultimamilla_scripts() {
    wp_enqueue_style('ultimamilla-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ultimamilla_scripts');