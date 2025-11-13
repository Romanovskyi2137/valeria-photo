<?php
// imports
require get_template_directory().'/inc/cpt-main-gallery.php';
require get_template_directory().'/inc/cpt-story.php';
// 


add_filter('show_admin_bar', '__return_false'); // hide admin bar
// styles
function theme_enqueue_styles() {
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// function theme_enqueue_montserrat() {
//     wp_enqueue_style(
//         'google-fonts-montserrat',
//         'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap',
//         false
//     );
// }
// add_action('wp_enqueue_scripts', 'theme_enqueue_montserrat');

function theme_enqueue_nanum() {
    wp_enqueue_style(
        'google-fonts-montserrat',
        'https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_nanum');

function theme_enqueue_league_script() {
    wp_enqueue_style(
        'google-fonts-league-script',
        'https://fonts.googleapis.com/css2?family=League+Script&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_league_script');
// 

// scripts
function theme_enqueue_scripts () {
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
// 

// remove possibility to make additional galleries (Gallery post type)
add_action('admin_init', function() {
    global $pagenow;
    
    if ($pagenow === 'post-new.php' && isset($_GET['post_type']) && $_GET['post_type'] === 'gallery') {
        $existing = get_posts([
            'post_type' => 'gallery',
            'post_status' => 'any',
            'posts_per_page' => 1,
        ]);
        
        if (!empty($existing)) {
            wp_redirect(admin_url('edit.php?post_type=gallery'));
            exit;
        }
    }
});
//

// ACF
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
};

function add_menus () {
    register_nav_menus(
        array(
            "primary" => "Primary Menu"
        )
    );
}
add_action("init", "add_menus");