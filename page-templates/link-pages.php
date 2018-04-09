<?php
/*
Template Name: Sub Page
*/
?>

<?php get_header() ; ?>

<section class="cd-page-wrapper">
    <div class="cd-max-width cd-page-section cd-work-section">
        <div class="cd-page-left">
            <?php if( have_rows('page-links') ): ?>
                <?php while( have_rows('page-links') ) : the_row();?>
                    <div class="cd-page-left-item">
                        <h3><?php the_sub_field('page-link') ; ?></h3>
                        <div class="cd-page-item-description">
                            <?php the_sub_field('page-link-description') ; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer() ; ?>
