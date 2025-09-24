<?php


/**
 * theme functions
 * @package Aquila
 */



if (!defined('AQUILA_DIR_PATH')){
   define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AQUILA_DIR_URI')){
   define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

\AQUILA_THEME\Inc\Aquila_Theme::get_instance();

function aquila_enqueue_scripts()
{
    //Register Styles

    //Register Script

    //Enqueue Styles

    // Enqueue Script

}
