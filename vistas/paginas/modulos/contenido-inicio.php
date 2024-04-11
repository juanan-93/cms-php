


<!--=====================================
CONTENIDO INICIO
======================================-->

<div class="container-fluid bg-white contenidoInicio pb-4">
	
	<div class="container">
		
		<div class="row">
			
			<!-- COLUMNA IZQUIERDA -->
			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

					<!-- articulos dinamicos -->
				<?php foreach ($articulos as $key => $value) :?>

					<div class="row">
						
						<div class="col-12 col-lg-5">

							<a href="<?php echo $value["ruta_articulo"] ?>"><h5 class="d-block d-lg-none py-3"> <?php echo $value["titulo_articulo"] ?> </h5></a>
				
							<a href="<?php echo	$value["ruta_articulo"] ?>"><img src="<?php echo $value["portada_articulo"] ?>" alt="<?php echo $value["titulo_articulo"] ?>" class="img-fluid" width="100%"></a>

						</div>

						<div class="col-12 col-lg-7 introArticulo">
							
							<a href="<?php echo $value["ruta_articulo"] ?>" <?php echo $value["titulo_articulo"] ?> ><h4 class="d-none d-lg-block">Type something here</h4></a>
							
							<p class="my-2 my-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, minus magni ipsam nisi accusantium ipsa! Incidunt neque ad, iure omnis saepe est.</p>

							<a href="articulos.html" class="float-right">Leer Más</a>

							<div class="fecha"><?php echo $value["fecha_articulo"] ?></div>

						</div>

					</div>
					<hr class="mb-4 mb-lg-5" style=" border:1px solid #79ff39">
				<?php endforeach; ?>
				
				<!-- PAGINACIÓN DE LOS ARTICULOS -->

				<div class="container d-none d-md-block">
					<!-- creamos un nuevo atributo para meter  -->
					<ul class="pagination justify-content-center" totalPaginas= "<?php echo $totalPaginas;?>"></ul>

				</div>

			</div>

			<!-- COLUMNA DERECHA -->

			<div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

				<!-- SOBRE MI -->
				<?php

					echo $blog["sobre_mi"]

				?>

				<!-- Artículos destacados -->

				<div class="my-4">
					
					<h4>Artículos Destacados</h4>

					<div class="d-flex my-3">
						
						<div class="w-100 w-xl-50 pr-3 pt-2">
							
							<a href="articulos.html">

								<img src="vistas/img/articulo10.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>

					<div class="d-flex my-3">
						
						<div class="w-100 w-xl-50 pr-3 pt-2">
							
							<a href="articulos.html">

								<img src="vistas/img/articulo09.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>

					<div class="d-flex my-3">
						
						<div class="w-100 w-xl-50 pr-3 pt-2">
							
							<a href="articulos.html">

								<img src="vistas/img/articulo08.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>


				</div>

				<!-- PUBLICIDAD -->

				<div class="my-4">
					
					<img src="vistas/img/ad01.jpg" class="img-fluid">

				</div>

				<div class="my-4">
					
					<img src="vistas/img/ad02.jpg" class="img-fluid">

				</div>	

				<div class="my-4">
					
					<img src="vistas/img/ad05.png" class="img-fluid">

				</div>	
				
			</div>

		</div>

	</div>

</div>