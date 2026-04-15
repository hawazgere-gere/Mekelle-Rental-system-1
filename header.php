<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            MEKELLE RENTAL SYSTEM
        </a>
        
        <div class="collapse navbar-collapse">
            <?php
            // Displays the "main menu" you built
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'navbar-nav ml-auto',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </div>
</nav>