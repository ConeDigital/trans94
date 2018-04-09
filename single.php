<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package cone
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>



<?php endwhile; ?>

<?php get_footer(); ?>