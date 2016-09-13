<?php
require "vendor/autoload.php";

$app = new Slim\App();//se crea el objeto

$app->get('/saludo', function($request, $response, $args){
    $response->write("<h1>Hola bienveniods a su programa github</h1>");
    return $response;

});


$app->run();
?>
