<?php if (is_admin_bar_showing()) : ?> 
<?php endif; ?>
<nav class="<?= is_admin_bar_showing() ? 'mt-4' : '' ?> navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="text-uppercase navbar-brand brand-logo" href="index.php">Interior Alchemy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="text-reset nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Offerings</a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="text-reset dropdown-item" href="offering.php">Interior Analysis & Design</a></li>
                        <li><a class="text-reset dropdown-item" href="offering.php">Yoga</a></li>
                        <li><a class="text-reset dropdown-item" href="offering.php">Reiki & Channeling</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="text-reset nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>