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
    // var_dump($query); die;
    ?>

<div class="container">
    <h1>Front-Page</h1>
    <h2>Offres</h2>
    
    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
    <article>
        <a href="<?php the_permalink(); ?>">
            <strong class="post-title"><?php the_title(); ?></strong>
        </a>
    </article>
    <?php endwhile; else: ?>
        <p>Aucune offre pour le moment...</p>
    <?php endif; ?>

</div>


<?php get_footer() ?>