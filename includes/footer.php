    <!-- ===================== FOOTER ===================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand d-inline-flex align-items-center mb-3" href="<?php echo $root; ?>index.php">
                        <i class="bi bi-flower2 brand-icon text-gold"></i>
                        <span class="brand-text text-white">Éclat Beauté <span class="brand-accent">Studio</span></span>
                    </a>
                    <p class="footer-text">Révélez votre beauté naturelle avec des soins d'exception. Notre institut allie savoir-faire, élégance et bien-être pour une expérience beauté inoubliable.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" rel="noopener" class="social-icon" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://wa.me/22500000000" target="_blank" rel="noopener" class="social-icon" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Navigation</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo $root; ?>index.php">Accueil</a></li>
                        <li><a href="<?php echo $root; ?>pages/about.php">À propos</a></li>
                        <li><a href="<?php echo $root; ?>pages/services.php">Services</a></li>
                        <li><a href="<?php echo $root; ?>pages/gallery.php">Galerie</a></li>
                        <li><a href="<?php echo $root; ?>pages/pricing.php">Tarifs</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Plus</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo $root; ?>pages/team.php">Notre équipe</a></li>
                        <li><a href="<?php echo $root; ?>pages/testimonials.php">Témoignages</a></li>
                        <li><a href="<?php echo $root; ?>pages/faq.php">FAQ</a></li>
                        <li><a href="<?php echo $root; ?>pages/contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Restons connectés</h6>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt-fill"></i> Cocody Riviera, Abidjan, Côte d'Ivoire</li>
                        <li><i class="bi bi-telephone-fill"></i> +225 07 00 00 00 00</li>
                        <li><i class="bi bi-envelope-fill"></i> contact@eclatbeautestudio.com</li>
                        <li><i class="bi bi-clock-fill"></i> Lun - Sam : 9h00 - 19h00</li>
                    </ul>
                    <form class="newsletter-form mt-3" action="#" method="post" onsubmit="return false;">
                        <label for="newsletterEmail" class="form-label small text-white-50 mb-2">Inscrivez-vous à notre newsletter</label>
                        <div class="input-group">
                            <input type="email" id="newsletterEmail" class="form-control" placeholder="Votre email" required>
                            <button class="btn btn-gold" type="submit"><i class="bi bi-send-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 pb-4 small text-white-50">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Éclat Beauté Studio. Tous droits réservés.</p>
                <p class="mb-0">Conçu avec <i class="bi bi-heart-fill text-gold"></i> pour la beauté et l'élégance.</p>
            </div>
        </div>
    </footer>

    <!-- Bouton retour en haut -->
    <button id="backToTop" class="back-to-top" aria-label="Retour en haut">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Script personnalisé -->
    <script src="<?php echo $root; ?>assets/js/script.js"></script>
</body>
</html>
