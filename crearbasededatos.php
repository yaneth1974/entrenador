<?php
/* Nos conectamos al SGBD */
        try{
            $conexion = new PDO("mysql:host=localhost", "root");
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
            die();
        }
        /* borrar base de datos */
                $sql = "drop database if exists Temas;";
                $res = $conexion->exec($sql);

                /* Crear la BD */
                $sql = "create database Temas;";
                $res = $conexion->exec($sql);
                if($res===FALSE){
                    echo "<p>No se ha podido crear la base de datos.</p>";
                    echo "<p>".$conexion->errorInfo()[2]."</p>";
                }else{
                    echo "<p>base de datos creada.</p>";
                }

                /* Conectar a la base de datos */
                $sql = "use temas;";
                $res = $conexion->exec($sql);
                if($res===FALSE){
                    echo "<p>No se ha podido conectar a la base de datos.</p>";
                    echo "<p>".$conexion->errorInfo()[2]."</p>";
                }else{
                    echo "<p>Conectados!!!!</p>";
                }

/* Crear tabla Temas */
        $sql = <<<sql
create table temas(
    id int primary key auto_increment,
    titulo varchar(70) not null,
    titulo_url varchar(70) not null
);
sql;
        $res = $conexion->exec($sql);
        if($res===FALSE){
            echo "<p>No se ha podido crear la tabla Temas</p>";
            echo "<p>".$conexion->errorInfo()[2]."</p>";
        }else{
            echo "<p>Tabla Temas creada!!!</p>";
        }
        /* Crear tabla Preguntas */
        $sql = <<<sql
create table preguntas(
    id int primary key auto_increment,
    pregunta varchar(70) not null,
    tema varchar(70) not null
    );
sql;
        $res = $conexion->exec($sql);
        if($res===FALSE){
            echo "<p>No se ha podido crear la tabla preguntas.</p>";
            echo "<p>".$conexion->errorInfo()[2]."</p>";
        }else{
            echo "<p>Tabla Preguntas creada!!!</p>";
        }

        /* Crear tabla Respuestas */
        $sql = <<<sql
create table respuestas(
    id int primary key auto_increment,
    respuesta varchar(70) not null,
    verdadera varchar(70) not null,
    pregunta varchar(70) not null
    );
sql;
        $res = $conexion->exec($sql);
        if($res===FALSE){
            echo "<p>No se ha podido crear la tabla preguntas.</p>";
            echo "<p>".$conexion->errorInfo()[2]."</p>";
        }else{
            echo "<p>Tabla Respuestas creada!!!</p>";
        }
?>
