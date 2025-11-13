<?php get_header(); 
    // Template Name: Story post
?>
    <main>
        <section class="single_album __container">
            <?php
                $images = acf_photo_gallery('story', get_the_ID());

                if( $images ) : ?>
                    <div class="acf-photo-gallery-item">
                        <?php foreach( $images as $image ): ?>
                            <a href="<?php echo $image['full_image_url']?>" rel="lightbox-gallery" target="blank">
                                <img src="<?php echo $image['full_image_url']; ?>" 
                                    alt="alt" />
                            </a>
                        <?php endforeach; ?>
                    </div>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>
</html>