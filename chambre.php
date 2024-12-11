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

            echo '          </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>' . $chambre['lit'] . ' Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>' . $chambre['bath'] . ' Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">' . $chambre['description'] . '</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="gallery.php">Gallerie</a>
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
<!-- fin partie chambre -->

<!-- footer -->


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/qrcode"></script>
<script>
    function generateQRCode(whatsappUrl) {
        QRCode.toDataURL(whatsappUrl, {
            width: 200
        }, function(error, url) {
            if (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Impossible de générer le QR code.',
                });
                return;
            }

            // Afficher le QR code dans une alerte SweetAlert2
            Swal.fire({
                title: 'Scanner QR Code',
                html: `<p>Scannez ce QR Code avec WhatsApp Web :</p>
                       <img src="${url}" alt="QR Code" style="width: 200px; height: 200px;">`,
                icon: 'info',
                confirmButtonText: 'Fermer',
            }).then(() => {
                // Afficher le bouton une fois l'alerte fermée
                document.getElementById('show-qrcode-btn').style.display = 'inline-block';
            });
        });
    }

    function detectDeviceAndRedirect() {
        const whatsappNumber = "+243975939378"; // Remplacez par votre numéro WhatsApp
        const message = "Bonjour, je souhaite avoir plus d'informations.";
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

        const userAgent = navigator.userAgent.toLowerCase();

        if (/mobile|android|iphone|ipad|tablet/i.test(userAgent)) {
            // Redirection automatique pour les mobiles
            window.location.href = whatsappUrl;
        } else {
            // Affichage automatique du QR code pour les ordinateurs
            generateQRCode(whatsappUrl);
        }

        // Ajouter un événement au bouton pour réafficher le QR code
        document.getElementById('show-qrcode-btn').addEventListener('click', function() {
            generateQRCode(whatsappUrl);
        });
    }

    // Appeler la fonction lorsque la page est chargée
    
</script>
<?php require_once 'elements/footer.php'; ?>