<?php get_header(); 
    // Template Name: Contact Page
?>
    <main>
    <?php 
        $photo = get_field('page_main_photo');
        if ($photo) :
    ?>
        <div class="photo_container">
        <img src="<?php echo $photo ?>"/>
        </div> 
    <?php endif ?>
        <?php echo do_shortcode( '[contact-form-7 id="3d8fe33" title="Inquire form"]' ); ?>
    </main>
<?php get_footer(); ?>
</html>