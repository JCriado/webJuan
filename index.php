<?php

session_start();

//SLIM
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

//TWIG (templates)
require 'Slim/Extras/Views/Twig.php';
\Slim\Extras\Views\Twig::$twigDirectory = dirname(__FILE__) . '/Twig';

//Enganchamos TWIG a SLIM y creamos la app SLIM
$twigView = new \Slim\Extras\Views\Twig();

$app = new \Slim\Slim(array(
    'view' => $twigView));

///////////////////////////////////////////////////////////////////////////////
//        RENDERIZADO DE TEMPLATES                                           //
///////////////////////////////////////////////////////////////////////////////

$app->get('/', function() use ($app){
    $app->render('categoria.html');
});

$app->get('/categoria', function() use ($app){
    $app->render('categoria.html');
});

$app->get('/producto', function() use ($app){
    $app->render('producto.html');
});

$app->get('/carrito', function() use ($app){
    $app->render('carrito.html');
});

$app->get('/facturacion', function() use ($app){
    $app->render('facturacion.html');
});

$app->run();