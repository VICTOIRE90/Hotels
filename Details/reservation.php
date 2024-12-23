<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
 
     
     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
     
    <title>Reservation</title>
</head>
<body>

    <nav class="navbar">
        <div class="container navbar-container">
            <!-- Logo -->
            <a class="navbar-brand d-flex justify-content-between" href="index.html">
                <h1 class="m-0 text text-uppercase">Costa Rita</h1>
            </a>
            <!-- Hamburger button (visible sur tous les écrans) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon navbar-to"></span>
            </button>
            <!-- Offcanvas Menu -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservation.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">A Propos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="chambre.html">Chambres</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Baniere-->
    <div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Reservation</h1>
            </div>
        </div>
    </div>
    <!--fin-->


    <!--Formulaire de reservation-->
    <div class="container-fluid mt-3 px-2 px-md-5">
        <div class="row g-5 align-items-center">
            <div class="col-12">
                <h6 class="section-title text-start text-primary text-uppercase">Reservation</h6>
                <h1 class="mb-4 text-center text-md-start">Réservez votre <span class="text-primary text-uppercase">Chambre chez nous</span></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-8 p-3 p-md-5 mb-5 back shadow rounded">
                <form action="">
                    <div>
                        <label for="#" class="mb-3">
                            <h1 class="fs-5">Remplissez le formulaire:</h1>
                        </label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nom</span>
                        <input type="text" class="form-control" placeholder="Votre Nom" aria-label="nom" aria-describedby="basic-addon1" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Post-Nom</span>
                        <input type="text" class="form-control" placeholder="Votre nom complet" aria-label="nom" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Prénom</span>
                        <input type="text" class="form-control" placeholder="Votre nom complet" aria-label="nom" aria-describedby="basic-addon1" required>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Téléphone</span>
                        <input type="tel" class="form-control" placeholder="Numéro de téléphone" aria-label="téléphone" aria-describedby="basic-addon2" required>                    
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">E-mail</span>
                        <input type="email" class="form-control" placeholder="Votre e-mail" aria-label="email" aria-describedby="basic-addon3" required>                    
                    </div>
    
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label">Adulte</label>
                            <select class="form-select" aria-label="nombre-adulte">
                                <option selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Enfant</label>
                            <select class="form-select" aria-label="nombre-enfant">
                                <option selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
    
    
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label for="dateDebut" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="dateDebut" name="dateDebut" required>
                        </div>
                        <div class="col-6">
                            <label for="dateFin" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="dateFin" name="dateFin" required>
                        </div>
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">Commentaires</span>
                        <textarea class="form-control" placeholder="Ajoutez vos remarques ici..." aria-label="Commentaires"></textarea>
                    </div>
    
                    <div class="col-12 col-lg-3 mt-3 text-center">
                        <button class="btn btn-primary rounded-3 w-100" type="submit">Réserver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin-->


    <!-- footer -->
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-12">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></h6>
                    <p class="mb-2 text-foot"><i class="fa fa-map-marker-alt me-3"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">123 Street, New York, États-Unis</font></font></p>
                    <p class="mb-2 text-foot"><i class="fa fa-phone-alt me-3"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+012 345 67890</font></font></p>
                    <p class="mb-2 text-foot"><i class="fa fa-envelope me-3"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@exemple.com</font></font></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Services</font></font></h6>
                            <a class="btn btn-link" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alimentation et restauration</font></font></a>
                            <a class="btn btn-link" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chambre et Appartement</font></font></a>
                            <a class="btn btn-link" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Événement et fête</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-12 text-center text-md-center mb-3 mb-md-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        © </font></font><a class="border-bottom" href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">COSTA RITA</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , tous droits réservés. 
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- fin -->
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>