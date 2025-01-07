<?php 
$titre = "Accueil";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
 ?>

    <!-- Carrousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div id="header-carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carousel-1.jpg" class="w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Costa Rita</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez un hôtel de luxe de marque</h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Costa Rita</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez un hôtel de luxe de marque</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <!-- Texte dans le carrousel -->
    
    </div>

    <!-- A Propos-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">A propos de nous</h6>
                    <h1 class="mb-4 text-center text-md-start text-lg-start">Bienvenue chez <span class="text-primary text-uppercase">costa rita !</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">64</h2>
                                    <p class="mb-0">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">120</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg" style="visibility: visible; animation-delay: 0.7s; animation-name: zoomIn;">
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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title text-center text-primary text-uppercase">Nos chambres</h6>
                <h1 class="mb-5">Explorer nos <span class="text-primary text-uppercase">chambres</span></h1>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <h4 class="d-flex justify-content-center">Choissez la chambre qui vous convient</h4>
                    <p class="para">
                        Plongez dans un univers de calme et de bien-être grâce à nos chambres conçues pour offrir une expérience unique.
                        Que ce soit pour une nuit de détente, un séjour en famille, ou un moment de repos après une journée bien remplie,
                        nos chambres allient confort et modernité pour répondre à toutes vos attentes.
                    </p>

                    <p class="para">
                        Chaque chambre est équipée de tout le nécessaire pour rendre votre séjour agréable : un lit confortable, une salle de bain privée,
                        Plongez dans un univers de calme et de bien-être grâce à nos chambres conçues pour offrir une expérience unique.
                        Que ce soit pour une nuit de détente, un séjour en famille, ou un moment de repos après une journée bien remplie,
                        nos chambres allient confort et modernité pour répondre à toutes vos attentes.                </p>

                    <p class="para">
                        Réservez dès maintenant votre chambre et laissez-vous séduire par une hospitalité qui place votre confort au cœur de nos priorités.
                    </p>
                </div>

                <div class="col-12 col-lg-6 col-md-6">
                    <img src="./img/room-1.jpg" alt="" srcset="" class="img-fluid wow zoomIn" data-wow-delay="0.4s" style="width: 100%; height: 200px; visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <img src="./img/room-2.jpg" alt="" srcset="" class="img-fluid mt-3 wow zoomIn" data-wow-delay="0.7s" style="width: 100%; height: 200px; visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">

                    <a class="btn btn-sm btn-primary rounded py-2 px-4 mt-2" href="./chambre.php">Gallerie<i class="fa fa-arrow-right ps-2 pt-2"></i></a>
                </div>

            </div>

        </div>
    </div>
    <!-- fin partie chambre -->
    
    <!-- Services -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title text-center text-primary text-uppercase">Nos Services</h6>
                <h1 class="mb-5">Explorer nos <span class="text-primary text-uppercase">Services</span></h1>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <a class="service-item rounded" href="chambre.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Chambre &amp; Appartment</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
            
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a class="service-item rounded" href="restaurant.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Alimentation &amp; Restaurant</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <a class="service-item rounded" href="salle.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Événement &amp; fête</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
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





