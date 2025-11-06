<?php 
    $ID = get_page_by_path('settings-page')->ID;
    $location = get_field('location', $ID);
    $email = get_field('email', $ID);
    $instagram_link = get_field('instagram_link', $ID);
    $raw_contact_number = get_field('contact_number', $ID);
    $contact_number = preg_replace('/[^0-9+]/', '', $raw_contact_number);
?>



<footer>
    <div class="footer_info_container __container">
        <div class="inquire_container">
            <a>inquire</a>
        </div>
        <div class="contacts_container">
            <?php if ($location): ?>
                <p><?php echo ($location); ?></p>
            <?php endif; ?>
            <?php if ($email): ?>
                <a 
                    rel="mailto"
                    href="mailto:<?php echo ($email); ?>"
                >
                    <?php echo ($email); ?>
                </a>
            <?php endif; ?>
            <?php if ($contact_number): ?>
                <a 
                    rel="tel"
                    href="tel:<?php echo ($contact_number); ?>"
                >
                    <?php echo ($raw_contact_number); ?>
                </a>
            <?php endif; ?>    
        </div>
        <div class="socials_container">
            <?php if ($instagram_link): ?>
                <a
                    href="<?php echo get_field('instagram_link', $ID); ?>"
                    target="_blank"
                >
                    instagram
                </a>
            <?php endif; ?>
        </div>
    </div>
    <p>
        © <?php echo date("Y"); ?> Poloz Valeriia Photography | All rights reserved.
    </p>
</footer>