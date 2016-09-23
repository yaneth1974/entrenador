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
      /*introducir preguntas de prueba*/
      $sql = "insert into preguntas(pregunta, tema) values
          ('5+5?', 1);";
      $res = $conexion->exec($sql);
      $err=$conexion->errorInfo()[2];
      if($res===FALSE) echo "<li>Introducción de preguntas de prueba: <span class='err' title=\"$err\">ERROR</span></li>";
      else echo "<li>Introducción de artículo de preguntas: <span class='ok'>OK</span></li>";
      $pregunta = $params['pregunta'];

      /* Introducir respuestas de prueba */
      $sql = "insert into respuestas(respuesta, verdadera, pregunta) values
          ('10', 1, 1),('55', 0, 1),('25',0,1),('15',0,1);";
      $res = $conexion->exec($sql);
      $err=$conexion->errorInfo()[2];
      if($res===FALSE) echo "<li>Introducción de respuestas de prueba: <span class='err' title=\"$err\">ERROR</span></li>";
      else echo "<li>Introducción de artículo de respuestas: <span class='ok'>OK</span></li>";
      $respuesta = $params['respuesta1'];
      $respuesta = $params['respuesta2'];
      $respuesta = $params['respuesta3'];

    }
    ?>
    >?php
    if($res!==FALSE){
    ?>
      <p>Instalación finalizada!!</p>
      <a heref='index.php'>Iniciar el programa</a>
      <?php }
      ?>
    }
}
?>
