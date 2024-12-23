<?php
$titre = "Chambres";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
?>


<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Nos chambres</h1>
        </div>
    </div>
</div>
<!--fin-->

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div id="content1" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/about-1.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="content2" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/about-2.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="content3" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/about-3.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="content4" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/about-4.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="content5" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/room-1.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="content6" class="content-section">
                <div class="row"> <!-- Utilisation de g-4 pour espacement -->
                    <img src="img/room-2.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div class="">
                    <button class="btn ms-2 p-0" onclick="showContent('content1')"><img src="img/about-1.jpg" alt="Image 1" class="img-fluid images"></button>
                    <button class="btn m-0 p-0" onclick="showContent('content2')"><img src="img/about-2.jpg" alt="Image 1" class="img-fluid images"></button>
                    <button class="btn m-0 p-0" onclick="showContent('content3')"><img src="img/about-3.jpg" alt="Image 1" class="img-fluid images"></button>
                    <button class="btn m-0 p-0" onclick="showContent('content4')"><img src="img/about-4.jpg" alt="Image 1" class="img-fluid images"></button>
                    <button class="btn m-0 p-0" onclick="showContent('content5')"><img src="img/room-1.jpg" alt="Image 1" class="img-fluid images"></button>
                    <button class="btn m-0 p-0" onclick="showContent('content6')"><img src="img/room-2.jpg" alt="Image 1" class="img-fluid images"></button>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-6">
            <h3 class="mt-3 text-center text-uppercase">Chambre Deluxe à 100$ – Confort et services inclus</h3>
            <p class="para" id="txt">
            Plongez dans un confort absolu avec notre <span class="fw-bold">Chambre Deluxe</span> à seulement <span class="fw-bold">100$ par nuit. </span>
            Idéale pour les séjours d’affaires ou de loisirs, cette chambre élégante et 
            spacieuse vous offre tout ce dont vous avez besoin pour une expérience mémorable.
            </p>

           <div>
                <h4>Inclus dans votre séjour :</h4>
                <i class="fa fa-wifi text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Wi-Fi haut débit gratuit</span> pour rester connecté à tout moment.<br>
                <i class="fa fa-coffee text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Petit-déjeuner savoureux offert,</span> pour bien démarrer votre journée. <br>
                <i class="fa fa-tv text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Une télévision écran plat</span> pour vos moments de détente. <br>
                <i class="fa fa-bath text-primary me-2"></i><span class="fw-bold txt-1">Une salle de bain privée luxueuse</span> équipée d’articles de toilette gratuits.
           </div>
        </div>
    </div>



<!--fin partie 1-->
           



    <div class="row">

    <div class="col-12 col-md-6 col-lg-6">
            <h3 class="mt-3 text-center text-uppercase">Chambre Executive à 120$ – Luxe et confort exclusifs</h3>
            <p class="para" id="txt">
                Découvrez notre <span class="fw-bold">Chambre Executive</span> à seulement <span class="fw-bold">120$ par nuit</span>, idéale pour un séjour raffiné. Profitez d’une combinaison parfaite de luxe et de services premium.
            </p>

            <div class="bout">
                <h4>Inclus dans votre séjour :</h4>
                <i class="fa fa-wifi text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Wi-Fi haut débit gratuit</span> pour rester connecté à tout moment.<br>
                <i class="fa fa-coffee text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Petit-déjeuner gastronomique offert,</span> pour une expérience culinaire unique.<br>
                <i class="fa fa-tv text-primary me-2 mb-4"></i><span class="fw-bold txt-1">Une télévision écran plat</span> avec chaînes internationales.<br>
                <i class="fa fa-bath text-primary me-2"></i><span class="fw-bold txt-1">Salle de bain privée luxueuse</span> avec jacuzzi et articles de toilette premium.
            </div>
        </div>




        <div class="col-12 col-md-6 col-lg-6">
            <!-- Deuxième partie -->
            <div id="contenue1" class="contenue-section">
                <div class="row">
                    <img src="img/about-1.jpg" alt="Image 1" class="images-1">
                </div>
            </div>

            <div id="contenue2" class="contenue-section">
                <div class="row">
                    <img src="img/about-2.jpg" alt="Image 2" class="images-1">
                </div>
            </div>

            <div id="contenue3" class="contenue-section">
                <div class="row">
                    <img src="img/about-3.jpg" alt="Image 3" class="images-1">
                </div>
            </div>

            <div id="contenue4" class="contenue-section">
                <div class="row">
                    <img src="img/about-4.jpg" alt="Image 4" class="images-1">
                </div>
            </div>

            <div id="contenue5" class="contenue-section">
                <div class="row">
                    <img src="img/room-1.jpg" alt="Image 5" class="images-1">
                </div>
            </div>

            <div id="contenue6" class="contenue-section">
                <div class="row">
                    <img src="img/room-2.jpg" alt="Image 6" class="images-1">
                </div>
            </div>

            <div class="mb-3">
                <button class="btn ms-2 p-0" onclick="afficherContenue('contenue1')"><img src="img/about-1.jpg" alt="Image 1" class="img-fluid images"></button>
                <button class="btn m-0 p-0" onclick="afficherContenue('contenue2')"><img src="img/about-2.jpg" alt="Image 2" class="img-fluid images"></button>
                <button class="btn m-0 p-0" onclick="afficherContenue('contenue3')"><img src="img/about-3.jpg" alt="Image 3" class="img-fluid images"></button>
                <button class="btn m-0 p-0" onclick="afficherContenue('contenue4')"><img src="img/about-4.jpg" alt="Image 4" class="img-fluid images"></button>
                <button class="btn m-0 p-0" onclick="afficherContenue('contenue5')"><img src="img/room-1.jpg" alt="Image 5" class="img-fluid images"></button>
                <button class="btn m-0 p-0" onclick="afficherContenue('contenue6')"><img src="img/room-2.jpg" alt="Image 6" class="img-fluid images"></button> 
            </div>
        </div>
    </div>
</div>


<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h5 class="para mt-2 txt-2 text-center">
                Profitez d’un service <span class="fw-bold">conciergerie personnalisé</span>, d’un espace de travail premium et d’un lit ultra-confortable pour un confort ultime.
            </h5>

            <h5 class="para mt-2 txt-2 text-center">
                <span class="fw-bold">Réservez dès maintenant</span> pour vivre une expérience exceptionnelle où chaque détail compte. <span class="fw-bold">Votre satisfaction est notre priorité !</span>
            </h5>

            <a class="btn btn-sm btn-primary rounded py-2 px-4" onclick="detectDeviceAndRedirect()">Reserver Maintenant</a>
        </div>
    </div>
</div>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showContent(sectionId) {
        // Cacher toutes les sections
        document.querySelectorAll('.content-section').forEach(section => {
            section.style.display = 'none';
        });

        // Afficher la section cliquée
        document.getElementById(sectionId).style.display = 'block';
    }

    // Afficher la première section par défaut
    document.addEventListener('DOMContentLoaded', () => {
        showContent('content1');
    });


    function afficherContenue(sectionId) {
        // Cacher toutes les sections
        document.querySelectorAll('.contenue-section').forEach(section => {
            section.style.display = 'none';
        });

        // Afficher la section cliquée
        document.getElementById(sectionId).style.display = 'block';
    }

    // Afficher la première section par défaut
    document.addEventListener('DOMContentLoaded', () => {
        afficherContenue('contenue1');
    });
</script>


<?php require_once 'elements/qrcode.php'; ?>
<?php require_once 'elements/footer.php'; ?>