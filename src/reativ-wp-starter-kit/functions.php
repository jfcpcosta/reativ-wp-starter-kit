<?php
/**
 * Custom Menus
 */
function custom_theme_menus_init() {
    register_nav_menus([
        'primary' => __('Primary Menu'),
        'footer'  => __('Footer Menu'),
        'social'  => __('Social Links Menu'),
    ]);
}
add_action('init', 'custom_theme_menus_init');