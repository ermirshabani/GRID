<!DOCTYPE html>
<html <?php language_attributes(); ?>>

        
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-light">
    <!-- Brand and toggle button -->
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>

                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?= $image[0]; ?>" class="img-fluid" alt="">
                </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- End -->
    <!-- Your website Links -->
    <div class="collapse navbar-collapse nav justify-content-center" id="navbarSupportedContent">
        <?php
             wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'header-menu',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => '',
             'container_id'      => '',
             'menu_class'        => 'navbar-nav',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
        ?>
    </div>
    <!-- End -->
</nav>