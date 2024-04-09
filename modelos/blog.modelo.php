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

        //metodo para mostrar la tabla categorias
        static public function mdlMostrarCategorias($tablaCategorias){
            //se hace la conexion a la base de datos
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaCategorias");
            //se ejecuta la consulta
            $stmt -> execute();
            //Se usa fetchAll para mostrar todas las filas si solo fuera una fila se usaria fetch
            return $stmt -> fetchAll();
            //se cierra la conexion
            $stmt = null;
        }

    }


?>