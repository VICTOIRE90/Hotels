<?php $title = 'A Propos de nous';
require_once __DIR__ . '/../elements/header.php'; ?>

<?php require_once __DIR__ . '/../elements/navbar.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $title ?></h1>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- A Propos-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="badge bg-primary text-white px-3 py-2 mb-3">Notre Histoire</span>
                <h1 class="mb-4 display-5 fw-semibold">Bienvenue chez <span class="text-primary text-uppercase border-bottom border-primary pb-1">Costa Rita</span></h1>
                <p class="mb-4 lead text-muted">Découvrez notre hôtel de luxe où tradition et modernité se rencontrent pour offrir une expérience unique à nos clients depuis plus de 25 ans. Notre passion pour l'hospitalité et l'attention aux détails font de Costa Rita un havre de paix pour tous nos visiteurs.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-4">
                        <div class="bg-light shadow-sm rounded p-4 text-center h-100">
                            <i class="fa fa-hotel fa-2x text-primary mb-3"></i>
                            <h2 class="mb-1 counter-value" data-value="64">0</h2>
                            <p class="mb-0 text-muted small text-uppercase">Chambres</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bg-light shadow-sm rounded p-4 text-center h-100">
                            <i class="fa fa-users-cog fa-2x text-primary mb-3"></i>
                            <h2 class="mb-1 counter-value" data-value="75">0</h2>
                            <p class="mb-0 text-muted small text-uppercase">Personnel</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bg-light shadow-sm rounded p-4 text-center h-100">
                            <i class="fa fa-users fa-2x text-primary mb-3"></i>
                            <h2 class="mb-1 counter-value" data-value="1204">0</h2>
                            <p class="mb-0 text-muted small text-uppercase">Clients</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Contactez-nous</a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded shadow-sm w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded shadow-sm w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded shadow-sm w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded shadow-sm w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                        </div>
                    </div>
                    <!-- Élément décoratif -->
                    <div class="position-absolute" style="bottom: -30px; right: -30px; z-index: -1;">
                        <div class="bg-primary rounded-circle" style="width: 200px; height: 200px; opacity: 0.2;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin -->

<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Nos Services</span>
            <h1 class="display-5 fw-semibold">Explorer nos <span class="text-primary border-bottom border-primary pb-1">Services</span></h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">Découvrez les prestations exclusives que notre établissement propose pour rendre votre séjour inoubliable.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 transition-hover">
                    <div class="position-relative overflow-hidden">
                        <img src="img/room-1.jpg" class="card-img-top" alt="Chambre et appartement">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary shadow-sm">Hébergement</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded p-2 me-3">
                                <i class="fa fa-hotel text-white"></i>
                            </div>
                            <h5 class="card-title mb-0">Chambre & Appartement</h5>
                        </div>
                        <p class="card-text text-muted">Des chambres élégantes et des appartements spacieux, décorés avec soin pour offrir un confort optimal pendant votre séjour.</p>
                        <a href="chambre.php" class="btn btn-outline-primary mt-2">Découvrir <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 transition-hover">
                    <div class="position-relative overflow-hidden">
                        <img src="img/plat-1.jpg" class="card-img-top" alt="Restaurant">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary shadow-sm">Gastronomie</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded p-2 me-3">
                                <i class="fa fa-utensils text-white"></i>
                            </div>
                            <h5 class="card-title mb-0">Restaurant</h5>
                        </div>
                        <p class="card-text text-muted">Savourez une cuisine raffinée dans notre restaurant qui allie saveurs locales et internationales dans une ambiance chaleureuse.</p>
                        <a href="restaurant.php" class="btn btn-outline-primary mt-2">Découvrir <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 transition-hover">
                    <div class="position-relative overflow-hidden">
                        <img src="img/fete-1.jpg" class="card-img-top" alt="Événements">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary shadow-sm">Événements</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded p-2 me-3">
                                <i class="fa fa-glass-cheers text-white"></i>
                            </div>
                            <h5 class="card-title mb-0">Événement & Fête</h5>
                        </div>
                        <p class="card-text text-muted">Des espaces élégants et modulables pour vos célébrations, mariages, séminaires ou réunions professionnelles.</p>
                        <a href="salle.php" class="btn btn-outline-primary mt-2">Découvrir <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bouton retour en haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top position-fixed" style="bottom: 30px; right: 30px; z-index: 99; display: none;">
    <i class="fa fa-arrow-up"></i>
</a>

<!-- Script pour les animations et compteurs -->
<script>
    // Animation du bouton retour en haut
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            document.querySelector('.back-to-top').style.display = "block";
        } else {
            document.querySelector('.back-to-top').style.display = "none";
        }
    };

    // Animation des compteurs
    document.addEventListener("DOMContentLoaded", function() {
        // Pour chaque élément avec la classe counter-value
        document.querySelectorAll('.counter-value').forEach(function(counter) {
            const target = parseInt(counter.getAttribute('data-value'));
            const duration = 2000; // 2 secondes
            const startTime = Date.now();

            // Observer l'élément pour déclencher l'animation quand il entre dans la vue
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // L'élément est visible, commencer l'animation
                        animateCounter(counter, target, duration, startTime);
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(counter);
        });

        function animateCounter(element, target, duration, startTime) {
            let currentTime = Date.now();
            const elapsedTime = currentTime - startTime;

            if (elapsedTime < duration) {
                const value = Math.floor((elapsedTime / duration) * target);
                element.textContent = value;
                requestAnimationFrame(() => animateCounter(element, target, duration, startTime));
            } else {
                element.textContent = target;
            }
        }
    });
</script>

<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>