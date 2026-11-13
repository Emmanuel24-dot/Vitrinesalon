<?php
$root = '../';
$pageTitle = 'Tarifs';
$pageDescription = "Découvrez nos tarifs transparents pour la coiffure, le maquillage, les soins et l'onglerie chez Éclat Beauté Studio.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données des tarifs (démonstration) ----- */
$tarifs = [
    ['titre' => 'Coupe Simple', 'prix' => '8 000', 'desc' => 'Coupe et finition adaptées à votre style.', 'items' => ['Diagnostic capillaire', 'Coupe sur-mesure', 'Coiffage rapide'], 'featured' => false],
    ['titre' => 'Coupe + Brushing', 'prix' => '15 000', 'desc' => 'L\'association parfaite pour un look soigné.', 'items' => ['Coupe sur-mesure', 'Brushing volumateur', 'Soin express'], 'featured' => true, 'badge' => 'Populaire'],
    ['titre' => 'Coloration', 'prix' => '25 000', 'desc' => 'Une couleur éclatante et personnalisée.', 'items' => ['Diagnostic couleur', 'Application professionnelle', 'Soin post-coloration'], 'featured' => false],
    ['titre' => 'Lissage Brésilien', 'prix' => '45 000', 'desc' => 'Cheveux disciplinés et brillants longue durée.', 'items' => ['Soin protéiné', 'Lissage professionnel', 'Brushing final'], 'featured' => false],
    ['titre' => 'Maquillage', 'prix' => '20 000', 'desc' => 'Maquillage jour ou soirée sur-mesure.', 'items' => ['Préparation de peau', 'Maquillage personnalisé', 'Fixateur longue tenue'], 'featured' => false],
    ['titre' => 'Manucure', 'prix' => '10 000', 'desc' => 'Des mains parfaitement soignées.', 'items' => ['Soin des cuticules', 'Pose de vernis', 'Massage des mains'], 'featured' => false],
    ['titre' => 'Pédicure', 'prix' => '12 000', 'desc' => 'Un soin complet pour des pieds doux.', 'items' => ['Bain relaxant', 'Gommage et soin', 'Pose de vernis'], 'featured' => false],
    ['titre' => 'Soin du Visage', 'prix' => '18 000', 'desc' => 'Hydratation et éclat retrouvés.', 'items' => ['Nettoyage en profondeur', 'Masque adapté', 'Massage facial'], 'featured' => false],
    ['titre' => 'Pack Mariée', 'prix' => '85 000', 'desc' => 'L\'expérience complète pour le plus beau jour.', 'items' => ['Essai coiffure & maquillage', 'Coiffure le jour J', 'Maquillage longue tenue', 'Manucure incluse'], 'featured' => true, 'badge' => 'Premium'],
];
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Tarifs</span>
        <h1 class="text-white mt-2">Des prix justes pour une qualité d'exception</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Tarifs</span>
        </nav>
    </div>
</header>

<!-- ===================== GRILLE TARIFAIRE ===================== -->
<section>
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Nos forfaits</span>
        <h2 class="section-title">Choisissez le soin qui vous convient</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle mx-auto">Tarifs indicatifs en Francs CFA (FCFA). Un devis précis vous sera proposé selon la longueur et l'épaisseur de vos cheveux.</p>
    </div>
    <div class="container">
        <div class="row g-4">
            <?php foreach ($tarifs as $tarif) { ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="price-card position-relative <?php echo $tarif['featured'] ? 'featured' : ''; ?>">
                        <?php if (!empty($tarif['badge'])) { ?>
                            <span class="price-badge"><?php echo htmlspecialchars($tarif['badge']); ?></span>
                        <?php } ?>
                        <h5><?php echo htmlspecialchars($tarif['titre']); ?></h5>
                        <p class="text-muted small mb-2"><?php echo htmlspecialchars($tarif['desc']); ?></p>
                        <div class="price-tag">À partir de <?php echo $tarif['prix']; ?> <small>FCFA</small></div>
                        <ul class="price-list">
                            <?php foreach ($tarif['items'] as $item) { ?>
                                <li><i class="bi bi-check-circle-fill"></i><?php echo htmlspecialchars($item); ?></li>
                            <?php } ?>
                        </ul>
                        <a href="../pages/contact.php#booking" class="btn btn-gold rounded-pill px-4 w-100">Réserver</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <p class="text-center text-muted small mt-5" data-aos="fade-up">* Les tarifs peuvent varier selon la longueur, la densité et l'état des cheveux. Un diagnostic gratuit est proposé avant chaque prestation.</p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
