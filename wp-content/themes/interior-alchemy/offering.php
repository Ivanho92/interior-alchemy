<?php

/**
 * Template Name: Offering Page
 * Template Post Type: page
 */


get_header(); ?>

<small>Front-Page</small>

<?php include(get_template_directory() . "/components/navbar.php"); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="<?= has_post_thumbnail() ?? 'jumbotron jumbotron-offering' ?> p-5 mb-4 rounded-3"
    <?php if (has_post_thumbnail()) : ?>
        style="background-image: url(<?= get_the_post_thumbnail_url();?>)"
    <?php endif; ?>
></div>

<main>
    <h1 class="py-3 text-center"><?php the_title(); ?></h1>
    <div class="mx-auto container-small">
        <hr>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

    <div class="d-none">


        <div class="mx-auto container-small">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.</p>

            <p>Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.</p>

            <div class="mb-5 mt-4">
                <img class="image-float-right " src="img/random_image.png" alt="">
                <p>Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor</p>
                <p>Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor</p>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>

            <h2>Lorem Ipsum</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>
        </div>
        <img class="full-width-image mb-5 mt-4 img-fluid" src="img/random_image.png" alt="">
        <div class="mx-auto container-small">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>

            <img class="mb-5 mt-4 img-fluid" src="img/random_image.png" alt="">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.</p>

            <p>Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>

            <h2 class="h2">Lorem Ipsum</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ipsum eget enim fermentum facilisis. Donec porttitor tincidunt congue. Sed eleifend aliquet lacus, ac maximus magna posuere at.</p>

            <p>Duis congue sem aliquam tortor suscipit, vel accumsan dolor varius. Donec condimentum quam fermentum nulla imperdiet feugiat. Vivamus nibh dolor, vestibulum in ultrices dapibus, fringilla sit amet orci.</p>
        </div>
    </div>

    <?php include("components/cta_to_contact.php") ?>

</main>


<?php wp_reset_query(); ?>

<?php get_footer();
