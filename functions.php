<?php

function theme_enqueue_styles() {
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

if (class_exists('ACF')) {

    // Save fields to json files
    add_filter('acf/settings/save_json', function ($path) {
        return get_template_directory() . '/acf-json';
    });

    // Load fields from json files
    add_filter('acf/settings/load_json', function ($paths) {
        // Remove the original path (optional).
        unset($paths[0]);

        // Append the new path and return it.
        $paths[] = get_template_directory() . '/acf-json';;

        return $paths;
    });
}