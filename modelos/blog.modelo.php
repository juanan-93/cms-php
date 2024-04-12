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

        //metodo para mostrar articulos y categorias con inner join
        static public function mdlMostrarConInnerJoin($tabla1, $tabla2, $cantidad, $desde){
            //se hace la conexion a la base de datos
            $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.*, DATE_FORMAT($tabla2.fecha_articulo, '%d.%m.%Y') AS fecha_articulo FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id_cat ORDER BY $tabla2.id_articulo DESC LIMIT $desde, $cantidad");
            //se ejecuta la consulta
            $stmt -> execute();
            //Se usa fetchAll para mostrar todas las filas si solo fuera una fila se usaria fetch
            return $stmt -> fetchAll();
            //se cierra la conexion
            $stmt = null;
        }

        //metodo para mostrar el total de articulos
        static public function mdlMostrarTotalArticulos($tabla){
            //se hace la conexion a la base de datos
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            //se ejecuta la consulta
            $stmt -> execute();
            //Se usa fetchAll para mostrar todas las filas si solo fuera una fila se usaria fetch
            return $stmt -> fetchAll();
            //se cierra la conexion
            $stmt = null;
        }

    }


?>