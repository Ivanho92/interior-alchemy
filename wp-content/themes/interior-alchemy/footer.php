<footer class="text-center p-5 mt-4">
    <p class="lead fw-bold text-uppercase"><?= get_bloginfo('name'); ?></p>
    <div aria-hidden="true" class="d-none d-md-block"><a class="text-reset text-decoration-none" href="mailto:<?= get_theme_mod('contact_email');?>"><?= get_theme_mod('contact_email');?></a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a class="text-reset text-decoration-none" href="tel:<?= str_replace([':', '.', '/', '-'], '', get_theme_mod('contact_phone'));?>"><?= get_theme_mod('contact_phone');?></a></div>
    <div class="d-sm-block d-md-none row justify-content-center">
        <div class="contact-footer-left col-md-6">
            <a class="text-reset text-decoration-none" href="mailto:<?= get_theme_mod('contact_email');?>"><?= get_theme_mod('contact_email');?></a>
        </div>
        <div class="contact-footer-right col-md-6">
            <a class="text-reset text-decoration-none" href="tel:<?= str_replace([':', '.', '/', '-'], '', get_theme_mod('contact_phone'));?>"><?= get_theme_mod('contact_phone');?></a>
        </div>
    </div>
    <div class="mt-2 mb-4">
        <a target="_blank" href="<?= get_theme_mod('social_instagram');?>"><img class="social-icon" src="<?= bloginfo('template_url') . "/img/icon-instagram.png" ?>" alt="Go to Instagram"></a>
        <a target="_blank" href="<?= get_theme_mod('social_pinterest');?>"><img class="social-icon" src="<?= bloginfo('template_url') . "/img/icon-pinterest.png" ?>" alt="Go to Pinterest"></a>
    </div>
    <small>
        © 2021 Copyright - Designed and Implemented by <a class="text-reset text-decoration-none" href="https://www.linkedin.com/in/ivanrodrigues92/">Ivan Rodrigues</a>
    </small>
</footer>
<?php wp_footer() ?>
</body>
</html>