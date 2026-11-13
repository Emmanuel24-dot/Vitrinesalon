<?php
$root = '../';
$pageTitle = 'Témoignages';
$pageDescription = "Découvrez les avis et témoignages de nos clientes et clients sur les services d'Éclat Beauté Studio.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données des témoignages (démonstration) ----- */
$avis = [
    ['nom' => 'Aïcha Koné', 'texte' => 'Une expérience exceptionnelle ! L\'équipe est à l\'écoute, le résultat dépasse toujours mes attentes. Je recommande vivement Éclat Beauté Studio.', 'img' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200', 'fonction' => 'Cliente fidèle depuis 3 ans'],
    ['nom' => 'Yves N\'Guessan', 'texte' => 'Le meilleur salon pour homme que j\'ai trouvé. Coupe impeccable, accueil chaleureux et ambiance très professionnelle.', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200', 'fonction' => 'Client régulier'],
    ['nom' => 'Linda Adjoua', 'texte' => 'Mon maquillage de mariage était absolument parfait. Merci à toute l\'équipe pour ce moment magique et inoubliable.', 'img' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&w=200', 'fonction' => 'Mariée 2025'],
    ['nom' => 'Sandra Brou', 'texte' => 'Le spa et les soins du visage sont une vraie bulle de détente. J\'y vais chaque mois et je ressors toujours rayonnante.', 'img' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=200', 'fonction' => 'Cliente fidèle'],
    ['nom' => 'Patricia Yao', 'texte' => 'Service rapide, professionnel et résultats au rendez-vous. La pose d\'ongles tient parfaitement plusieurs semaines.', 'img' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=200', 'fonction' => 'Cliente onglerie'],
];
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Témoignages</span>
        <h1 class="text-white mt-2">La satisfaction de nos clients avant tout</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Témoignages</span>
        </nav>
    </div>
</header>

<!-- ===================== CARROUSEL TÉMOIGNAGES ===================== -->
<section>
    <div class="container" data-aos="fade-up">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($avis as $index => $a) { ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="testimonial-card">
                            <img src="<?php echo htmlspecialchars($a['img']); ?>" class="testimonial-avatar" alt="<?php echo htmlspecialchars($a['nom']); ?>">
                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="testimonial-text">"<?php echo htmlspecialchars($a['texte']); ?>"</p>
                            <h6 class="mt-3 mb-0"><?php echo htmlspecialchars($a['nom']); ?></h6>
                            <small class="text-muted"><?php echo htmlspecialchars($a['fonction']); ?></small>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="bg-pink-soft">
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="section-title">Vous aussi, vivez l'expérience Éclat</h2>
        <p class="section-subtitle mx-auto mb-4">Rejoignez nos clients satisfaits et réservez votre prochain rendez-vous beauté.</p>
        <a href="../pages/contact.php#booking" class="btn btn-gold btn-lg rounded-pill px-5">
            <i class="bi bi-calendar2-check me-2"></i>Réserver maintenant
        </a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
