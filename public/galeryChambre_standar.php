<?php
$title = "Galerie des Chambres Standards";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../elements/navbar.php';
?>
<style>
    .gallery-container {
        padding: 50px 0;
        background-color: #f8f9fa;
        text-align: center;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .portrait {
        aspect-ratio: 3 / 4;
    }

    .landscape {
        aspect-ratio: 4 / 3;
    }

    .gallery-item .hover-message {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 10), transparent);
        color: #fff;
        padding: 15px;
        text-align: center;
        font-size: 16px;
        opacity: 0;
        transform: translateY(100%);
        transition: opacity 0.4s ease, transform 0.4s ease;
        font-family: 'Arial', sans-serif;
        letter-spacing: 0.5px;
    }

    .gallery-item:hover .hover-message {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const galleryItems = document.querySelectorAll('.gallery-item img');
        galleryItems.forEach(img => {
            const isPortrait = Math.random() > 0.5;
            img.classList.add(isPortrait ? 'portrait' : 'landscape');
        });
    });
</script>

<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Galerie des Chambres Standards</h1>
        </div>
    </div>
</div>
<div class="container gallery-container">
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="img/room-1.jpg" alt="Chambre Standard">
            <div class="hover-message">Découvrez notre Chambre Standard</div>
        </div>
        <div class="gallery-item">
            <img src="img/room-2.jpg" alt="Chambre Deluxe">
            <div class="hover-message">Découvrez notre Chambre Deluxe</div>
        </div>
        <div class="gallery-item">
            <img src="img/room-3.jpg" alt="Chambre Suite">
            <div class="hover-message">Découvrez notre Chambre Suite</div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>