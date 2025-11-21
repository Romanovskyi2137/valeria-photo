<?php get_header(); 
    // Template Name: About Page
?>
    <main>
        <?php
        $about_text = get_field('about_text');
        $about_title = get_field('about_title');
        $about_subtitle = get_field('about_subtitle');
        $about_photographer_img = get_field('photographer_img');
        ?>
        <section class="about_section __container">
            <h1 class="about_title"><?php echo $about_title ?></h1>
            <div class="about_content_container">
                <div class="about_content_img_box">
                    <img src="<?php echo $about_photographer_img?>" alt="photographer photo"/>
                </div>
                <div class="about_content_text_box">
                    <p class="about_text"><?php echo $about_text ?></p>
                    <h2><?php echo $about_subtitle ?></h2>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
</html>