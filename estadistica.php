<?php
class Estadistica{
  public function __invoke($request, $response, $next){

    /* Establecer la conexión con el SGBD */
    $conexion = new PDO("mysql:host=localhost", "root");


    return $next($request, $response);
  }
}

?>
