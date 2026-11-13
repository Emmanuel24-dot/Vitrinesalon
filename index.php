<?php
$root = '';
$pageTitle = 'Accueil';
$pageDescription = "Éclat Beauté Studio - Salon de coiffure et institut de beauté haut de gamme. Révélez votre beauté naturelle avec des soins d'exception.";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ===================== HERO ===================== -->
<header class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <span class="section-tag">Salon de coiffure &amp; Institut de beauté</span>
                <h1 class="hero-title">Révélez votre <span class="text-gold">beauté naturelle</span> avec des soins d'exception</h1>
                <p class="hero-text">Chez Éclat Beauté Studio, chaque visite est une parenthèse de luxe et de bien-être. Nos experts en coiffure et en esthétique subliment votre beauté avec passion et savoir-faire.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="pages/contact.php#booking" class="btn btn-gold btn-lg rounded-pill px-5">
                        <i class="bi bi-calendar2-check me-2"></i>Réserver un rendez-vous
                    </a>
                    <a href="pages/services.php" class="btn btn-outline-light btn-lg rounded-pill px-5">
                        <i class="bi bi-stars me-2"></i>Découvrir nos services
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a href="#prestations" class="hero-scroll"><i class="bi bi-mouse2"></i></a>
</header>

<!-- ===================== PRESTATIONS PHARES ===================== -->
<section id="prestations">
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Nos prestations phares</span>
        <h2 class="section-title">Un savoir-faire d'exception pour chaque envie</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle mx-auto">Des soins capillaires aux rituels beauté, découvrez nos prestations les plus appréciées.</p>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="card-elegant">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=600" alt="Coloration et balayage" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h5>Coloration &amp; Balayage</h5>
                        <p class="text-muted small">Des couleurs sublimes et personnalisées pour révéler votre éclat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-elegant">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=600" alt="Maquillage professionnel" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h5>Maquillage Pro</h5>
                        <p class="text-muted small">Un maquillage sur-mesure pour vos événements et occasions spéciales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-elegant">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1519415510236-718bdfcd89c1?q=80&w=600" alt="Soin du visage" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h5>Soins du Visage</h5>
                        <p class="text-muted small">Des rituels relaxants pour une peau éclatante et reposée.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-elegant">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=600" alt="Manucure et onglerie" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h5>Manucure &amp; Onglerie</h5>
                        <p class="text-muted small">Des mains soignées et sublimées par nos expertes en onglerie.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="pages/services.php" class="btn btn-outline-gold rounded-pill px-5">Voir tous nos services</a>
        </div>
    </div>
</section>

<!-- ===================== AVANTAGES ===================== -->
<section class="bg-pink-soft">
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Pourquoi nous choisir</span>
        <h2 class="section-title">Nos avantages</h2>
        <div class="divider-gold"></div>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-award-fill"></i></div>
                    <h5>Experts certifiés</h5>
                    <p class="text-muted small mb-0">Une équipe de professionnels formés aux dernières techniques.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-flower1"></i></div>
                    <h5>Produits premium</h5>
                    <p class="text-muted small mb-0">Des marques haut de gamme respectueuses de votre peau et vos cheveux.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-emoji-smile-fill"></i></div>
                    <h5>Ambiance zen</h5>
                    <p class="text-muted small mb-0">Un cadre élégant et apaisant pour un moment de détente totale.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-clock-history"></i></div>
                    <h5>Ponctualité</h5>
                    <p class="text-muted small mb-0">Des rendez-vous respectés pour s'adapter à votre emploi du temps.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== GALERIE RAPIDE ===================== -->
<section>
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Galerie</span>
        <h2 class="section-title">Un aperçu de notre univers</h2>
        <div class="divider-gold"></div>
    </div>
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=700" alt="Coupe et brushing">
                    <div class="gallery-overlay"><span>Coupe &amp; Brushing</span></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&w=700" alt="Salon de coiffure">
                    <div class="gallery-overlay"><span>Notre Salon</span></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=700" alt="Maquillage">
                    <div class="gallery-overlay"><span>Maquillage</span></div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="pages/gallery.php" class="btn btn-gold rounded-pill px-5">Voir toute la galerie</a>
        </div>
    </div>
</section>

<!-- ===================== TÉMOIGNAGES ===================== -->
<section class="bg-pink-soft">
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Témoignages</span>
        <h2 class="section-title">Ce que disent nos clientes</h2>
        <div class="divider-gold"></div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="testimonial-card">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200" class="testimonial-avatar" alt="Cliente satisfaite">
            <div class="testimonial-stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-text">"Une expérience exceptionnelle ! L'équipe est à l'écoute, le résultat dépasse toujours mes attentes. Je recommande vivement Éclat Beauté Studio."</p>
            <h6 class="mt-3 mb-0">Aïcha Koné</h6>
            <small class="text-muted">Cliente fidèle depuis 3 ans</small>
        </div>
        <div class="text-center mt-4">
            <a href="pages/testimonials.php" class="btn btn-outline-gold rounded-pill px-5">Lire plus de témoignages</a>
        </div>
    </div>
</section>

<!-- ===================== APPEL À L'ACTION ===================== -->
<section>
    <div class="container">
        <div class="cta-band text-center" data-aos="zoom-in">
            <h2 class="text-white mb-3">Offrez-vous un moment de pure beauté</h2>
            <p class="text-white-50 mb-4 mx-auto" style="max-width:600px;">Réservez dès maintenant votre rendez-vous et laissez nos experts prendre soin de vous.</p>
            <a href="pages/contact.php#booking" class="btn btn-gold btn-lg rounded-pill px-5">
                <i class="bi bi-calendar2-check me-2"></i>Réserver maintenant
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
