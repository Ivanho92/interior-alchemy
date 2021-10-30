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

    <div class="jumbotron p-5 mb-3 rounded-3" style="
        background-image: url(
            <?= wp_get_attachment_url(get_theme_mod('header_background_image')); ?>
        );
        background-position-y: <?= get_theme_mod('header_background_image_position');?>%";
    >
        <div class="text-center container-fluid py-5">
            <h1 class="mt-5 mb-4 website-title text-uppercase display-2 fw-bold text-light"><?= get_bloginfo('name'); ?></h1>
            <p class="website-baseline display-6 text-light"><?= get_bloginfo('description'); ?></p>
        </div>
    </div>

    <div class="container">
        <h2 class="display-4 py-3 text-center"><?= get_theme_mod('homepage_lead') ?></h2>
        <hr>
        <p class="text-center mb-5"><?= get_theme_mod('homepage_description') ?></p>
        <div class="row justify-content-around text-center">

            
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="mb-5 col-md-3 d-flex flex-column justify-content-start">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div>
                            <img class="mx-auto mb-3 offering-miniature" src="<?= get_the_post_thumbnail_url() ?>" alt="Offering #1">
                        </div>
                    <?php endif; ?>
                        <div>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div>
                            <p><?php the_field('summary'); ?></p>
                            <p><a class="btn btn-cta" href="<?php the_permalink(); ?>">More details</a></p>
                        </div>
                    </div>
                
            
            <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">Aucune offre pour le moment...</p>
            <?php endif; ?>
        </div>

        <?php include(get_template_directory() . "/components/cta_to_contact.php"); ?>
    </div>
 
<?php get_footer() ?>