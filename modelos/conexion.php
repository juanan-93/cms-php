<?php
    class conexion{
        //metodo para conectar a la base de datos
        static public function conectar(){
            //se crea una variable con la conexion a la base de datos
            $link = new PDO("mysql:host=localhost;dbname=blog-php",
            "root",
            "");
            //se retorna la conexion

            $link->exec("set names utf8");

            return $link;
        }
    }


?>