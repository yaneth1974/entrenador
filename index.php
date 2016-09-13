<?php
require "vendor/autoload.php";

$app = new Slim\App();//se crea el objeto

$app->get('/', function($request, $response, $args){
    $response->write("<h1>Programa Entrenador</h1>");
    return $response;

});
/* Crear tabla Temas */
        $sql = <<<sql
create table temas(
    id int primary key auto_increment,
    titulo varchar(20) not null
    titulo_url varchar(40) not null
);
sql;
        $res = $conexion->exec($sql);
        if($res===FALSE){
            echo "<p>No se ha podido crear la tabla Temas</p>";
            echo "<p>".$conexion->errorInfo()[2]."</p>";
        }else{
            echo "<p>Tabla temas creada!!!</p>";
        }
$app->run();
?>
