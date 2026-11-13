<?php
$root = '../';
$pageTitle = 'Notre Équipe';
$pageDescription = "Rencontrez l'équipe de professionnels passionnés d'Éclat Beauté Studio : coiffeurs, coiffeuses et esthéticiennes expérimentés.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données de l'équipe (démonstration) ----- */
$equipe = [
    ['nom' => 'Marie-Claire Dosso', 'role' => 'Fondatrice & Coiffeuse Senior', 'exp' => '15 ans d\'expérience', 'bio' => 'Spécialiste de la coloration et du balayage, Marie-Claire a fondé le salon avec la vision d\'allier excellence technique et chaleur humaine.', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=500'],
    ['nom' => 'Sarah Bamba', 'role' => 'Coiffeuse Styliste', 'exp' => '8 ans d\'expérience', 'bio' => 'Experte en coupes modernes et coiffures événementielles, Sarah transforme chaque visage avec créativité.', 'img' => 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?q=80&w=500'],
    ['nom' => 'Jean-Paul Kouassi', 'role' => 'Coiffeur Barbier', 'exp' => '10 ans d\'expérience', 'bio' => 'Spécialiste de la coupe homme et du soin de la barbe, Jean-Paul allie précision et tendance.', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=500'],
    ['nom' => 'Awa Diabaté', 'role' => 'Esthéticienne', 'exp' => '7 ans d\'expérience', 'bio' => 'Passionnée par les soins du visage et du corps, Awa accompagne chaque cliente vers une peau éclatante.', 'img' => 'https://images.unsplash.com/photo-1559599101-f09722fb4948?q=80&w=500'],
    ['nom' => 'Fatou Traoré', 'role' => 'Maquilleuse Professionnelle', 'exp' => '6 ans d\'expérience', 'bio' => 'Fatou sublime chaque visage pour les grandes occasions avec des techniques de maquillage haute couture.', 'img' => 'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=500'],
    ['nom' => 'Aminata Coulibaly', 'role' => 'Spécialiste Onglerie', 'exp' => '5 ans d\'expérience', 'bio' => 'Aminata maîtrise toutes les techniques de pose d\'ongles, du nail art aux finitions les plus raffinées.', 'img' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=500'],
];
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Notre Équipe</span>
        <h1 class="text-white mt-2">Des experts passionnés à votre service</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Équipe</span>
        </nav>
    </div>
</header>

<!-- ===================== GRILLE ÉQUIPE ===================== -->
<section>
    <div class="container text-center mb-5" data-aos="fade-up">
        <span class="section-tag">Qui sommes-nous</span>
        <h2 class="section-title">Une équipe à l'écoute de vos envies</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle mx-auto">Des professionnels qualifiés, formés en continu, réunis autour d'une même passion : votre beauté.</p>
    </div>
    <div class="container">
        <div class="row g-4">
            <?php foreach ($equipe as $membre) { ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="<?php echo htmlspecialchars($membre['img']); ?>" alt="<?php echo htmlspecialchars($membre['nom']); ?>" loading="lazy">
                            <div class="team-social">
                                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5 class="mb-1"><?php echo htmlspecialchars($membre['nom']); ?></h5>
                            <div class="team-role mb-2"><?php echo htmlspecialchars($membre['role']); ?></div>
                            <p class="text-muted small mb-1"><i class="bi bi-award text-gold me-1"></i><?php echo htmlspecialchars($membre['exp']); ?></p>
                            <p class="text-muted small mb-0"><?php echo htmlspecialchars($membre['bio']); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
