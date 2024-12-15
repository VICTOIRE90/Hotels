<?php
$titre = "Gallery ";
require_once 'elements/header.php';
require_once 'elements/navbar.php';

// Read and decode the JSON file
$jsonData = file_get_contents('data/chambres.json');
$chambres = json_decode($jsonData, true);
?>
<!--Baniere-->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <?php foreach ($chambres as $chambre): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <?php foreach ($chambre['images'] as $image): ?>
                    <img src="<?php echo $image; ?>" class="w-100 shadow-1-strong rounded mb-4 hover-shadow" alt="Room Image" />
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Gallery -->

<?php require_once 'elements/footer.php'; ?>
