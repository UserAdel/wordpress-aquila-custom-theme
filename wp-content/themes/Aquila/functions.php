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

    wp_register_style(
        'aquila-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );

    wp_register_script(
        'aquila-main',
        get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime(get_template_directory() . '/assets/main.js'),
        true
    );
    wp_enqueue_style('aquila-style');
    wp_enqueue_script('aquila-main');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
