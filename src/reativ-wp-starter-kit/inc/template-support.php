<?php

/**
 * Theme Features Support
 */
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support(
    'html5',
    [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ]
);
add_theme_support(
    'custom-logo',
    [
        'height'      => 190,
        'width'       => 190,
        'flex-width'  => true,
        'flex-height' => true
    ]
);
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('wp-block-styles');
add_theme_support('align-wide');
add_theme_support('editor-styles');
add_editor_style( 'style-editor.css' );
add_theme_support(
    'editor-font-sizes',
    [
        [
            'name'      => __('Small'),
            'shortName' => __('S'),
            'size'      => 19.5,
            'slug'      => 'small',
        ],
        [
            'name'      => __('Normal'),
            'shortName' => __('M'),
            'size'      => 22,
            'slug'      => 'normal',
        ],
        [
            'name'      => __('Large'),
            'shortName' => __('L'),
            'size'      => 36.5,
            'slug'      => 'large',
        ],
        [
            'name'      => __('Huge'),
            'shortName' => __('XL'),
            'size'      => 49.5,
            'slug'      => 'huge',
        ],
    ]
);
add_theme_support(
    'editor-color-palette',
    [
        [
            'name'  => __('Primary'),
            'slug'  => 'primary',
            'color' => tpl_functions_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 33),
        ],
        [
            'name'  => __('Secondary'),
            'slug'  => 'secondary',
            'color' => tpl_functions_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 23),
        ],
        [
            'name'  => __('Dark Gray'),
            'slug'  => 'dark-gray',
            'color' => '#111',
        ],
        [
            'name'  => __('Light Gray'),
            'slug'  => 'light-gray',
            'color' => '#767676',
        ],
        [
            'name'  => __('White'),
            'slug'  => 'white',
            'color' => '#FFF',
        ],
    ]
);
add_theme_support('responsive-embeds');