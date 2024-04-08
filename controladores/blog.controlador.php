<?php

class controladorBlog{
    //metodo para mostrar la tabla bog
    static public function ctrMostrarBlog(){
        //nombre de la tabla con la que vamos a trabajar
        $tabla = "blog";
        //se manda a llamar el modelo de la tabla blog
        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);
        //se retorna la respuesta
        return $respuesta;

    }

}


?>