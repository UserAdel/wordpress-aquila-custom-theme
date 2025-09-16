<?php

/**
 * header template file
 * @package Aquila
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<div class="site" id="page">
    <header class="site-header" role="banner" id="masthead">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">
