<?php 
add_action('wp_enqueue_scripts', 'wp_shop_styles');
add_action('wp_enqueue_scripts', 'wp_shop_scripts');
add_action('after_setup_theme', 'wp_shop_nav_menu');

function wp_shop_nav_menu() {
    register_nav_menu( 'top', 'menu in header' );
    register_nav_menu( 'bottom', 'menu in footer' );
}

function wp_shop_styles() {
    wp_enqueue_style('null-style', get_template_directory_uri() . '/assets/css/null-style.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main-style.css');
}

function wp_shop_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js");
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jq-script', get_template_directory_uri() . '/assets/js/jq-script.js', array('jquery'), null, true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');