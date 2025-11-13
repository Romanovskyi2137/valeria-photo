<?php get_header(); 
    // Template Name: Stories page
?>
    <main>
        <section class="stories __container">
        <?php
        $args = [
            'post_type' => 'story',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        ];

        $stories = new WP_Query($args);

        if ($stories->have_posts()) :
            while ($stories->have_posts()) : $stories->the_post(); ?>
                
                <div class="story-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            $images = acf_photo_gallery("story", get_the_ID());
                            $image = reset($images)['full_image_url'];
                        ?>
                        <img src=<?php echo $image ?> alt="" />
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>

            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="stories_nostories_msg">No stories for now.</p>';
        endif;
        ?>
    </section>
    </main>
<?php get_footer(); ?>
</html>