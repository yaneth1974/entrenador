<?php
require "vendor/autoload.php";

$app = new Slim\App();//se crea el objeto

$app->get('/', function($request, $response, $args){
    $response->write("<h1>Programa Entrenador</h1>");
    return $response;

});

$app->run();
?>
