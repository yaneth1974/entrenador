<?php
class Estadistica{
  public function __invoke($request, $response, $next){
    echo"hola"

    return $next($request, $response);
  }
}

?>
