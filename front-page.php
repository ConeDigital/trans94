<?php get_header() ; ?>

    <section class="cd-page-wrapper">
        <div class="cd-max-width cd-home-section">
            <div class="cd-home-top">
                <p><?php the_title() ; ?></p>
            </div>
            <div class="cd-home-bottom">
                <?php the_content() ; ?>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>