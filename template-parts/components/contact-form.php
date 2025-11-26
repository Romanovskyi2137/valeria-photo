<?php
/**
 * Template Part: Contact Form (English Version)
 */
?>
<div class="valeria-contact-page">
    
    <div class="contact-header">
        <h2 class="contact-title">Begin your story here!</h2>
        
        <div class="contact-info-block">
            <a href="mailto:valeriia.poloz@gmail.com" class="contact-link">valeriia.poloz@gmail.com</a>
            <span class="contact-location">Spain & Europe</span>
        </div>
    </div>

    <div class="contact-form-grid">

        <div class="form-row two-columns">
            <div class="form-group">
                <label>Your Name</label>
                [text* your-name class:clean-input placeholder "Name"]
            </div>
            <div class="form-group">
                <label>Partner's Name</label>
                [text partner-name class:clean-input placeholder "Name"]
            </div>
        </div>

        <div class="form-row two-columns">
            <div class="form-group">
                <label>Email Address</label>
                [email* your-email class:clean-input placeholder "email@example.com"]
            </div>
            <div class="form-group">
                <label>Date of Event</label>
                [text your-date class:clean-input placeholder "DD.MM.YYYY or Season"]
            </div>
        </div>

        <div class="form-row full-width">
            <div class="form-group">
                <label>Enquiry Type</label>
                [select* enquiry-type class:clean-input class:clean-select first_as_label "Select an option..." "Wedding Day" "Wedding Weekend (Multi Day Coverage)" "Elopement or Small Wedding" "Portrait Session" "Love Story"]
            </div>
        </div>

        <div class="form-row two-columns">
            <div class="form-group">
                <label>Location</label>
                [text location class:clean-input placeholder "City, Venue or Region"]
            </div>
            <div class="form-group">
                <label>Photography Budget</label>
                [select budget class:clean-input class:clean-select first_as_label "Select range..." "Flexible / Unsure" "< €1,500" "€1,500 - €2,500" "€2,500 - €4,000" "€4,000+"]
            </div>
        </div>

        <div class="form-footer">
            [submit "Send"]
        </div>

    </div>

    <div class="contact-disclaimer">
        <p>I do my best to respond to every message within 48 hours.</p>
        <p>If you haven’t heard from me yet, please don’t hesitate to reach out directly at <a href="mailto:valeriia.poloz@gmail.com">valeriia.poloz@gmail.com</a></p>
    </div>

</div>