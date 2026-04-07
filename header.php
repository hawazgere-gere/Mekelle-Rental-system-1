<!doctype html>
<?php $options = get_option('new_theme_option'); ?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mekelle Rental - Home</title>
    <?php wp_head(); ?>
    <style>
        /* 1. Force Left-to-Right layout for English */
        body { text-align: left; direction: ltr; background-color: #f8f9fa; }
        .navbar-nav { margin-right: auto !important; margin-left: 0 !important; }
        
        /* 2. THE NUCLEAR FIX: Hide Persian Elements & Red Placeholder */
        /* Hides the Persian search button and any row containing Persian text */
        button.btn-danger:contains('جستجو'), 
        .row:has(input[placeholder*="آگهی"]),
        .home-search-filter,
        div[style*="direction: rtl"],
        .navbar-nav.fallback-menu,
        a[href*="nav-menus.php"].btn-danger { 
            display: none !important; 
            visibility: hidden !important;
            height: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* 3. Ensure your new English bar (the one we added mt-4 to) stays visible */
        .home-search-box.container.mt-4 { 
            display: block !important; 
            visibility: visible !important;
            margin-top: 30px !important;
        }

        /* 4. Navbar Styling */
        .bg-navbar { background-color: #2c3e50 !important; }
        .navbar-nav a { color: #fff !important; font-weight: 500; text-transform: uppercase; }
    </style>
</head>

<body <?php body_class(); ?>>
<header class="bg-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark px-md-0">
            
            <a class="navbar-brand d-md-none" href="<?php echo home_url(); ?>">
                <img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mekelle Rental Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#amir">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php 
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container_class'=> 'collapse navbar-collapse',
                'container_id'   => 'amir',
                'menu_class'     => 'navbar-nav mr-auto menu pl-0 text-left',
                'fallback_cb'    => 'new_theme_WP_Bootstrap_Navwalker::fallback',
                'walker'         => new new_theme_WP_Bootstrap_Navwalker(),
            ));
            ?>

            <a class="navbar-brand d-none d-md-block" href="<?php echo home_url(); ?>">
                 <h4 class="mb-0" style="color:white; font-weight:bold;">
                    Mekelle Rental System
                 </h4>
            </a>
        </nav>
    </div>
</header>