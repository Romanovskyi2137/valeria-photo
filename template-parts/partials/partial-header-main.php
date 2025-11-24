<?php
    $settings_page_ID = get_page_by_path('settings-page')->ID;
    $main_logo = get_field('main_logo', $settings_page_ID);
?>
<header class="__container">
    <a class="header_logo" 
        href="/home"
        style="background-image: url('<?php echo esc_url($main_logo); ?>');">
    </a>
    <div class="menu_toggle_wrapper">
        <button id="menu_toggle_btn" class="menu_toggle" aria-label="Toggle Menu"></button>
    </div>
    <?php
        wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container' => 'nav' 
            ) 
        );
    ?>
</header>