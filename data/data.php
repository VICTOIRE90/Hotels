<?php

// Fonction pour générer une description aléatoire
function genererDescription(): string
{
    $descriptions = [
        "Cette chambre offre un cadre idéal pour se détendre après une journée bien remplie.",
        "Les intérieurs sont décorés avec goût, mélangeant modernité et charme traditionnel.",
        "Profitez d'une literie confortable et de linge de haute qualité.",
        "Un espace lumineux grâce à de grandes fenêtres laissant entrer la lumière naturelle.",
        "Parfaitement équipée, elle comprend un bureau, un fauteuil et une télévision à écran plat.",
        "La salle de bain privative est dotée d'articles de toilette gratuits et d'une douche spacieuse.",
        "Une connexion Wi-Fi haut débit est disponible pour rester connecté.",
        "Certaines chambres offrent une vue imprenable sur les paysages environnants.",
        "Les tons apaisants de la décoration contribuent à une ambiance relaxante.",
        "Que ce soit pour affaires ou pour le plaisir, cette chambre répond à vos besoins."
    
    ];
    return $descriptions[array_rand($descriptions)];
}

// Génération des chambres
$chambres = [];
for ($i = 1; $i <= 70; $i++) {
    $chambres[] = [
        "nom" => "Chambre {$i}",
        "numero" => $i,
        "prix" => rand(50, 300), // Prix entre 50 et 300 €
        "lit" => 1, // 1 à 3 lits
        "description" => genererDescription(),
        "wifi" => (bool)rand(0, 1), // Wi-Fi disponible ou non
        "stars" => rand(1, 5), // Entre 1 et 5 étoiles
        "img" => genereLiensImages($imageLinks)
    ];
}

// Fonction pour récupérer les liens des images
function genereLiensImages( $imageLinksge): string
{
    $listeLiensImages = $imageLinksge;
    return $listeLiensImages[array_rand($listeLiensImages)];
}


function getImageLinks($directory = '../img') {
    $imageLinks = [];
    $files = scandir($directory);
    foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']) && strpos($file, 'room') !== false) {
            $imageLinks[] = $directory . '/' . $file;
        }
    }
    return $imageLinks;
}

$imageLinks = getImageLinks();

// Conversion en JSON
$json = json_encode($chambres, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// Sauvegarder dans un fichier JSON (facultatif)
file_put_contents("chambres.json", $json);

// Affichage pour vérification
header('Content-Type: application/json; charset=utf-8');
echo $json;
