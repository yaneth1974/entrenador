<?php
class pregunta{
    private $con;

    public function __construct(){
        $this->con = new PDO("mysql:host=localhost;dbname=cmsimple", "root");
        $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getTemas(){
        $sql = "select * from temas;";
        $res = $this->con->query($sql);
        return $res->fetchAll();
    }

    public function getPreguntas(){
        $sql = "select * from Preguntas;";
        $res = $this->con->query($sql);
        return $res->fetchAll();
    }

    public function getRespuestas($preguntaid){
        $sql = <<<sql
        select from where
sql;
        $res = $this->con->query($sql);
        return $res->fetchAll();
    }

}
?>
