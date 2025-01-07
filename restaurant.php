<?php $title = 'Restaurant et Dejeuner'; 
require_once 'elements/header.php'; ?>
<?php require_once 'elements/navbar.php'; ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Restaurant</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <div class="container mt-5">

    <!-- Boutons Bootstrap -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <button class="btn btn-primary" onclick="showContent('content1')">Menus</button>
            <button class="btn btn-success" onclick="showContent('content2')">Dessert</button>
            <button class="btn btn-warning" onclick="showContent('content3')">Plat</button>
            <button class="btn btn-primary" onclick="showContent('content4')">Dejeuner</button>
        </div>
    </div>

    <!-- Sections de contenu -->

    <div id="content1" class="content-section">
        <div class="row g-4 mt-1 ms-lg-3 ms-3 me-3"> <!-- Utilisation de g-4 pour espacement -->
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 12" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 5" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 6" class="img-fluid"></div>    
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 1" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 2" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 3" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 4" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 12" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 5" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 6" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 7" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 8" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 9" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 10" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
        </div>
    </div>

    <div id="content2" class="content-section">
        <div class="row g-4 mt-1 ms-3 me-3"> <!-- Utilisation de g-4 pour espacement -->
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 1" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 2" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 3" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-1.jpg" alt="Image 4" class="img-fluid"></div>
        </div>
    </div>

    <div id="content3" class="content-section">
        <div class="row g-4 mt-1 ms-3 me-3"> <!-- Utilisation de g-4 pour espacement -->
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 5" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 6" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 7" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-2.jpg" alt="Image 8" class="img-fluid"></div>
        </div>
    </div>

    <div id="content4" class="content-section">
        <div class="row g-4 mt-1 ms-3 me-3"> <!-- Utilisation de g-4 pour espacement -->
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 9" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 10" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 11" class="img-fluid"></div>
            <div class="col-12 col-md-4 col-lg-3"><img src="img/about-3.jpg" alt="Image 12" class="img-fluid"></div>
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
</script>


<?php include 'elements/footer.php'; ?>