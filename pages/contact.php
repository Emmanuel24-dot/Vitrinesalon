<?php
$root = '../';
$pageTitle = 'Contact';
$pageDescription = "Contactez Éclat Beauté Studio pour réserver votre rendez-vous : adresse, téléphone, WhatsApp, email et horaires d'ouverture.";

/* ----- Traitement du formulaire de contact (démonstration, sans envoi réel) ----- */
$formSuccess = false;
$formErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
    $sujet = isset($_POST['sujet']) ? trim($_POST['sujet']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($nom === '') { $formErrors[] = 'Le nom est obligatoire.'; }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $formErrors[] = 'Veuillez saisir un email valide.'; }
    if ($telephone === '') { $formErrors[] = 'Le téléphone est obligatoire.'; }
    if ($message === '') { $formErrors[] = 'Le message est obligatoire.'; }

    if (empty($formErrors)) {
        /* Ici, on pourrait envoyer un email avec mail() ou enregistrer en base de données. */
        $formSuccess = true;
    }
}

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- ===================== PAGE HEADER ===================== -->
<header class="page-header">
    <div class="container">
        <span class="section-tag">Contact</span>
        <h1 class="text-white mt-2">Parlons de votre prochain rendez-vous</h1>
        <nav class="breadcrumb-elegant mt-2">
            <a href="../index.php">Accueil</a><i class="bi bi-chevron-right"></i><span class="text-white-50">Contact</span>
        </nav>
    </div>
</header>

<!-- ===================== COORDONNÉES ===================== -->
<section id="booking">
    <div class="container">
        <div class="row g-5">
            <!-- Informations de contact -->
            <div class="col-lg-4" data-aos="fade-right">
                <span class="section-tag">Nos coordonnées</span>
                <h2 class="section-title">Restons en contact</h2>
                <p class="text-muted mb-4">Notre équipe est disponible pour répondre à toutes vos questions et organiser votre prochain rendez-vous beauté.</p>

                <div class="contact-info-box">
                    <div class="icon-circle"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h6 class="mb-1">Adresse</h6>
                        <p class="text-muted small mb-0">Cocody Riviera, Abidjan, Côte d'Ivoire</p>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-circle"><i class="bi bi-telephone-fill"></i></div>
                    <div>
                        <h6 class="mb-1">Téléphone</h6>
                        <p class="text-muted small mb-0"><a href="tel:+22507000000" class="text-muted">+225 07 00 00 00 00</a></p>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-circle"><i class="bi bi-whatsapp"></i></div>
                    <div>
                        <h6 class="mb-1">WhatsApp</h6>
                        <p class="text-muted small mb-0"><a href="https://wa.me/22507000000" target="_blank" rel="noopener" class="text-muted">+225 07 00 00 00 00</a></p>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-circle"><i class="bi bi-envelope-fill"></i></div>
                    <div>
                        <h6 class="mb-1">Email</h6>
                        <p class="text-muted small mb-0"><a href="mailto:contact@eclatbeautestudio.com" class="text-muted">contact@eclatbeautestudio.com</a></p>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-circle"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <h6 class="mb-1">Horaires</h6>
                        <p class="text-muted small mb-0">Lundi - Samedi : 9h00 - 19h00<br>Dimanche : Fermé</p>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <a href="https://facebook.com" target="_blank" rel="noopener" class="social-icon bg-light text-dark" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="social-icon bg-light text-dark" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://tiktok.com" target="_blank" rel="noopener" class="social-icon bg-light text-dark" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

            <!-- Formulaire de contact / réservation -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="card-elegant p-4 p-md-5">
                    <h3 class="mb-4">Réserver un rendez-vous / Nous écrire</h3>

                    <?php if ($formSuccess) { ?>
                        <div class="alert alert-success d-flex align-items-center gap-2" role="alert">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                            <span>Merci ! Votre message a bien été envoyé. Notre équipe vous recontactera très rapidement.</span>
                        </div>
                    <?php } ?>

                    <?php if (!empty($formErrors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                <?php foreach ($formErrors as $err) { ?>
                                    <li><?php echo htmlspecialchars($err); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <form action="contact.php#booking" method="post" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nom" class="form-label">Nom complet *</label>
                                <input type="text" class="form-control" id="nom" name="nom" required value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
                                <div class="invalid-feedback">Veuillez saisir votre nom.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone" class="form-label">Téléphone *</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" required value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
                                <div class="invalid-feedback">Veuillez saisir votre numéro de téléphone.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="sujet" class="form-label">Sujet</label>
                                <select class="form-select" id="sujet" name="sujet">
                                    <option value="Rendez-vous coiffure">Rendez-vous coiffure</option>
                                    <option value="Rendez-vous beauté">Rendez-vous beauté</option>
                                    <option value="Pack mariée">Pack mariée</option>
                                    <option value="Demande d'information">Demande d'information</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                <div class="invalid-feedback">Veuillez saisir votre message.</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="contact_submit" class="btn btn-gold btn-lg rounded-pill px-5">
                                    <i class="bi bi-send-fill me-2"></i>Envoyer ma demande
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CARTE GOOGLE MAPS ===================== -->
<section class="pt-0">
    <div class="container">
        <div class="map-wrap" data-aos="fade-up">
            <iframe src="https://www.google.com/maps?q=Cocody%20Riviera%2C%20Abidjan%2C%20C%C3%B4te%20d%27Ivoire&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Localisation Éclat Beauté Studio"></iframe>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
