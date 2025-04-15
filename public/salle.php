<?php $title = 'Salles et Événements';
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
<!-- Fin -->
<!-- Page Header End -->

<!-- Introduction Salles -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Espaces de Réception</span>
            <h1 class="display-5 fw-semibold">Nos espaces <span class="text-primary border-bottom border-primary pb-1">d'événements</span></h1>
            <p class="text-muted mx-auto" style="max-width: 700px;">Découvrez nos salles élégantes et polyvalentes, parfaites pour tous vos événements, des réunions d'affaires aux célébrations familiales.</p>
        </div>
    </div>
</div>

<!-- Navigation par onglets -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Catégories de salles -->
        <div class="mb-5">
            <ul class="nav nav-pills justify-content-center mb-4" id="salles-tabs" role="tablist">
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link active rounded-pill px-4 py-2" id="all-tab" data-bs-toggle="pill" data-bs-target="#content1" type="button" role="tab" aria-controls="content1" aria-selected="true">
                        <i class="fa fa-building me-2"></i>Toutes les salles
                    </button>
                </li>
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link rounded-pill px-4 py-2" id="fete-tab" data-bs-toggle="pill" data-bs-target="#content2" type="button" role="tab" aria-controls="content2" aria-selected="false">
                        <i class="fa fa-glass-cheers me-2"></i>Salles de fête
                    </button>
                </li>
                <li class="nav-item mx-1 mb-2" role="presentation">
                    <button class="nav-link rounded-pill px-4 py-2" id="reunion-tab" data-bs-toggle="pill" data-bs-target="#content3" type="button" role="tab" aria-controls="content3" aria-selected="false">
                        <i class="fa fa-handshake me-2"></i>Salles de réunion
                    </button>
                </li>
            </ul>
        </div>

        <!-- Contenu des onglets -->
        <div class="tab-content">
            <!-- Toutes les salles -->
            <div class="tab-pane fade show active" id="content1" role="tabpanel" aria-labelledby="all-tab">
                <div class="row g-4">
                    <!-- Grande salle de réception -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/fete-1.jpg" class="card-img-top" alt="Grande salle de réception" style="height: 250px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Premium</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Grande Salle de Réception</h5>
                                <p class="text-muted small mb-3">Idéale pour les mariages et grandes réceptions</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 300 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">Tarif sur demande</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salle de conférence -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/reunion-1.jpg" class="card-img-top" alt="Salle de conférence" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salle de Conférence</h5>
                                <p class="text-muted small mb-3">Équipée pour vos réunions professionnelles</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 50 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 150€/jour</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salon privé -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/fete-2.jpg" class="card-img-top" alt="Salon privé" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salon Privé</h5>
                                <p class="text-muted small mb-3">Espace intimiste pour vos événements privés</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 20 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 90€/jour</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salle de séminaire -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/reunion-2.jpg" class="card-img-top" alt="Salle de séminaire" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salle de Séminaire</h5>
                                <p class="text-muted small mb-3">Pour vos formations et journées d'étude</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 80 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 200€/jour</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Espace cocktail -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/fete-1.jpg" class="card-img-top" alt="Espace cocktail" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Espace Cocktail</h5>
                                <p class="text-muted small mb-3">Lieu convivial pour vos réceptions en format debout</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 120 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 180€/jour</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salle de conseil -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/reunion-1.jpg" class="card-img-top" alt="Salle de conseil" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salle de Conseil</h5>
                                <p class="text-muted small mb-3">Cadre élégant pour vos réunions stratégiques</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-friends text-primary me-2"></i>
                                        <span>Jusqu'à 15 personnes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 120€/jour</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Salles de fête -->
            <div class="tab-pane fade" id="content2" role="tabpanel" aria-labelledby="fete-tab">
                <div class="row g-4">
                    <!-- Grande salle de réception -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/fete-1.jpg" class="card-img-top" alt="Grande salle de réception" style="height: 300px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-primary text-white">Premium</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Grande Salle de Réception</h5>
                                <p class="text-muted small mb-3">Notre plus grande salle, idéale pour les mariages et grandes réceptions avec une piste de danse spacieuse et un espace scénique.</p>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-user-friends text-primary me-2"></i>
                                            <span>Capacité: 300 personnes</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-ruler-combined text-primary me-2"></i>
                                            <span>Surface: 500m²</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-music text-primary me-2"></i>
                                            <span>Sonorisation incluse</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-utensils text-primary me-2"></i>
                                            <span>Service traiteur disponible</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">Tarif sur demande</span>
                                    <a href="#" class="btn btn-outline-primary">Demande de devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salon privé -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/fete-2.jpg" class="card-img-top" alt="Salon privé" style="height: 300px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salon Privé</h5>
                                <p class="text-muted small mb-3">Espace intimiste pour vos événements privés comme les anniversaires, dîners de famille ou petites célébrations dans un cadre élégant.</p>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-user-friends text-primary me-2"></i>
                                            <span>Capacité: 20 personnes</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-ruler-combined text-primary me-2"></i>
                                            <span>Surface: 45m²</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-wifi text-primary me-2"></i>
                                            <span>WiFi haut débit</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-glass-cheers text-primary me-2"></i>
                                            <span>Service cocktail</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 90€/jour</span>
                                    <a href="#" class="btn btn-outline-primary">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Salles de réunion -->
            <div class="tab-pane fade" id="content3" role="tabpanel" aria-labelledby="reunion-tab">
                <div class="row g-4">
                    <!-- Salle de conférence -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/reunion-1.jpg" class="card-img-top" alt="Salle de conférence" style="height: 300px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salle de Conférence</h5>
                                <p class="text-muted small mb-3">Équipée avec les dernières technologies pour vos réunions professionnelles, présentations et séminaires.</p>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-user-friends text-primary me-2"></i>
                                            <span>Capacité: 50 personnes</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-ruler-combined text-primary me-2"></i>
                                            <span>Surface: 80m²</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-projector text-primary me-2"></i>
                                            <span>Vidéoprojecteur 4K</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-wifi text-primary me-2"></i>
                                            <span>WiFi haut débit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 150€/jour</span>
                                    <a href="#" class="btn btn-outline-primary">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salle de conseil -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 transition-hover">
                            <div class="position-relative overflow-hidden">
                                <img src="img/reunion-2.jpg" class="card-img-top" alt="Salle de conseil" style="height: 300px; object-fit: cover;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Salle de Conseil</h5>
                                <p class="text-muted small mb-3">Cadre élégant pour vos réunions stratégiques, avec table en U et équipements audiovisuels de pointe.</p>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-user-friends text-primary me-2"></i>
                                            <span>Capacité: 15 personnes</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-ruler-combined text-primary me-2"></i>
                                            <span>Surface: 35m²</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-tv text-primary me-2"></i>
                                            <span>Écran tactile interactif</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-coffee text-primary me-2"></i>
                                            <span>Service café inclus</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold text-primary">À partir de 120€/jour</span>
                                    <a href="#" class="btn btn-outline-primary">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section de contact pour les salles -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Services d'événements</h6>
                <h1 class="mb-4">Organisation d'événements sur mesure</h1>
                <p class="mb-4">Notre équipe d'experts en événementiel est à votre disposition pour organiser votre événement de A à Z selon vos besoins. Nous prenons en charge tous les aspects de votre événement pour vous offrir une expérience sans stress.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Traiteur haut de gamme</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Équipements audiovisuels</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Service voiturier</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Décoration personnalisée</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Coordination d'événements</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Solutions d'hébergement</p>
                        </div>
                    </div>
                </div>
                <a href="contact.php" class="btn btn-primary py-3 px-5">Contactez-nous</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <img src="img/fete-2.jpg" class="position-absolute w-100 h-100" alt="Organisation d'événements" style="object-fit: cover;">
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

<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>