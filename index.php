<?php
require "vendor/autoload.php";
require "controler/controler.php";
require "controler/controler-privado.php";

$app = new Slim\App();//se crea el objeto
$c = $app->getContainer();

$c['view'] = new \Slim\Views\PhpRenderer('plantillas/');

$app->get("/", function($request, $response, $args){
    $response = $this->view->render($response, "plantilla1.php", []);
    return $response;

});
/*URL*/
//$app->get("/", "\controler-privado:cargarHome");
$app->get("/preguntas/nueva", "\controler:cargarFormularioPreguntaNueva");
$app->post("/preguntas/nueva", "\controler:crearPreguntaNueva");


$app->run();
?>
