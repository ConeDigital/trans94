<?php get_header() ; ?>

    <section class="cd-page-wrapper">
        <div class="cd-max-width cd-page-section cd-contact-section">
            <div class="cd-page-left">
                <h2>*<?php the_title() ; ?></h2>
                <div class="cd-contact-form">
                    <?php echo do_shortcode(get_field('contact-form-shortcode')) ; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>