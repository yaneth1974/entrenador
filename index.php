<?php
require "vendor/autoload.php";

$app = new Slim\App();//se crea el objeto
$c = $app->getContainer();

$c['view'] = new \Slim\Views\PhpRenderer('plantillas/');

$app->get("/", function($request, $response, $args){
    $response = $this->view->render($response, "plantilla1.php", []);
    return $response;
});

$app->run();
?>
