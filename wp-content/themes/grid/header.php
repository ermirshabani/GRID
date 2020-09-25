<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
        integrity="sha256-c+C87jupO1otD1I5uyxV68WmSLCqtIoNlcHLXtzLCT0=" crossorigin="anonymous" />

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>

            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?= $image[0]; ?>" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- The WordPress Primary Menu -->
            <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'primary',
                                'menu_class'        => 'navbar-nav ml-auto w-100 justify-content-end',
                                'container_class'  => 'collapse navbar-collapse',
                                'container_id'    => 'navbarNav',
                            )
                        ); ?>
        </div>

    </nav>