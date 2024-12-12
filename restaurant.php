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
        <h1 class="text-center mb-4">Afficher des images selon le bouton cliqué</h1>

        <!-- Boutons Bootstrap -->
        <div class="text-center mb-4">
            <button class="btn btn-primary me-2" onclick="showContent('content1')">Images 1</button>
            <button class="btn btn-success me-2" onclick="showContent('content2')">Images 2</button>
            <button class="btn btn-warning me-2" onclick="showContent('content3')">Images 3</button>
        </div>

        <!-- Sections de contenu -->
        <div id="content1" class="content-section">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-1.jpg" alt="Image 1"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-1.jpg" alt="Image 2"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-1.jpg" alt="Image 3"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-1.jpg" alt="Image 4"></div>
            </div>
        </div>

        <div id="content2" class="content-section">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3 images"><img src="./img/about-2.jpg" alt="Image 5"></div>
                <div class="col-12 col-md-6 col-lg-3 images"><img src="./img/about-2.jpg" alt="Image 6"></div>
                <div class="col-12 col-md-6 col-lg-3 images"><img src="./img/about-2.jpg" alt="Image 7"></div>
                <div class="col-12 col-md-6 col-lg-3 images"><img src="./img/about-2.jpg" alt="Image 8"></div>
            </div>
        </div>

        <div id="content3" class="content-section">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-3.jpg" alt="Image 9"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-3.jpg" alt="Image 10"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-3.jpg" alt="Image 11"></div>
                <div class="col-12 col-md-6 col-lg-3"><img src="img/about-3.jpg" alt="Image 12"></div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    
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