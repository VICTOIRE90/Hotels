<?php
$titre = "Gallery ";
$titrebis = "Gallery";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../elements/navbar.php';
?>
<!--Baniere-->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $titrebis ?></h1>
        </div>
    </div>
</div>
<!-- Fin -->

<!-- Styles pour la galerie -->
<style>
    .gallery-container {
        padding: 80px 0;
    }

    .gallery-title {
        font-size: 36px;
        margin-bottom: 40px;
        text-align: center;
        position: relative;
    }

    .gallery-title::after {
        content: "";
        position: absolute;
        bottom: -15px;
        left: 50%;
        width: 60px;
        height: 3px;
        background-color: var(--primary);
        transform: translateX(-50%);
    }

    .gallery-filter {
        margin-bottom: 40px;
        text-align: center;
    }

    .gallery-filter button {
        margin: 0 8px;
        padding: 8px 20px;
        border: none;
        background: none;
        color: #333;
        font-weight: 500;
        transition: all 0.3s ease;
        border-radius: 30px;
    }

    .gallery-filter button:hover,
    .gallery-filter button.active {
        background-color: var(--primary);
        color: white;
    }

    .gallery-item {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
        height: 300px;
        position: relative;
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay-content {
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay-content {
        transform: translateY(0);
    }

    .gallery-overlay-icon {
        font-size: 40px;
        margin-bottom: 10px;
    }

    /* Animation pour l'apparition des éléments */
    .fade-in-up {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in-up.appear {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Galerie Moderne -->
<div class="container gallery-container">
    <h2 class="gallery-title fade-in-up">Notre Collection de Photos</h2>

    <div class="gallery-filter fade-in-up">
        <button class="filter-btn active" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="rooms">Chambres</button>
        <button class="filter-btn" data-filter="events">Événements</button>
        <button class="filter-btn" data-filter="dining">Restauration</button>
        <button class="filter-btn" data-filter="facilities">Installations</button>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="rooms">
            <div class="gallery-item">
                <img src="img/room-1.jpg" alt="Chambre Luxueuse">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Chambre Luxueuse</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="rooms">
            <div class="gallery-item">
                <img src="img/room-2.jpg" alt="Suite Junior">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Suite Junior</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="rooms">
            <div class="gallery-item">
                <img src="img/room-3.jpg" alt="Suite Deluxe">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Suite Deluxe</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="events">
            <div class="gallery-item">
                <img src="img/fete-1.jpg" alt="Événement Spécial">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Événement Spécial</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="events">
            <div class="gallery-item">
                <img src="img/fete-2.jpg" alt="Fête d'Anniversaire">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Fête d'Anniversaire</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="events">
            <div class="gallery-item">
                <img src="img/fete-3.jpg" alt="Conférence">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Conférence</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="dining">
            <div class="gallery-item">
                <img src="img/plat-1.jpg" alt="Restaurant Gourmet">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Restaurant Gourmet</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="dining">
            <div class="gallery-item">
                <img src="img/plat-2.jpg" alt="Buffet Petit-déjeuner">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Buffet Petit-déjeuner</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 fade-in-up gallery-item-container" data-category="facilities">
            <div class="gallery-item">
                <img src="img/reunion-1.jpg" alt="Salle de Réunion">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <div class="gallery-overlay-icon">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <h5>Salle de Réunion</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour agrandir les images -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" class="img-fluid" id="modalImage">
            </div>
        </div>
    </div>
</div>

<!-- JavaScript pour la galerie -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation d'apparition au défilement
        const fadeElements = document.querySelectorAll('.fade-in-up');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                }
            });
        }, {
            threshold: 0.1
        });

        fadeElements.forEach(element => {
            observer.observe(element);
        });

        // Filtrage des éléments de la galerie
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item-container');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Ajouter la classe active au bouton cliqué
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }

                    // Réinitialiser l'animation
                    item.classList.remove('appear');
                    void item.offsetWidth; // Force reflow
                    item.classList.add('appear');
                });
            });
        });

        // Modal pour agrandir les images
        const galleryOverlays = document.querySelectorAll('.gallery-overlay');
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.querySelector('#imageModal .modal-title');

        galleryOverlays.forEach(overlay => {
            overlay.addEventListener('click', function() {
                const parentItem = this.closest('.gallery-item');
                const itemImage = parentItem.querySelector('img');
                const itemTitle = this.querySelector('h5').textContent;

                modalImage.src = itemImage.src;
                modalTitle.textContent = itemTitle;
                modal.show();
            });
        });
    });
</script>

<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>