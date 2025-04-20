<?php $title = 'Restaurant et Dejeuner';
require_once 'elements/header.php'; ?>
<?php require_once 'elements/navbar.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $title ?></h1>
        </div>
    </div>
</div>
<!-- Fin -->
<!-- Page Header End -->

<!-- Introduction Restaurant -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Gastronomie</span>
            <h1 class="display-5 fw-semibold">Découvrez notre <span class="text-primary border-bottom border-primary pb-1">Restaurant</span></h1>
            <p class="text-muted mx-auto" style="max-width: 700px;">Savourez une expérience culinaire exceptionnelle dans un cadre élégant. Notre chef propose une cuisine raffinée mêlant saveurs locales et internationales.</p>
        </div>
    </div>
</div>

<!-- Contenu du restaurant -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Catégories de menus -->
        <div class="mb-5">
            <ul class="nav nav-pills justify-content-center mb-4" id="menu-tabs" role="tablist">
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link active rounded-pill px-4 py-2" id="menu-tab" data-bs-toggle="pill" data-bs-target="#content1" type="button" role="tab" aria-controls="content1" aria-selected="true">
                        <i class="fa fa-utensils me-2"></i>Menus
                    </button>
                </li>
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link rounded-pill px-4 py-2" id="dessert-tab" data-bs-toggle="pill" data-bs-target="#content2" type="button" role="tab" aria-controls="content2" aria-selected="false">
                        <i class="fa fa-ice-cream me-2"></i>Desserts
                    </button>
                </li>
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link rounded-pill px-4 py-2" id="plat-tab" data-bs-toggle="pill" data-bs-target="#content3" type="button" role="tab" aria-controls="content3" aria-selected="false">
                        <i class="fa fa-drumstick-bite me-2"></i>Plats
                    </button>
                </li>
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link rounded-pill px-4 py-2" id="dejeuner-tab" data-bs-toggle="pill" data-bs-target="#content4" type="button" role="tab" aria-controls="content4" aria-selected="false">
                        <i class="fa fa-coffee me-2"></i>Petit-déjeuner
                    </button>
                </li>
            </ul>
        </div>

        <!-- Contenu des onglets -->
        <div class="tab-content">
            <!-- Menus -->
            <div class="tab-pane fade show active" id="content1" role="tabpanel" aria-labelledby="menu-tab">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="/img/plat-1.jpg" class="card-img-top" alt="Menu complet" style="height: 200px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Populaire</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Menu Gastronomique</h5>
                                <p class="text-muted small mb-3">Entrée, plat, dessert et boisson</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">45€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="/img/plat-2.jpg" class="card-img-top" alt="Menu du jour" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Menu du Chef</h5>
                                <p class="text-muted small mb-3">Suggestions du jour par notre chef</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">35€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-1.jpg" class="card-img-top" alt="Menu végétarien" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Menu Végétarien</h5>
                                <p class="text-muted small mb-3">Sélection de plats sans viande</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">30€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-2.jpg" class="card-img-top" alt="Menu enfant" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Menu Enfant</h5>
                                <p class="text-muted small mb-3">Spécialement conçu pour les petits</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">15€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desserts -->
            <div class="tab-pane fade" id="content2" role="tabpanel" aria-labelledby="dessert-tab">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-3.jpg" class="card-img-top" alt="Tiramisu" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Tiramisu Maison</h5>
                                <p class="text-muted small mb-3">Au café et mascarpone crémeux</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">8€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-1.jpg" class="card-img-top" alt="Crème brûlée" style="height: 200px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Favori</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Crème Brûlée</h5>
                                <p class="text-muted small mb-3">À la vanille de Madagascar</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">7.50€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-2.jpg" class="card-img-top" alt="Fondant au chocolat" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Fondant au Chocolat</h5>
                                <p class="text-muted small mb-3">Cœur coulant et glace vanille</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">9€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-3.jpg" class="card-img-top" alt="Assiette de fruits" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Assiette de Fruits Frais</h5>
                                <p class="text-muted small mb-3">Sélection selon la saison</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">6€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plats -->
            <div class="tab-pane fade" id="content3" role="tabpanel" aria-labelledby="plat-tab">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-2.jpg" class="card-img-top" alt="Filet de bœuf" style="height: 200px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Signature</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Filet de Bœuf</h5>
                                <p class="text-muted small mb-3">Sauce au poivre et pommes fondantes</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">26€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-3.jpg" class="card-img-top" alt="Filet de dorade" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Filet de Dorade</h5>
                                <p class="text-muted small mb-3">Légumes de saison et sauce vierge</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">22€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-1.jpg" class="card-img-top" alt="Risotto" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Risotto aux Champignons</h5>
                                <p class="text-muted small mb-3">Champignons des bois et parmesan</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">18€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-2.jpg" class="card-img-top" alt="Suprême de volaille" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Suprême de Volaille</h5>
                                <p class="text-muted small mb-3">Purée maison et jus corsé</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">19€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Petit-déjeuner -->
            <div class="tab-pane fade" id="content4" role="tabpanel" aria-labelledby="dejeuner-tab">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-3.jpg" class="card-img-top" alt="Petit-déjeuner continental" style="height: 200px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Inclus</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Continental</h5>
                                <p class="text-muted small mb-3">Viennoiseries, pain, confitures et boissons chaudes</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">12€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-1.jpg" class="card-img-top" alt="Petit-déjeuner américain" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Américain</h5>
                                <p class="text-muted small mb-3">Œufs, bacon, pancakes et jus de fruit</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">16€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-2.jpg" class="card-img-top" alt="Petit-déjeuner santé" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Santé</h5>
                                <p class="text-muted small mb-3">Granola, yaourt, fruits frais et smoothie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">14€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/about-3.jpg" class="card-img-top" alt="Petit-déjeuner buffet" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Buffet Complet</h5>
                                <p class="text-muted small mb-3">Accès à toutes nos options de petit-déjeuner</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">19€</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Commander</a>
                                </div>
                            </div>
                        </div>
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

<script>
    // Animation du bouton retour en haut
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            document.querySelector('.back-to-top').style.display = "block";
        } else {
            document.querySelector('.back-to-top').style.display = "none";
        }
    };
</script>

<?php require_once 'elements/qrcode.php'; ?>
<?php require_once 'elements/footer.php'; ?>