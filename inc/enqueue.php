<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/main.css', array(), '1.0', 'all');
}

function my_theme_enqueue_script() {
    wp_enqueue_script(
        'mtscript',
        get_template_directory_uri() . '/dist/bundle.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');