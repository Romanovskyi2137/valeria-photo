<?php
/**
 * Підміна стандартної форми CF7 на кастомний PHP-шаблон.
 */

add_filter( 'wpcf7_form_elements', 'custom_render_cf7_from_file' );

function custom_render_cf7_from_file( $content ) {
    
    $contact_form = WPCF7_ContactForm::get_current();

    if ( ! $contact_form ) {
        return $content;
    }

    $target_form_id = 99; // Твій ID

    if ( $contact_form->id() === $target_form_id ) {
        
        $template_path = get_theme_file_path( '/template-parts/components/contact-form.php' );

        if ( file_exists( $template_path ) ) {
            ob_start();
            include $template_path;
            $raw_content = ob_get_clean();

            // 🔥 МАГІЯ ТУТ: Примусово перетворюємо шорткоди ([text*...]) на HTML (<input...>)
            // Використовуємо менеджер тегів CF7
            $manager = WPCF7_FormTagsManager::get_instance();
            return $manager->replace_all( $raw_content );
        }
    }

    return $content;
}