<?php
require '../vendor/autoload.php';

$products = ['Unicycle', 'Bo Staff', 'Poï', 'Cyr Wheel', 'Poweriser'];

// Rendu twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp'
]);

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    echo $twig->render('index.html.twig', [
        'products' => $products,
    ]);

}
