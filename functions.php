<?php
/**
 * Mekelle Rental System - Core Functions
 */

function mekelle_rental_setup() {
    // 1. ENABLE PHOTOS: This allows your renamed images to show on the website
    add_theme_support( 'post-thumbnails' );
    
    // 2. ENABLE MENU: This connects your "main menu" [image_24ffcb.png]
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mekelle-rental' ),
    ) );
}
add_action( 'after_setup_theme', 'mekelle_rental_setup' );

// 3. REGISTER THE RENTAL POST TYPE
function mekelle_rental_init() {
    register_post_type( 'advertising', array(
        'public'    => true,
        'label'     => 'Advertisings',
        'menu_icon' => 'dashicons-admin-home',
        'supports'  => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'has_archive' => true,
        'show_in_rest' => true,
    ));
}
add_action( 'init', 'mekelle_rental_init' );

// 4. LOAD BOOTSTRAP (Fixes the broken layout)
function mekelle_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mekelle_scripts' );
// IMPORTANT: Include rentals in search results
function mekelle_include_rentals_in_search( $query ) {
    if ( $query->is_search && !is_admin() ) {
        $query->set( 'post_type', array( 'post', 'advertising' ) );
    }
    return $query;
}
add_filter( 'pre_get_posts', 'mekelle_include_rentals_in_search' );