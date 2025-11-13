<?php
function register_gallery_cpt () {
    register_post_type('gallery', [
        'labels' => [
            'name' => 'Gallery',
            'singular_name' => 'Gallery',
            'add_new_item' => 'Add new gallery',
            'edit_item' => 'Set gallery',
            'view_item' => 'Watch gallery',
            'search_items' => 'Search gallery',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => ['title', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'gallery'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_gallery_cpt');