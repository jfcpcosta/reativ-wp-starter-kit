<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?= get_home_url() ?>">
        <?php if (has_custom_logo()) : ?>
          <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
          ?>
          <img src="<?= esc_url($custom_logo_url) ?>" alt="<?php bloginfo('name'); ?>" width="200">
        <?php else: ?>
          <?php bloginfo('name'); ?>
        <?php endif; ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
		    wp_nav_menu([
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarCollapse',
          'menu_class'        => 'navbar-nav mr-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ]);
		  ?>

      <?php get_search_form(); ?>
    </nav>
  </header>
      
