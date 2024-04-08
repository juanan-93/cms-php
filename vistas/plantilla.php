<?php

    $blog = ControladorBlog::ctrMostrarBlog();
   

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> <?php echo $blog["titulo"] ?> </title>

        <meta name="title" content="<?php echo $blog["titulo"] ?>">

        <meta name="description" content="<?php echo $blog["descripcion"] ?>">

        <?php 
            // convertir el string en un array de verdad
            $palabras_claves = json_decode($blog["palabras_claves"], true);

            //UNA VARIABLE VACIA DONDE METER LAS PALABRAS CLAVES
            $p_claves = "";

            //recorremos un array 
            foreach ($palabras_claves as $key => $value){
                //PARA AGEGRA CADENAS DE STRING A UNA VARIABLE VACIA USAMOS EL .=  Y CON EL PUNTO CONCATENAMOS 
                $p_claves .= $value.", ";
            }

            //QUITAMOS EL ULTIMO ESPACIO Y LA ULTIMA COMA con la funcion substr
            $p_claves = substr($p_claves, 0, -2);

        ?>

        <meta name="keywords" content="<?php echo $p_claves ?>">

        

        

        <link rel="icon" href="vistas/img/icono.jpg">

        <!--=====================================
        PLUGINS DE CSS
        ======================================-->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

        <!-- JdSlider -->
        <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
        <link rel="stylesheet" href="vistas/css/plugins/jquery.jdSlider.css">

        <link rel="stylesheet" href="vistas/css/style.css">

        <!--=====================================
        PLUGINS DE JS
        ======================================-->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- JdSlider -->
        <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
        <script src="vistas/js/plugins/jquery.jdSlider-latest.js"></script>
        
        <!-- pagination -->
        <!-- http://josecebe.github.io/twbs-pagination/ -->
        <script src="vistas/js/plugins/pagination.min.js"></script>

        <!-- scrollup -->
        <!-- https://markgoodyear.com/labs/scrollup/ -->
        <!-- https://easings.net/es# -->
        <script src="vistas/js/plugins/scrollUP.js"></script>
        <script src="vistas/js/plugins/jquery.easing.js"></script>

    </head>

    <body>
        
        <?php
        //=============modulos fijos superiores ==================
        include "paginas/modulos/cabecera.php";
        include "paginas/modulos/redes-sociales-movil.php";
        include "paginas/modulos/buscador-movil.php";
        include "paginas/modulos/menu.php";

        //=============Navegacion entre paginas==================
        include "paginas/inicio.php";

        //=============modulos fijos inferiores==================
        include "paginas/modulos/footer.php";
        
        ?>

     <script src="vistas/js/script.js"></script>

    </body>
</html>