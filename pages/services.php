<?php
$root = '../';
$pageTitle = 'Nos Services';
$pageDescription = "Découvrez l'ensemble des services de coiffure et de beauté proposés par Éclat Beauté Studio : coupe, coloration, maquillage, soins, manucure et plus encore.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données des services (démonstration) ----- */
$coiffure = [
    ['titre' => 'Coupe Femme', 'img' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=600', 'desc' => "Une coupe sur-mesure adaptée à votre visage et à votre personnalité."],
    ['titre' => 'Coupe Homme', 'img' => 'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?q=80&w=600', 'desc' => "Coupes modernes et classiques réalisées avec précision."],
    ['titre' => 'Coupe Enfant', 'img' => 'https://images.unsplash.com/photo-1605497788044-5a32c7078486?q=80&w=600', 'desc' => "Un moment ludique et soigné pour les plus jeunes."],
    ['titre' => 'Brushing', 'img' => 'https://images.unsplash.com/photo-1522337094846-8a4a2b2b6c5c?q=80&w=600', 'desc' => "Un volume parfait et une brillance longue durée."],
    ['titre' => 'Coloration', 'img' => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=600', 'desc' => "Des couleurs vibrantes et durables, sans compromis sur la santé du cheveu."],
    ['titre' => 'Balayage', 'img' => 'https://images.unsplash.com/photo-1605497788044-5a32c7078486?q=80&w=601', 'desc' => "Un dégradé lumineux et naturel pour un effet soleil."],
    ['titre' => 'Tresses', 'img' => 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?q=80&w=600', 'desc' => "Des tresses artistiques, du style box braids aux tresses collées."],
    ['titre' => 'Extensions', 'img' => 'https://images.unsplash.com/photo-1605497788044-5a32c7078486?q=80&w=602', 'desc' => "Plus de longueur et de volume avec des extensions de qualité."],
    ['titre' => 'Lissage', 'img' => 'https://images.unsplash.com/photo-1522336572468-97b06e8ef143?q=80&w=600', 'desc' => "Un lissage brésilien pour des cheveux disciplinés et soyeux."],
    ['titre' => 'Coiffure Événementielle', 'img' => 'https://images.unsplash.com/photo-1595475207225-428b62bda831?q=80&w=600', 'desc' => "Chignons et coiffures sublimes pour mariages et soirées."],
];

$beaute = [
    ['titre' => 'Maquillage Professionnel', 'img' => 'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=600', 'desc' => "Un maquillage sur-mesure pour mettre en valeur votre beauté naturelle."],
    ['titre' => 'Soins du Visage', 'img' => 'https://images.unsplash.com/photo-1519415510236-718bdfcd89c1?q=80&w=600', 'desc' => "Nettoyage en profondeur, hydratation et éclat retrouvé."],
    ['titre' => 'Soins du Corps', 'img' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=600', 'desc' => "Gommages et enveloppements pour une peau douce et nourrie."],
    ['titre' => 'Manucure', 'img' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=600', 'desc' => "Des mains soignées et impeccablement mises en valeur."],
    ['titre' => 'Pédicure', 'img' => 'https://images.unsplash.com/photo-1519014816548-bf5751fa72c0?q=80&w=600', 'desc' => "Un soin complet pour des pieds doux et bien entretenus."],
    ['titre' => 'Pose d\'Ongles', 'img' => 'https://images.unsplash.com/photo-1604902396830-aea8d3b3a36c?q=80&w=600', 'desc' => "Gel, résine ou semi-permanent pour des ongles parfaits."],
    ['titre' => 'Épilation', 'img' => 'https://images.unsplash.com/photo-1556228852-80b6e3a6a3b8?q=80&w=600', 'desc' => "Des techniques douces pour une peau lisse durablement."],
    ['titre' => 'Massage Relaxant', 'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=600', 'desc' => "Un moment de détente profonde pour le corps et l'esprit."],
    ['titre' => 'Soin Capillaire', 'img' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=600', 'desc' => "Des rituels nourrissants pour réparer et fortifier vos cheveux."],
    ['titre' => 'Spa', 'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=601', 'desc' => "Une parenthèse bien-être complète dans notre espace spa."],
];

function renderServiceCard($service) {
    echo '<div class="col-lg-3 col-md-6" data-aos="fade-up">';
    echo '  <div class="card-elegant">';
    echo '      <div class="card-img-wrap"><img src="' . htmlspecialchars($service['img']) . '" alt="' . htmlspecialchars($service['titre']) . '" loading="lazy"></div>';
    echo '      <div class="card-body">';
    echo '          <h5>' . htmlspecialchars($service['titre']) . '</h5>';
    echo '          <p class="text-muted small">' . htmlspecialchars($service['desc']) . '</p>';
    echo '          <a href="../pages/contact.php#booking" class="btn btn-outline-gold btn-sm rounded-pill px-4">En savoir plus</a>';
    echo '      </div>';
    echo '  </div>';
    echo '</div>';
}
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Nos Services</span>
        <h1 class="text-white mt-2">Coiffure &amp; Beauté d'exception</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Services</span>
        </nav>
    </div>
</header>

<!-- ===================== COIFFURE ===================== -->
<section>
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Coiffure</span>
        <h2 class="section-title">Sublimez votre chevelure</h2>
        <div class="divider-gold"></div>
    </div>
    <div class="container">
        <div class="row g-4">
            <?php foreach ($coiffure as $service) { renderServiceCard($service); } ?>
        </div>
    </div>
</section>

<!-- ===================== BEAUTÉ ===================== -->
<section class="bg-pink-soft">
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Beauté</span>
        <h2 class="section-title">Prenez soin de vous</h2>
        <div class="divider-gold"></div>
    </div>
    <div class="container">
        <div class="row g-4">
            <?php foreach ($beaute as $service) { renderServiceCard($service); } ?>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section>
    <div class="container">
        <div class="cta-band text-center" data-aos="zoom-in">
            <h2 class="text-white mb-3">Vous ne savez pas quel soin choisir ?</h2>
            <p class="text-white-50 mb-4 mx-auto" style="max-width:600px;">Contactez-nous pour un conseil personnalisé selon vos besoins et vos envies.</p>
            <a href="../pages/contact.php#booking" class="btn btn-gold btn-lg rounded-pill px-5">
                <i class="bi bi-chat-dots-fill me-2"></i>Demander un conseil
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
