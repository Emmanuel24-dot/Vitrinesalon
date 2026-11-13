<?php
/* Détermine la page courante pour le lien actif du menu */
$currentPage = basename($_SERVER['PHP_SELF']);

function navActive($page, $current) {
    return $page === $current ? ' active' : '';
}
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top main-navbar" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $root; ?>index.php">
            <i class="bi bi-flower2 brand-icon"></i>
            <span class="brand-text">Éclat Beauté <span class="brand-accent">Studio</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item"><a class="nav-link<?php echo navActive('index.php', $currentPage); ?>" href="<?php echo $root; ?>index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('about.php', $currentPage); ?>" href="<?php echo $root; ?>pages/about.php">À propos</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('services.php', $currentPage); ?>" href="<?php echo $root; ?>pages/services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('gallery.php', $currentPage); ?>" href="<?php echo $root; ?>pages/gallery.php">Galerie</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('pricing.php', $currentPage); ?>" href="<?php echo $root; ?>pages/pricing.php">Tarifs</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('team.php', $currentPage); ?>" href="<?php echo $root; ?>pages/team.php">Équipe</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('testimonials.php', $currentPage); ?>" href="<?php echo $root; ?>pages/testimonials.php">Témoignages</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('faq.php', $currentPage); ?>" href="<?php echo $root; ?>pages/faq.php">FAQ</a></li>
                <li class="nav-item"><a class="nav-link<?php echo navActive('contact.php', $currentPage); ?>" href="<?php echo $root; ?>pages/contact.php">Contact</a></li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-gold btn-sm rounded-pill px-4" href="<?php echo $root; ?>pages/contact.php#booking">
                        <i class="bi bi-calendar2-check me-1"></i> Réserver
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
