<?php

/**
 * Template Name: Offering Page
 * Template Post Type: page
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="entry-content-page">
        <?php the_content(); ?>
    </div>
<?php
endwhile;
wp_reset_query();
?>

<?php get_footer();
