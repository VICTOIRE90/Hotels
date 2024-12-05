<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact WhatsApp</title>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body onload="detectDeviceAndRedirect()">


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

    <div style="text-align: center;">
        <p id="desktop-message" style="display:none;">
            Scannez ce QR code avec votre téléphone pour ouvrir WhatsApp :
        </p>
        <canvas id="qrcode"></canvas>
    </div>



    <script>
        function detectDeviceAndRedirect() {
            const whatsappNumber = "33612345678"; // Remplacez par votre numéro WhatsApp
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
                    width: 200
                }, function(error) {
                    if (error) console.error(error);
                });
                document.getElementById("desktop-message").style.display = "block";
            }
        }
    </script>

    <?php include 'elements/footer.php'; ?>