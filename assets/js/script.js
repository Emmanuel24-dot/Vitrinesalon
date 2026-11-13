/* =========================================================
   ÉCLAT BEAUTÉ STUDIO — Script principal
   ========================================================= */
document.addEventListener('DOMContentLoaded', function () {

    /* ----- Animations au scroll (AOS) ----- */
    if (window.AOS) {
        AOS.init({ duration: 800, once: true, offset: 80 });
    }

    /* ----- Navbar : effet au scroll ----- */
    const navbar = document.getElementById('mainNavbar');
    const toggleNavbarClass = function () {
        if (!navbar) return;
        if (window.scrollY > 60) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
    toggleNavbarClass();
    window.addEventListener('scroll', toggleNavbarClass);

    /* ----- Bouton retour en haut ----- */
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            backToTop.classList.toggle('show', window.scrollY > 400);
        });
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ----- Fermer le menu mobile après un clic sur un lien ----- */
    const navLinks = document.querySelectorAll('#navMenu .nav-link, #navMenu .btn');
    const navMenu = document.getElementById('navMenu');
    if (navMenu) {
        const bsCollapse = window.bootstrap ? new bootstrap.Collapse(navMenu, { toggle: false }) : null;
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (navMenu.classList.contains('show') && bsCollapse) {
                    bsCollapse.hide();
                }
            });
        });
    }

    /* ----- Filtres de la galerie ----- */
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    if (filterButtons.length && galleryItems.length) {
        filterButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.getAttribute('data-filter');
                galleryItems.forEach(function (item) {
                    const category = item.getAttribute('data-category');
                    const show = filter === 'all' || filter === category;
                    item.closest('.gallery-col').style.display = show ? 'block' : 'none';
                });
            });
        });
    }

    /* ----- Lightbox simple pour la galerie ----- */
    const lightboxModalEl = document.getElementById('lightboxModal');
    if (lightboxModalEl && window.bootstrap) {
        const lightboxModal = new bootstrap.Modal(lightboxModalEl);
        const lightboxImg = document.getElementById('lightboxImage');
        const lightboxCaption = document.getElementById('lightboxCaption');
        document.querySelectorAll('.gallery-item img').forEach(function (img) {
            img.addEventListener('click', function () {
                lightboxImg.src = img.getAttribute('src');
                lightboxCaption.textContent = img.getAttribute('alt') || '';
                lightboxModal.show();
            });
        });
    }

    /* ----- Validation des formulaires (Bootstrap) ----- */
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

});
