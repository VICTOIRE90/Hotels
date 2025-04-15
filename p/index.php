<?php
require __DIR__ . '/../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

// Définir les routes
$router->map('GET', '/', '../pubic/homepage', 'home');

$router->map('GET', '/chambres', function() {
    require __DIR__ . '/chambre.php';
});

$router->map('GET', '/contact', function() {
    require __DIR__ . '/contact.php';
});

$router->map('GET', '/evenements', function() {
    require __DIR__ . '/Evenement.php';
});

$router->map('GET', '/gallery', function() {
    require __DIR__ . '/gallery.php';
});

$router->map('GET', '/restaurant', function() {
    require __DIR__ . '/restaurant.php';
});

$router->map('GET', '/salle', function() {
    require __DIR__ . '/salle.php';
});

// Faire correspondre la requête actuelle
$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // Page 404
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo 'Page non trouvée';
}