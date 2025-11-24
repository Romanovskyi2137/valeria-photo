<?php get_header(); 
    // Template Name: Stories page
?>
    <main>
        <section class="stories">
    <div class="stories__inner">
        
        <div class="swiper-button-prev custom-prev"></div>

        <div class="swiper stories-slider">
            <div class="swiper-wrapper">
                <?php
                $args = [
                    'post_type' => 'story',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ];
                $stories = new WP_Query($args);

                if ($stories->have_posts()) :
                    while ($stories->have_posts()) : $stories->the_post(); 
                        $images = acf_photo_gallery("story", get_the_ID());
                        $image_url = !empty($images) ? reset($images)['full_image_url'] : '';
                    ?>
                        
                        <div class="swiper-slide story-slide">
                            <a href="<?php the_permalink(); ?>" class="story-card">
                                <div class="story-card__img-wrap">
                                    <?php if($image_url): ?>
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="story-card__text">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="story-card__desc"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>

        <div class="swiper-button-next custom-next"></div>

    </div>
</section>
    </main>
<?php get_footer(); ?>
</html>