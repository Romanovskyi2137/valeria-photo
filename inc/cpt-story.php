<?php
function register_story_cpt () {
    register_post_type('story', [
        'labels' => [
            'name' => 'Stories',
            'singular_name' => 'Story',
            'add_new_item' => 'Add new story',
            'edit_item' => 'Set story',
            'view_item' => 'Watch story',
            'search_items' => 'Search story',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => ['title', 'excerpt', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'story'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_story_cpt');