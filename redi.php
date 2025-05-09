<?php
$titre = "Reservations";
require_once 'elements/header.php';
?>


<?php require_once 'elements/navbar.php'; ?>
/*
<!-- Page Header Start -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Reserver via WhatsApp</h1>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-xxl py-5 mb-5" style="text-align: center;">
    <p id="desktop-message" class="animated slideInDown" style="display:none;"></p>
    Scannez ce QR code avec votre téléphone pour ouvrir WhatsApp :
    </p>
    <canvas id="qrcode" class="animated zoomIn"></canvas>
</div>




<script>
    function detectDeviceAndRedirect() {
        const whatsappNumber = "+243818584144"; // Remplacez par votre numéro WhatsApp
        const message = "Bonjour, je souhaite avoir plus d'informations.";
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

        const userAgent = navigator.userAgent.toLowerCase();

        if (/mobile|android|iphone|ipad|tablet/i.test(userAgent)) {
            // Redirection automatique pour les mobiles
            window.location.href = whatsappUrl;
        } else {
            // Générer un QR code pour les utilisateurs sur ordinateur
            const qrCodeContainer = document.getElementById("qrcode");
            QRCode.toCanvas(qrCodeContainer, whatsappUrl, {
                width: 350

            }, function(error) {
                if (error) console.error(error);
            });
            document.getElementById("desktop-message").style.display = "block";
        }
    }
</script>

<?php require_once 'elements/qrcode.php'; ?>
<?php require_once 'elements/footer.php'; ?>