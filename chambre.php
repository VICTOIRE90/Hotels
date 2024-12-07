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

    <title>chambres</title>
</head>

<body>
    <!-- Menu fixé en haut -->
    <?php require_once 'elements/navbar.php'; ?>


    

    <!--baniere-->
    <div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Nos chambres</h1>
            </div>
        </div>
    </div>
    <!--fin-->

    <!-- partie chambre -->
    <div class="container-xxl py-5">
        <div class="row g-4">
            <?php
            $chambres = json_decode(file_get_contents('data/chambres.json'), true);

            foreach ($chambres as $chambre) {
                echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <a href="Details/chambre1.php"><img class="img-fluid" src="' . $chambre['img'] . '" alt=""></a>
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$' . $chambre['prix'] . '/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">' . $chambre['nom'] . '</h5>
                                <div class="ps-2">';
                for ($i = 0; $i < 5; $i++) {
                    if ($i < $chambre['stars']) {
                        echo '<small class="fa fa-star text-primary"></small>';
                    } else {
                        echo '<small class="fa fa-star text-secondary"></small>';
                    }
                }
                echo '          </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>' . $chambre['lit'] . ' Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>' . $chambre['bath'] . ' Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">' . $chambre['description'] . '</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Details/chambre1.php">Gallerie</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="redi.php">Reserver</a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    </div>
    </div>
    <!-- fin partie chambre -->

    <!-- footer -->




    <?php require_once 'elements/footer.php'; ?>