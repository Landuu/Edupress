<?php

// // Loading assets
function load_assets() {
    wp_register_style('style', get_template_directory_uri() . '/assets/dist/theme.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('script', get_template_directory_uri() . '/assets/dist/theme.js', ['jquery'], 1, true);
    wp_enqueue_script('script');
}

function register_navwalker(){
	require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}

add_action('wp_enqueue_scripts', 'load_assets');
add_action('after_setup_theme', 'register_navwalker');



// Theme options
add_theme_support('menus');



// Menus
register_nav_menus(
    [
        'menu-main' => "Główny pasek nawigacji"
    ]
);

?>