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
                html: `<p>Scannez ce QR Code avec votre telephone :</p>
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