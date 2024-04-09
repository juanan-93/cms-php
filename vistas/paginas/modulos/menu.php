<!--=====================================
MENU
======================================-->

<div class="container-fluid menu">

	<a href="#" class="btnClose">X</a>

	<ul class="nav flex-column text-center">

		<?php
		
			foreach($categorias as $key => $value){

				echo '<li class="nav-item">
						<a class="nav-link text-white" href="'. $value["ruta_categoria"].'">'.$value["titulo_categoria"].'</a>
					</li>';
			}
		?>


	</ul>

</div>