<?php
class Controler{
    private $c;

    public function __construct(Interop\Container\ContainerInterface $ci){
        $this->c = $ci;
    }

    public function cargarFormularioPreguntaNueva($request, $response, $args){
      $datos = [];
      $response = $this->c->view->render($response, "formulario.php", $datos);
      return $response;
    }
    public function crearPreguntaNueva($request, $response, $args){
      $params = $request->getParsedBody();
      $params =$id;
    }



}
?>
