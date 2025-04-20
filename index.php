<?php
$title = "Accueil";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
?>

<!-- Carrousel -->
<div id="carouselExampleAutoplaying" class="carousel slide position-relative" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/img/carousel-1.jpg" class="w-100" alt="...">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, 0.4);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Costa Rita</h6>
                            <h1 class="display-3 text-white mb-4 animate__animated animate__fadeInUp fw-bold">Découvrez un hôtel de luxe de marque</h1>
                            <a href="chambre.php" class="btn btn-primary py-3 px-5 mt-2 animate__animated animate__fadeInUp">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="/assets/img/carousel-2.jpg" class="d-block w-100" alt="...">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, 0.4);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Costa Rita</h6>
                            <h1 class="display-3 text-white mb-4 animate__animated animate__fadeInUp fw-bold">Découvrez un hôtel de luxe de marque</h1>
                            <a href="chambre.php" class="btn btn-primary py-3 px-5 mt-2 animate__animated animate__fadeInUp">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <div class="btn btn-dark px-2 py-2 rounded-circle">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <div class="btn btn-dark px-2 py-2 rounded-circle">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </div>
        <span class="visually-hidden">Next</span>
    </button>

    <!-- Indicateurs de slide -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
</div>

<!-- A Propos-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="badge bg-primary text-white px-3 py-2 mb-3">À propos de nous</span>
                <h1 class="mb-4 display-5 fw-semibold">Bienvenue chez <span class="text-primary text-uppercase border-bottom border-primary pb-1">Costa Rita</span></h1>
                <p class="mb-4 lead text-muted">Découvrez notre hôtel de luxe niché dans un cadre exceptionnel, où confort moderne et élégance intemporelle se rencontrent pour créer une expérience inoubliable.</p>
                
             
                
                <div class="d-flex align-items-center mb-4">
                    <a href="about.php" class="btn btn-primary py-3 px-5">En savoir plus</a>
                    <a href="contact.php" class="btn btn-outline-primary py-3 px-5 ms-3">Contactez-nous</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded shadow-sm w-75 wow zoomIn" data-wow-delay="0.1s" src="/img/about-1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded shadow-sm w-100 wow zoomIn" data-wow-delay="0.3s" src="/img/about-2.jpg">
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

<!-- partie chambre -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Nos chambres</span>
            <h1 class="display-5 fw-semibold">Explorez nos <span class="text-primary border-bottom border-primary pb-1">chambres</span></h1>
        </div>

        <div class="row g-5 align-items-center">
            <!-- Texte descriptif -->
            <div class="col-lg-6">
                <div class="position-relative rounded overflow-hidden shadow-sm">
                    <img src="./img/room-3.jpg" alt="Chambre luxueuse" class="img-fluid w-100">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: rgba(0, 0, 0, 0.6);">
                        <h4 class="text-white">Confort & Élégance</h4>
                        <p class="text-white-50 mb-0">À partir de 99€/nuit</p>
                    </div>
                </div>
                
                <div class="mt-4 bg-light p-4 rounded shadow-sm">
                    <h4 class="mb-3">Choisissez la chambre qui vous convient</h4>
                    <p class="text-muted mb-0">
                        Plongez dans un univers de calme et de bien-être grâce à nos chambres conçues pour offrir une expérience unique.
                        Que ce soit pour une nuit de détente, un séjour en famille ou un moment de repos après une journée bien remplie,
                        nos chambres allient confort et modernité pour répondre à toutes vos attentes.
                    </p>
                </div>
            </div>

            <!-- Images et infos -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-6">
                        <div class="position-relative rounded overflow-hidden shadow-sm h-100">
                            <img src="./img/room-1.jpg" alt="Chambre moderne et confortable" class="img-fluid w-100 h-100" style="object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: rgba(0, 0, 0, 0.6);">
                                <h5 class="text-white mb-0">Chambre Standard</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="position-relative rounded overflow-hidden shadow-sm h-100">
                            <img src="./img/room-2.jpg" alt="Deuxième vue de la chambre" class="img-fluid w-100 h-100" style="object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: rgba(0, 0, 0, 0.6);">
                                <h5 class="text-white mb-0">Suite De Luxe</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="bg-primary p-4 rounded shadow">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-white mb-2">Des chambres pour tous les goûts</h4>
                                    <p class="text-white-50 mb-0">Explorez notre sélection complète de chambres</p>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="./chambre.php" class="btn btn-light py-2 px-4">
                                        Voir plus <i class="fa fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin partie chambre -->

<!-- Services -->
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
<!-- fin -->

<!-- footer -->

<?php require_once 'elements/footer.php'; ?>
<!-- fin -->

<!-- bouton de retour en haut -->
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