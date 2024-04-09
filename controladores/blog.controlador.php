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

}


?>