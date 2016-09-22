<?php
require "vendor/autoload.php";
require "controler/controler.php";
require "controler/controler-privado.php";

$app = new Slim\App();//se crea el objeto
$c = $app->getContainer();

$c['view'] = new \Slim\Views\PhpRenderer('plantillas/');
$app->add(new \Slim\Middleware\SafeURLMiddleware());

$app->add(new \Slim\Middleware\HttpBasicAuthentication([
  "users" => ["admin" => "admin", "rodolfo" => "contraseñaderodolfo"],
  "path" => "/preguntas/nueva"
]));

$app->get("/", function($request, $response, $args){
    $response = $this->view->render($response, "plantilla1.php", []);
    return $response;
});
/*URLS*/
//$app->get("/", "\controler-privado:cargarHome");
$app->get("/preguntas/nueva", "\controler:cargarFormularioPreguntaNueva");
$app->post("/preguntas/nueva", "\controler:crearPreguntaNueva");


$app->run();
?>
