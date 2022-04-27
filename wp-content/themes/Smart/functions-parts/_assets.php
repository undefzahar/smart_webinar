<?php 
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/js/libs/jquery-3.6.0.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/css/style.min.css');
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/js/main.min.js',  array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_assets');