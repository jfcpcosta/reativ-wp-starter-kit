<?php

/**
 * Custom Widget Areas
 */
function custom_theme_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar'),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);

    for($i = 0; $i < 4; $i++) {
        register_sidebar([
            'name' => __('Footer ' . ($i + 1)),
            'id' => 'footer-' . ($i + 1),
            'description'   => __( 'Add widgets here to appear in your footer column '. ($i + 1) . '.'),
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>'
        ]);
    }
}
add_action('widgets_init', 'custom_theme_widgets_init');
