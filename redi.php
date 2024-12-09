<?php
$titre = "Reservations"; 
require_once 'elements/header.php'; 
?>

<?php require_once 'elements/navbar.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Reserver via WhatsApp</h1>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div style="text-align: center; margin-top: 20px;">
    <button id="show-qrcode-btn" style="display: none;" class="btn btn-primary">
        Afficher à nouveau le QR Code
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/qrcode"></script>
<script>
    function generateQRCode(whatsappUrl) {
        QRCode.toDataURL(whatsappUrl, { width: 200 }, function (error, url) {
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
        document.getElementById('show-qrcode-btn').addEventListener('click', function () {
            generateQRCode(whatsappUrl);
        });
    }

    // Appeler la fonction lorsque la page est chargée
    document.addEventListener('DOMContentLoaded', detectDeviceAndRedirect);
</script>

<?php include 'elements/footer.php'; ?>
