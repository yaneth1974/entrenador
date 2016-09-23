<?php
class Estadistica{
  public function __invoke($request, $response, $next){

    /* Establecer la conexión con el SGBD */
    $conexion = new PDO("mysql:host=localhost;dbname=entrenador", "root");
    $sql = "insert into estadistica(contador) values(10);";

    $conexion->exec($sql);

    return $next($request, $response);
  }
}

?>
