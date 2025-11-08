<section class="gallery-section __container">
    <?php 
    $args = [
        'post_type'      => 'gallery',
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];

    $gallery_query = new WP_Query($args);

    if ( $gallery_query->have_posts() ) : 
        while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); 
        
            // Використовуємо ACF Photo Gallery plugin
            $images = acf_photo_gallery('gallery', get_the_ID()); 
            if ( $images ) : ?>
                    <?php foreach ( $images as $image ) : ?>
                        <div class="gallery-item">
                            <img 
                                src="<?php echo $image['full_image_url']; ?>" 
                            >
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>

        <?php endwhile; 
        wp_reset_postdata(); 
    endif; ?>
</section>