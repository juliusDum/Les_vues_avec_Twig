<?php
require '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader('../src/view');
$twig = new Twig\Environment($loader);

$products = [
    'product1'=>['name' => 'citron vert'],
    'product2'=>['name' => 'rhum blanc'],
    'product3'=>['name' => 'sirop de sucre de canne'],
    'product4'=>['name' => 'menthe'],
    'product5'=>['name' => 'glaçons'],
    'product6'=>['name' => 'eau gazeuse'],

];
echo $twig->render('index.html.twig', ['products' => $products]);