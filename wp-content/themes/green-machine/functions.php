<?php
function my_theme_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_assets');
