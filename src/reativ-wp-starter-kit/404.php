<!doctype html>

<html lang="en">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            }
        </style>

        <?php wp_head(); ?>
    </head>
  
    <body class="text-center not-found">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <?php if (has_custom_logo()) : ?>
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        ?>
                        <img src="<?= esc_url($custom_logo_url) ?>" alt="<?php bloginfo('name'); ?>" width="200">
                    <?php else: ?>
                        <h3 class="masthead-brand"><?php bloginfo('name'); ?></h3>
                    <?php endif; ?>

                    <?php
                        wp_nav_menu([
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => '',
                            'container_class'   => '',
                            'container_id'      => '',
                            'menu_class'        => 'nav nav-masthead justify-content-center',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ]);
		            ?>
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">404 Not Found.</h1>
                <p class="lead">Sorry, the page you were looking for doesn't exist. Try going to homepage and navigate in our website.</p>
                <p class="lead">
                    <a href="<?= get_home_url() ?>" class="btn btn-lg btn-secondary">Back to homepage</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>&copy; <?= date('Y') ?> Reativ &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </div>
            </footer>
        </div>
    </body>
</html>
