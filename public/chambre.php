<?php
$titre = "Chambres";
$titrebis = "Nos chambres";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../elements/navbar.php';
?>
<!-- Ajout des fichiers CSS et JS nécessaires -->


<?php
$description1 = "<Strong> Laissez-vous séduire par notre Chambre Deluxe à 50$ par nuit.</Strong>
Offrez-vous le summum du confort et de l'élégance, idéal pour affaires ou loisirs.
Profitez d'un lit king-size haut de gamme et d'un coin salon raffiné.
Salle de bain moderne et équipements premium :<Strong> Wi‑Fi ultra rapide, climatisation réglable, TV HD, minibar et coffre‑fort sécurisé.</Strong>
Réservez dès maintenant et vivez un séjour inoubliable où luxe et modernité se conjuguent.";

$description2 = " <Strong> Découvrez l'expérience ultime dans notre Chambre Deluxe à seulement 100$ par nuit.</Strong>
Parfaite pour les séjours d'affaires comme de loisirs, cette chambre élégante et spacieuse vous accueille avec un lit king-size, un coin salon raffiné, une salle de bain moderne et tous les équipements indispensables (Wi‑Fi gratuit, climatisation, TV HD, minibar et coffre‑fort).
Réservez dès maintenant pour vivre un séjour inoubliable où confort, style et modernité se conjuguent pour votre plus grand plaisir."
?>
<!-- Banière -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $titrebis ?></h1>
        </div>
    </div>
</div>
<!-- Fin -->
<!-- Fin -->

<!-- Introduction aux chambres -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Hébergement de luxe</span>
            <h1 class="display-5 fw-semibold">Découvrez nos <span class="text-primary border-bottom border-primary pb-1">Chambres</span></h1>
            <p class="text-muted mx-auto" style="max-width: 700px;">Profitez d'un confort exceptionnel dans nos chambres soigneusement aménagées pour vous offrir une expérience de séjour inoubliable.</p>
        </div>

        <div class="row g-5">
            <!-- Première chambre -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm h-100 transition-hover">
                    <div class="position-relative overflow-hidden">
                        <img class="card-img-top" src="img/room-1.jpg" alt="Chambre Standard" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary shadow-sm">Standard</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div class="badge bg-primary px-3 py-2 rounded-pill">
                                <span class="fs-5 fw-bold">50$</span> / nuit
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h3 class="card-title h4 fw-semibold text-uppercase mb-3 text-center">Chambre Standard – Confort Moderne</h3>
                        <p class="card-text text-muted mb-4">
                            <?php echo $description1; ?>
                        </p>
                        <div class="mb-4">
                            <h4 class="h5 fw-semibold mb-3">Inclus dans votre séjour :</h4>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-wifi text-primary"></i>
                                        </div>
                                        <span>Wi-Fi haut débit</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-coffee text-primary"></i>
                                        </div>
                                        <span>Petit-déjeuner</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-tv text-primary"></i>
                                        </div>
                                        <span>TV écran plat</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-bath text-primary"></i>
                                        </div>
                                        <span>Salle de bain privée</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="galeryChambre_standar.php" class="btn btn-outline-primary px-4">
                                <i class="fa fa-images me-2"></i> Galerie
                            </a>
                            <a href="javascript:void(0);" onclick="detectDeviceAndRedirect()" class="btn btn-primary px-4">
                                <i class="fa fa-calendar-check me-2"></i> Réserver
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième chambre -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm h-100 transition-hover">
                    <div class="position-relative overflow-hidden">
                        <a href="Details/chambre.php?id=2">
                            <img class="card-img-top" src="img/room-2.jpg" alt="Chambre Deluxe" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary shadow-sm">Deluxe</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div class="badge bg-primary px-3 py-2 rounded-pill">
                                <span class="fs-5 fw-bold">100$</span> / nuit
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h3 class="card-title h4 fw-semibold text-uppercase mb-3 text-center">Chambre Deluxe – Luxe et élégance</h3>
                        <p class="card-text text-muted mb-4">
                            <?php echo $description2; ?>
                        </p>
                        <div class="mb-4">
                            <h4 class="h5 fw-semibold mb-3">Inclus dans votre séjour :</h4>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-wifi text-primary"></i>
                                        </div>
                                        <span>Wi-Fi haut débit</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-coffee text-primary"></i>
                                        </div>
                                        <span>Petit-déjeuner</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-tv text-primary"></i>
                                        </div>
                                        <span>TV écran plat</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2">
                                            <i class="fa fa-bath text-primary"></i>
                                        </div>
                                        <span>Salle de bain moderne</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="galeryChambre_lux.php" class="btn btn-outline-primary px-4">
                                <i class="fa fa-images me-2"></i> Galerie
                            </a>
                            <a href="javascript:void(0);" onclick="detectDeviceAndRedirect()" class="btn btn-primary px-4">
                                <i class="fa fa-calendar-check me-2"></i> Réserver
                            </a>
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

<!-- Script pour les animations -->
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