<?php
$title = "Contact";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../elements/navbar.php';
?>

<!-- Page Header Start -->
<div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $title ?></h1>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-3">Nous joindre</span>
            <h1 class="display-5 fw-semibold">Restez en <span class="text-primary border-bottom border-primary pb-1">Contact</span></h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">Notre équipe est à votre disposition pour répondre à toutes vos questions et vous accompagner dans la préparation de votre séjour.</p>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="card-title mb-4">Envoyez-nous un message</h3>
                        <p class="text-muted mb-4">Contactez-nous directement via WhatsApp pour une réponse rapide à toutes vos questions concernant nos services, disponibilités ou tarifs spéciaux.</p>

                        <div class="text-center mt-5">
                            <p id="desktop-message" style="display:none;" class="mb-4">
                                Scannez ce QR code avec votre téléphone pour ouvrir WhatsApp :
                            </p>
                            <canvas id="qrcode" class="mb-4"></canvas>

                            <button onclick="detectDeviceAndRedirect()" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                                <i class="fab fa-whatsapp me-2"></i> Contacter par WhatsApp
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="bg-light p-4 h-100 rounded shadow-sm transition-hover">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3 text-white">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <h4 class="mb-0">Adresse</h4>
                            </div>
                            <p class="mb-0 text-muted">123 Rue de l'Hôtel, 75000 Paris, France</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light p-4 h-100 rounded shadow-sm transition-hover">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3 text-white">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h4 class="mb-0">Email</h4>
                            </div>
                            <p class="mb-0 text-muted">contact@costarita.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light p-4 h-100 rounded shadow-sm transition-hover">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3 text-white">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h4 class="mb-0">Téléphone</h4>
                            </div>
                            <p class="mb-0 text-muted">+33 (0)1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light p-4 h-100 rounded shadow-sm transition-hover">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3 text-white">
                                    <i class="fa fa-clock"></i>
                                </div>
                                <h4 class="mb-0">Horaires</h4>
                            </div>
                            <p class="mb-0 text-muted">Réception ouverte 24h/24, 7j/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Map Section -->
<div class="container-xxl mb-5">
    <div class="container px-lg-0">
        <div class="card border-0 shadow overflow-hidden">
            <div class="card-body p-0">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.95410694215!2d2.2769955050696374!3d48.85883773941353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sfr!2sma!4v1680525766409!5m2!1sfr!2sma"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>

<!-- Bouton retour en haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top position-fixed" style="bottom: 30px; right: 30px; z-index: 99; display: none;">
    <i class="fa fa-arrow-up"></i>
</a>

<script>
    // Animation du bouton retour en haut
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            document.querySelector('.back-to-top').style.display = "block";
        } else {
            document.querySelector('.back-to-top').style.display = "none";
        }
    };

    function detectDeviceAndRedirect() {
        const whatsappNumber = "33612345678"; // Remplacez par votre numéro WhatsApp
        const message = "Bonjour, je souhaite avoir plus d'informations sur votre hôtel.";
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

        const userAgent = navigator.userAgent.toLowerCase();

        if (/mobile|android|iphone|ipad|tablet/i.test(userAgent)) {
            // Redirection automatique pour les mobiles
            window.location.href = whatsappUrl;
        } else {
            // Générer un QR code pour les utilisateurs sur ordinateur
            const qrCodeContainer = document.getElementById("qrcode");
            QRCode.toCanvas(qrCodeContainer, whatsappUrl, {
                width: 200,
                margin: 2,
                color: {
                    dark: "#0d6efd",
                    light: "#FFFFFF"
                }
            }, function(error) {
                if (error) console.error(error);
            });
            document.getElementById("desktop-message").style.display = "block";
        }
    }

    // Générer le QR code au chargement de la page
    document.addEventListener("DOMContentLoaded", function() {
        detectDeviceAndRedirect();
    });
</script>

<?php require_once __DIR__ . '/../elements/qrcode.php'; ?>
<?php require_once __DIR__ . '/../elements/footer.php'; ?>