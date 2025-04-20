<?php
// Fichier : restaurant_evenement.php
// Description : Page Restauration & Événement - UI/UX Moderne et Professionnel

$title = "Restauration & Événement";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
?>

<!-- Hero Section -->
<div class="container-fluid page-header p-0" style="background-image: url('img/carousel-2.jpg'); background-size: cover; background-position: center; height: 30vh;">
    <div class="container-fluid page-header-inner h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
        <h1 class="display-3 fw-bold text-white mb-3 animated slideInDown"><?= $title ?></h1>
        <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Une expérience culinaire & événementielle inoubliable</p>
      
    </div>
</div>

<div class="container-fluid py-5"></div>
    <!-- Header Full Width -->
    <div class="text-center mb-5 px-4">
        <span class="badge bg-primary text-white px-3 py-2 mb-3">Restauration et Evenement</span>
        <h1 class="display-5 fw-semibold">
            Découvrez nos <span class="text-primary border-bottom border-primary pb-1">Services</span>
        </h1>
        <p class="text-muted mx-auto" style="max-width: 700px;">

        <!-- Services Section -->
        <main  class="container-xxl py-5">
            <div class="row g-4">
                <?php
                $services = [
                    [
                        'icon'   => 'utensils',
                        'title'  => 'Service Traiteur',
                        'desc'   => 'Plats variés et gourmands pour tous types d\'événements.',
                        'images' => ['plat-1.jpg', 'plat-2.jpg'],
                        'link'   => 'restaurant.php',
                        'btn'    => 'Voir les menus'
                    ],
                    [
                        'icon'   => 'chair',
                        'title'  => 'Location de Salles',
                        'desc'   => 'Espaces modernes équipés pour conférences et fêtes.',
                        'images' => ['fete-2.jpg', 'fete-3.jpg'],
                        'link'   => 'salle.php',
                        'btn'    => 'Explorer nos salles'
                    ],
                ];

                foreach ($services as $srv): ?>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-lg h-100 overflow-hidden rounded-3">
                            <div class="position-relative">
                                <img src="img/<?= $srv['images'][0] ?>"
                                     alt="<?= $srv['title'] ?>"
                                     class="card-img-top rounded-3"
                                     loading="lazy">
                                <div class="card-img-overlay d-flex align-items-end p-3 bg-gradient-to-t from-black/60 rounded-3">
                                    <i class="fas fa-<?= $srv['icon'] ?> fa-2x text-white"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><?= $srv['title'] ?></h3>
                                <p class="card-text text-muted"><?= $srv['desc'] ?></p>
                                <a href="<?= $srv['link'] ?>" class="btn btn-outline-primary rounded-pill">
                                    <?= $srv['btn'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <!-- Testimonials Section -->
      
    </div>
</div>
<!-- Footer Section -->



        <?php
        require_once 'elements/qrcode.php';
        require_once 'elements/footer.php';
        ?>