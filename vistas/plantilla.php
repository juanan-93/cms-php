<?php

    $blog = ControladorBlog::ctrMostrarBlog();
    $categorias = ControladorBlog::ctrMostrarCategorias();
    $articulos = ControladorBlog::ctrMostrarConInnerJoin(5);
    //paginacion 
    $totalArticulos = ControladorBlog::ctrMostrarTotalArticulos();
    //dividimos el total de articulos entre 5 para saber cuantas paginas vamos a tener y con la funcion ceil redondeamos hacia arriba
    $totalPaginas = ceil(count($totalArticulos)/5);
   

  
    

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

        //condicional para definir los metas de las categorias

        if (isset($_GET["pagina"])) {
            foreach ($categorias as $key => $value) {

                if ($_GET["pagina"] == $value["ruta_categoria"]) {

                    echo' 
                        <title>'.$blog["titulo"].'|'.$value["descripcion_categoria"].'</title>
                
                        <meta name="title" content="'.$value["titulo_categoria"].'>">
                
                        <meta name="description" content="'.$value["descripcion_categoria"].'">';

                   
                        $palabras_claves = json_decode($value["p_claves_categoria"], true);

                        
                        $p_claves = "";
            
                        //recorremos un array 
                        foreach ($palabras_claves as $key => $value){
                            
                            $p_claves .= $value.", ";
                        }
            
                  
                        $p_claves = substr($p_claves, 0, -2);

                            echo '<meta name="keywords" content="'.$p_claves.'">';
                                
                } else {
                    echo' 
                        <title>'.$blog["titulo"].'</title>
                
                        <meta name="title" content=" '.$blog["titulo"].'">
                
                        <meta name="description" content="'.$blog["descripcion"].'">';

         
                        $palabras_claves = json_decode($blog["palabras_claves"], true);

                        //UNA VARIABLE VACIA DONDE METER LAS PALABRAS CLAVES
                        $p_claves = "";
 
       
                    foreach ($palabras_claves as $key => $value){
                        //PARA AGEGRA CADENAS DE STRING A UNA VARIABLE VACIA USAMOS EL .=  Y CON EL PUNTO CONCATENAMOS 
                        $p_claves .= $value.", ";
                }
    
         
                    $p_claves = substr($p_claves, 0, -2);

                        echo '<meta name="keywords" content="'.$p_claves.'">';


                    break;
                }
            }
        } else {
            echo' 
            <title>'.$blog["titulo"].'</title>
    
            <meta name="title" content=" '.$blog["titulo"].'">
    
            <meta name="description" content="'.$blog["descripcion"].'">';

          
             $palabras_claves = json_decode($blog["palabras_claves"], true);

          
             $p_claves = "";
 
             
             foreach ($palabras_claves as $key => $value){
                 //PARA AGEGRA CADENAS DE STRING A UNA VARIABLE VACIA USAMOS EL .=  Y CON EL PUNTO CONCATENAMOS 
                 $p_claves .= $value.", ";
             }
 
      
             $p_claves = substr($p_claves, 0, -2);

                echo '<meta name="keywords" content="'.$p_claves.'">';
        }


    ?>


        

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

            //condicional para navegar entre lasa paginas con las rutas de las categorias
            //se define la variable get en el archivo .htaccess
            if(isset($_GET["pagina"])) {
                $pageFound = false;
                foreach($categorias as $key=>$element) {
                       if($_GET["pagina"] == $element["ruta_categoria"]){
                            $pageFound = true;
                            include "paginas/categoria.php";
                       }
                }
          
                if(!$pageFound){
                    include "paginas/404.php";
                }

            }else {
                include "paginas/inicio.php";
            }

            

       

        //=============modulos fijos inferiores==================
        include "paginas/modulos/footer.php";
        
        ?>
        <input type="hidden" id="rutaActual" value="<?php echo $blog["dominio"]; ?>">
     <script src="vistas/js/script.js"></script>

    </body>
</html>