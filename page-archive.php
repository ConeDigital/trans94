<?php get_header() ; ?>

    <section class="cd-page-wrapper">
        <div class="cd-max-width cd-page-section cd-archive-section">
            <div class="cd-page-left">
                <?php $loop = new WP_Query( array( 'post_type' => 'projects' , 'posts_per_page' => -1)); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="cd-page-left-item">
                            <h3><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h3>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>