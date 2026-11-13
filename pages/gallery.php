<?php
$root = '../';
$pageTitle = 'Galerie';
$pageDescription = "Découvrez en images les réalisations d'Éclat Beauté Studio : coiffures, maquillage, onglerie, spa et avant/après.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données de la galerie (démonstration) ----- */
$photos = [
    ['cat' => 'avant-apres', 'label' => 'Avant / Après', 'img' => 'https://images.unsplash.com/photo-1560869713-7d0a29430803?q=80&w=700'],
    ['cat' => 'coiffures',   'label' => 'Balayage lumineux', 'img' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=700'],
    ['cat' => 'maquillage',  'label' => 'Maquillage soirée', 'img' => 'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=700'],
    ['cat' => 'onglerie',    'label' => 'Pose gel coloré', 'img' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=700'],
    ['cat' => 'spa',         'label' => 'Rituel spa', 'img' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=700'],
    ['cat' => 'evenements',  'label' => 'Coiffure de mariée', 'img' => 'https://images.unsplash.com/photo-1595475207225-428b62bda831?q=80&w=700'],
    ['cat' => 'coiffures',   'label' => 'Tresses artistiques', 'img' => 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?q=80&w=700'],
    ['cat' => 'avant-apres', 'label' => 'Transformation lissage', 'img' => 'https://images.unsplash.com/photo-1522336572468-97b06e8ef143?q=80&w=700'],
    ['cat' => 'maquillage',  'label' => 'Maquillage naturel', 'img' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&w=700'],
    ['cat' => 'onglerie',    'label' => 'Manucure française', 'img' => 'https://images.unsplash.com/photo-1519014816548-bf5751fa72c0?q=80&w=700'],
    ['cat' => 'spa',         'label' => 'Massage relaxant', 'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=700'],
    ['cat' => 'evenements',  'label' => 'Préparatifs de mariage', 'img' => 'https://images.unsplash.com/photo-1559599101-f09722fb4948?q=80&w=700'],
];

$filters = [
    'all' => 'Tout',
    'avant-apres' => 'Avant / Après',
    'coiffures' => 'Coiffures',
    'maquillage' => 'Maquillage',
    'onglerie' => 'Onglerie',
    'spa' => 'Spa',
    'evenements' => 'Événements',
];
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Galerie</span>
        <h1 class="text-white mt-2">Nos plus belles réalisations</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Galerie</span>
        </nav>
    </div>
</header>

<!-- ===================== GALERIE FILTRABLE ===================== -->
<section>
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <?php foreach ($filters as $key => $label) { ?>
                <button class="filter-btn<?php echo $key === 'all' ? ' active' : ''; ?>" data-filter="<?php echo $key; ?>"><?php echo $label; ?></button>
            <?php } ?>
        </div>

        <div class="row g-3">
            <?php foreach ($photos as $photo) { ?>
                <div class="col-lg-4 col-md-6 gallery-col" data-aos="zoom-in">
                    <div class="gallery-item" data-category="<?php echo $photo['cat']; ?>">
                        <img src="<?php echo htmlspecialchars($photo['img']); ?>" alt="<?php echo htmlspecialchars($photo['label']); ?>" loading="lazy">
                        <div class="gallery-overlay"><span><?php echo htmlspecialchars($photo['label']); ?></span></div>
                        <div class="gallery-zoom-icon"><i class="bi bi-zoom-in"></i></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===================== MODALE LIGHTBOX ===================== -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3 bg-white rounded-circle p-2" style="z-index:2;" data-bs-dismiss="modal" aria-label="Fermer"></button>
            <img id="lightboxImage" src="" alt="" class="w-100 rounded-4">
            <p id="lightboxCaption" class="text-center mt-3 fw-semibold"></p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
