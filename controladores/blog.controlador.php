<?php

class ControladorBlog{


    //metodo para mostrar la tabla bog
    static public function ctrMostrarBlog(){
        //nombre de la tabla con la que vamos a trabajar
        $tabla = "blog";
        //se manda a llamar el modelo de la tabla blog
        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);
        //se retorna la respuesta
        return $respuesta;
    }

    //metodo para mostrar la tabla categorias
    static public function ctrMostrarCategorias(){
        //nombre de la tabla con la que vamos a trabajar
        $tablaCategorias = "categorias";
        //se manda a llamar el modelo de la tabla categorias
        $respuesta = ModeloBlog::mdlMostrarCategorias($tablaCategorias);
        //se retorna la respuesta
        return $respuesta;
    }

    //metodo para mostrar articulos y categorias con inner join
    static public function ctrMostrarConInnerJoin($desde, $cantidad){
        //creamos una variable para la cantidad de articulos que queremos mostrar y le pasamos el valor desde la vista que es 5
        //nombre de la tabla con la que vamos a trabajar
        $tabla1 = "categorias";
        $tabla2 = "articulos";
        //se manda a llamar el modelo de la tabla categorias
        $respuestas = ModeloBlog::mdlMostrarConInnerJoin( $tabla1, $tabla2, $cantidad, $desde);
        //se retorna la respuesta
        return $respuestas;
        
    }

    //metodo para mostrar el total de articulos
    static public function ctrMostrarTotalArticulos(){
        //nombre de la tabla con la que vamos a trabajar
        $tabla = "articulos";
        //se manda a llamar el modelo de la tabla articulos
        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla);
        //se retorna la respuesta
        return $respuesta;
    }

}


?>