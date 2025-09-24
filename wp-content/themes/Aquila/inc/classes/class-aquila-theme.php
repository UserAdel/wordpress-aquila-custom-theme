<?php

/**
 * Bootstrap the theme.
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

  class Aquila_Theme
 {
    use Singleton;

    protected function __construct() {
    
        //load class.
        $this->setup_hooks();

    }
    
        protected function setup_hooks(){
     /**
      * Actions.
      */
      
      add_action('wp_enqueue_scripts',[$this,'register_styles']);
      add_action('wp_enqueue_scripts',[$this,'register_scripts']);


        }
        public function register_styles(){

              // wp_enqueue_style(
    //     'aquila-style',
    //     AQUILA_DIR_URI . '/style.css',
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
            filemtime(AQUILA_DIR_PATH . '/style.css'),
            'all'
        );
        wp_register_style(
            'bootstrap-css',
            AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css',
            [],
            false,
            'all'
        );
    
          wp_enqueue_style('aquila-style');
          wp_enqueue_style('bootstrap-css');
    // wp_enqueue_script('tailwindcss');

        }
        public function register_scripts(){
           // wp_register_script(
    //     'tailwindcss',
    //     'https://cdn.tailwindcss.com',
    //     array(),
    //     null,
    //     false 
    // );
          wp_register_script(
            'aquila-main',
            AQUILA_DIR_URI . '/assets/main.js',
            [],
            filemtime(AQUILA_DIR_PATH . '/assets/main.js'),
            true
        );
        wp_register_script(
            'bootstrap-js',
            AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js',
            [],
            false,
            true
        );

        wp_enqueue_script('jquery'); // WordPress built-in jQuery
        wp_enqueue_script('aquila-main');
        wp_enqueue_script('bootstrap-js');
        }
    }

