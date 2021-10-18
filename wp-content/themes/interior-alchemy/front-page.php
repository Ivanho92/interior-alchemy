<?php get_header() ?>


<?php
    $args = array(
        'post_type' => 'page',
        'post_per_page' => 3,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'offering.php'
                )
        )
    );
    $query = new WP_Query($args);
    ?>

<small>Front-Page</small>

<?php include(get_template_directory() . "/components/navbar.php"); ?>

    <div class="jumbotron mt-5 p-5 mb-3 rounded-3">
        <div class="text-center container-fluid py-5">
            <h1 class="mt-5 mb-4 website-title text-uppercase display-2 fw-bold text-light">Interior Alchemy</h1>
            <p class="website-baseline display-6 text-light">a return to home</p>
        </div>
    </div>

    <div class="container">
        <h2 class="display-4 py-3 text-center">Offerings</h2>
        <hr>
        <p class="text-center mb-5">A methodology developped by Mathilde Grimm that utilizes a range of holistic healing modalities to facilititate a return to home - within and without.</p>
        
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="row justify-content-around text-center">
                <div class="mb-5 col-md-3 d-flex flex-column justify-content-start">
                    <div>
                        <img class="mx-auto mb-3 offering-miniature" src="img/offering.jfif" alt="Offering #1">
                    </div>
                    <div>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is
                            the
                            first column.</p>
                        <p><a class="btn btn-cta" href="<?php the_permalink(); ?>">More details</a></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Aucune offre pour le moment...</p>
        <?php endif; ?>

<?php get_footer() ?>