<?php
$titre = "Chambres";
require_once 'elements/header.php';
require_once 'elements/navbar.php';
?>

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

        $totalChambres = count($chambres);
        $chambresPerPage = 12; // Nombre de chambres par page
        $totalPages = ceil($totalChambres / $chambresPerPage);

        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $startIndex = ($currentPage - 1) * $chambresPerPage;
        $chambresToShow = array_slice($chambres, $startIndex, $chambresPerPage);
        

        foreach ($chambresToShow as $chambre) {
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

            echo '          </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>' . $chambre['lit'] . ' Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>' . $chambre['bath'] . ' Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">' . $chambre['description'] . '</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="gallery.php?chambre_id=' . $chambre['numero'] . '">Gallerie</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="javascript:void(0);" onclick="detectDeviceAndRedirect()">Reserver</a>
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
<div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
            if ($currentPage > 1) {
                echo '<li class="page-item">
                        <a class="page-link" href="?page=' . ($currentPage - 1) . '" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>';
            }

            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '">
                        <a class="page-link" href="?page=' . $i . '">' . $i . '</a>
                      </li>';
            }

            if ($currentPage < $totalPages) {
                echo '<li class="page-item">
                        <a class="page-link" href="?page=' . ($currentPage + 1) . '" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>';
            }
            ?>
        </ul>
    </nav>
</div>
<!-- fin partie chambre -->

<!-- footer -->

<?php require_once 'elements/qrcode.php'; ?>
<?php require_once 'elements/footer.php'; ?>
<!-- Pagination -->