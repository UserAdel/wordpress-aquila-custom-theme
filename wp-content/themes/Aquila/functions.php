<?php


/**
 * theme functions
 * @package Aquila
 */



function aquila_enqueue_scripts()
{
    // wp_enqueue_style(
    //     'aquila-style',
    //     get_stylesheet_uri(),
    //     [],
    //     filemtime(get_template_directory() . '/style.css'),
    //     'all'
    // );
    // // Enqueue main.js
    // wp_enqueue_script(
    //     'aquila-main',
    //     get_template_directory_uri() . '/assets/main.js',
    //     [],
    //     filemtime(get_template_directory() . '/assets/main.js'),
    //     true
    // );



    //Register Styles
    wp_register_style(
        'aquila-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
    wp_register_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',
        [],
        false,
        'all'
    );

    //Register Script

    wp_register_script(
        'aquila-main',
        get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime(get_template_directory() . '/assets/main.js'),
        true
    );
    wp_register_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js',
        [],
        false,
        true
    );

    // wp_register_script(
    //     'tailwindcss',
    //     'https://cdn.tailwindcss.com',
    //     array(),
    //     null,
    //     false 
    // );

    //Enqueue Styles
    wp_enqueue_style('aquila-style');
    wp_enqueue_style('bootstrap-css');
    // Enqueue Script
    wp_enqueue_script('jquery'); // WordPress built-in jQuery
    wp_enqueue_script('aquila-main');
    wp_enqueue_script('bootstrap-js');
    // wp_enqueue_script('tailwindcss');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
