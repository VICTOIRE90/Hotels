<?php
$titre = "Galerie du Restaurant";
$titrebis = "Galerie du Restaurant";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../elements/navbar.php';
?>
<style>
    .gallery-container {
        padding: 50px 0;
        background-color: #f8f9fa;
    }

    .gallery-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        color: #343a40;
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
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay h5 {
        font-size: 1.25rem;
        font-weight: bold;
    }
</style>
<div class="container gallery-container">
    <h2 class="gallery-title">Galerie du Restaurant</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 gallery-item-container">
            <div class="gallery-item">
                <img src="img/plat-1.jpg" alt="Plat Gourmet">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <h5>Plat Gourmet</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 gallery-item-container">
            <div class="gallery-item">
                <img src="img/plat-2.jpg" alt="Buffet Petit-déjeuner">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <h5>Buffet Petit-déjeuner</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>