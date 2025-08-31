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
        'bootsrap-css',
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
        get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',
        ['jquery'],
        false,
        true
    );
    //Enqueue Styles
    wp_enqueue_style('aquila-style');
    wp_enqueue_style('bootsrap-css');
    // Enqueue Script
    wp_enqueue_script('aquila-main');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
