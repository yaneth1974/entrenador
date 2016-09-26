<?php
class PrivateControler {
    private $c;
    
    public function __construct(Interop\Container\ContainerInterface $ci){
        $this->c = $ci;
    }
    
    public function cargarHome($request, $response, $args){
    }
}
?>