<?php

    require_once "conexion.php";

    class ModeloBlog{
        //metodo para mostrar la tabla blog
        static public function mdlMostrarBlog($tabla){
            //se hace la conexion a la base de datos
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            //se ejecuta la consulta
            $stmt -> execute();
            //se retorna la consulta
            return $stmt -> fetch();
            //se cierra la conexion
            

            $stmt = null;
        }

    }


?>