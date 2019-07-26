<?php

if (!file_exists(get_template_directory() . '/vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php')) {
	return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} 
else {
	require_once get_template_directory() . '/vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
}

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

function add_menu_list_item_class($classes, $item, $args, $depth) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 10, 4);

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


function special_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
