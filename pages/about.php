<?php
$root = '../';
$pageTitle = 'À propos';
$pageDescription = "Découvrez l'histoire, la mission et les valeurs d'Éclat Beauté Studio, votre institut de beauté et salon de coiffure haut de gamme.";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">À propos de nous</span>
        <h1 class="text-white mt-2">Notre histoire, notre passion</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">À propos</span>
        </nav>
    </div>
</header>

<!-- ===================== HISTOIRE ===================== -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?q=80&w=900" alt="Intérieur du salon Éclat Beauté Studio" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-tag">Notre histoire</span>
                <h2 class="section-title">Une aventure née d'une passion pour la beauté</h2>
                <p class="text-muted">Fondé en 2014 par une équipe de passionnés, Éclat Beauté Studio a débuté comme un petit salon de quartier avant de devenir une référence en matière de coiffure et de soins esthétiques. Au fil des années, nous avons façonné un espace où chaque détail est pensé pour offrir une expérience unique à notre clientèle.</p>
                <p class="text-muted mb-0">Aujourd'hui, notre institut accueille chaque jour des clients en quête d'élégance, de bien-être et de confiance en soi, dans un cadre raffiné inspiré des plus beaux salons internationaux.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== MISSION & VALEURS ===================== -->
<section class="bg-pink-soft">
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Notre mission</span>
        <h2 class="section-title">Révéler la beauté unique de chacun</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle mx-auto">Notre mission est d'offrir à chaque client une expérience beauté personnalisée, alliant expertise technique, écoute attentive et raffinement.</p>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-heart-fill"></i></div>
                    <h5>Passion</h5>
                    <p class="text-muted small mb-0">Chaque geste est exécuté avec amour du métier et souci du détail.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Excellence</h5>
                    <p class="text-muted small mb-0">Une exigence constante de qualité dans chaque prestation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                    <h5>Écoute</h5>
                    <p class="text-muted small mb-0">Votre satisfaction et votre confort sont notre priorité absolue.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-gem"></i></div>
                    <h5>Élégance</h5>
                    <p class="text-muted small mb-0">Un cadre raffiné et des prestations à la hauteur de vos attentes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== POURQUOI NOUS CHOISIR ===================== -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1559599101-f09722fb4948?q=80&w=900" alt="Équipe Éclat Beauté Studio" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <span class="section-tag">Pourquoi choisir notre institut</span>
                <h2 class="section-title">L'excellence à chaque visite</h2>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Une équipe diplômée et formée en continu aux dernières tendances.</span></li>
                    <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Des produits professionnels haut de gamme, doux pour la peau et les cheveux.</span></li>
                    <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Un cadre élégant, propre et chaleureux pensé pour votre bien-être.</span></li>
                    <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Des prestations sur-mesure adaptées à chaque morphologie et chaque envie.</span></li>
                </ul>
                <a href="../pages/team.php" class="btn btn-gold rounded-pill px-5 mt-3">Découvrir notre équipe</a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
