<?php
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order'   => 'ASC',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'offering.php'
                )
            ),
        );
    wp_reset_query();
    $custom_query = new WP_Query($args);
?>

<!-- <?php wp_nav_menu(["theme_location" => "nav-menu"]) ?> -->

<nav class="<?= is_admin_bar_showing() ? 'mt-4' : '' ?> navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="text-uppercase navbar-brand brand-logo" href="<?= get_site_url() ?>"><?= get_bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu([
            'theme_location'  => 'nav-menu',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>
</nav>
<!-- <nav class="<?= is_admin_bar_showing() ? 'mt-4' : '' ?> navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="text-uppercase navbar-brand brand-logo" href="<?= get_site_url() ?>"><?= get_bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="text-reset nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Offerings</a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                    <?php if ($custom_query->have_posts()) : ?>
                        <?php while ($custom_query->have_posts()): $custom_query->the_post(); ?>
                        <li><a class="text-reset dropdown-item" href="<?= the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="text-reset nav-link" href="about-me">About</a>
                </li>
            </ul>
        </div>
            </ul>
        </div>
    </div>
</nav> -->

<?php wp_reset_query(); ?>