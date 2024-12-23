<?php 
$titre = "Restaurant & Evenement";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
 ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Restaurantion et Evenement</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 mt-3">
                <h6>Une variété de recettes a votre gout</h6>
                <p class="para">                    
                    Vous organisez une réunion, une conférence ou une fête ? Nous vous proposons des plats variés et délicieux pour satisfaire tous vos invités.                     
                </p>
            
                <img src="./img/plat-1.jpg" alt="" class="img-fluid mt-2 mb-2" style="width:700px;">

                <p class="para">
                    Que ce soit pour un événement professionnel ou personnel, notre équipe est à votre service pour offrir une expérience culinaire unique.
                    
                    Réservez dès maintenant et faites de votre événement une réussite gourmande !
                </p>

                <img src="./img/plat-2.jpg" alt="" class="img-fluid" style="width:700px;">
                
                <a href="rest.php" class="p-2">
                    <button class="btn btn-primary mt-2  mb-2 p-2">Voir nos plat</button>
                </a>
            </div>
        

        
            <div class="col-12 col-lg-6 col-md-6 mt-3">            
                <h6>Des espaces uniques pour tous vos événements</h6>

                <p class="para">
                    Organiser un événement réussi commence par le choix du lieu idéal. 
                    Que ce soit pour une réunion professionnelle, une grande conférence ou une fête privée, 
                    nous mettons à votre disposition des salles modernes, spacieuses et parfaitement équipées.
                </p>

                <img src="./img/fete-2.jpg" alt="" class="img-fluid mb-2 mt-2" style="width:700px;">

                <p class="para">
                    Notre salle de réunion offre un environnement calme et professionnel, 
                    idéal pour stimuler la créativité et favoriser les échanges. 
                    Pour les grandes occasions, la salle de conférence est conçue pour accueillir un public plus large, 
                    avec tout le nécessaire pour des présentations réussies. 
                    Enfin, si vous cherchez un espace festif, notre salle de fête apporte une ambiance chaleureuse et conviviale, 
                    parfaite pour célébre r vos moments précieux.

                    <img src="./img/fete-3.jpg" alt="" class="img-fluid mt-2" style="width:700px;">
                </p>

                <a href="salle.php" class="">
                    <button class="btn btn-primary p-2">Voir nos salles</button>
                </a>

            </div>
        </div>
    </div>



<?php require_once 'elements/footer.php'; ?>