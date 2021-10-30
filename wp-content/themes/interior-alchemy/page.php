<?php get_header(); ?>

<small>Content-page</small>

<?php include(get_template_directory() . "/components/navbar.php"); ?>

<?php wp_reset_query(); ?>


<main>
    <div class="mx-auto container-small text-center">
        <?php while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
                <img class="about-img img-fluid" src="<?= get_the_post_thumbnail_url();?>" alt="">
            <?php endif; ?>
            
            <h1 class="py-2 text-center"><?php the_title(); ?></h1>
            <hr>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

    <?php include(get_template_directory() . "/components/cta_to_contact.php"); ?>
</main>

<?php get_footer(); ?>