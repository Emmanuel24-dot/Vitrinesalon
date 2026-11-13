<?php
$root = '../';
$pageTitle = 'FAQ';
$pageDescription = "Trouvez les réponses aux questions fréquentes sur les services, horaires et paiements d'Éclat Beauté Studio.";
include '../includes/header.php';
include '../includes/navbar.php';

/* ----- Données de la FAQ (démonstration) ----- */
$faqs = [
    ['q' => 'Faut-il prendre rendez-vous ?', 'r' => 'Nous recommandons fortement la prise de rendez-vous pour vous garantir une disponibilité et un service optimal. Vous pouvez réserver en ligne via notre page Contact, par téléphone ou WhatsApp. Les clients sans rendez-vous sont accueillis selon les disponibilités du jour.'],
    ['q' => 'Quels sont les horaires d\'ouverture ?', 'r' => 'Notre salon est ouvert du lundi au samedi de 9h00 à 19h00. Nous sommes fermés le dimanche, sauf pour les événements spéciaux (mariages) sur réservation préalable.'],
    ['q' => 'Acceptez-vous les paiements par carte ?', 'r' => 'Oui, nous acceptons les paiements par carte bancaire, en espèces, ainsi que par mobile money (Orange Money, MTN Money, Wave). Un acompte peut être demandé pour certaines prestations longues.'],
    ['q' => 'Réalisez-vous des coiffures pour les mariages ?', 'r' => 'Absolument ! Nous proposons un Pack Mariée complet incluant un essai coiffure et maquillage, ainsi que la prestation complète le jour J, à domicile ou en salon selon vos préférences.'],
    ['q' => 'Quels soins recommandez-vous pour cheveux abîmés ?', 'r' => 'Pour les cheveux abîmés, nous recommandons notre soin capillaire réparateur en profondeur, associé à un lissage protéiné si nécessaire. Notre équipe établit un diagnostic capillaire gratuit avant toute prestation pour vous conseiller le soin le plus adapté.'],
    ['q' => 'Proposez-vous des prestations à domicile ?', 'r' => 'Oui, certaines prestations comme la coiffure et le maquillage de mariage peuvent être réalisées à domicile, sur demande et selon la disponibilité de notre équipe. Des frais de déplacement peuvent s\'appliquer.'],
    ['q' => 'Combien de temps dure une prestation de coloration ?', 'r' => 'Une coloration complète dure généralement entre 1h30 et 3h, selon la longueur et l\'épaisseur de vos cheveux ainsi que la technique choisie (coloration uniforme, balayage, mèches).'],
    ['q' => 'Puis-je annuler ou modifier mon rendez-vous ?', 'r' => 'Oui, vous pouvez annuler ou modifier votre rendez-vous jusqu\'à 24h avant l\'heure prévue en nous contactant par téléphone, WhatsApp ou via le formulaire de contact, sans aucun frais.'],
];
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">FAQ</span>
        <h1 class="text-white mt-2">Questions fréquentes</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">FAQ</span>
        </nav>
    </div>
</header>

<!-- ===================== ACCORDÉON FAQ ===================== -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq) { $id = 'faq' . $index; ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $id; ?>">
                                <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $id; ?>">
                                    <?php echo htmlspecialchars($faq['q']); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $id; ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    <?php echo htmlspecialchars($faq['r']); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="text-center mt-5">
                    <p class="text-muted">Vous n'avez pas trouvé la réponse à votre question ?</p>
                    <a href="../pages/contact.php" class="btn btn-gold rounded-pill px-5">
                        <i class="bi bi-envelope-fill me-2"></i>Contactez-nous
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
