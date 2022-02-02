<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-danger">
  		<div class="hero-body">
    		<p class="title">
			Práctica 01 de programación
    		</p>
  		</div>
	</section>


    <Section class="section is-medium columns">

<div class="column"></div>



<section class="section"> <!-- Script de PHP para leer el archivo notas.txt -->
		<p class="subtitle"></p>
		<div>

			<!-- Script de PHP para crear el archivo notas.txt -->
			<?php
				$crearArchivo = fopen("notas3.txt", "a+");
				fwrite($crearArchivo, "<br><br>Esta es la primera línea de mi archivo de texto");
				
				fclose($crearArchivo);
			?>

			<?php
				$lecturaArchivo = fopen("notas3.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);
			?>
		</div>
	</section>





<div class="column is-two-fifths">
  

    <?php

      $titulo = $_POST['titulo'];
      $descripcion = $_POST['descripcion'];
      
      

      $libros = fopen("libros.txt", "a+");
	fwrite($crearArchivo, $titulo);
    fwrite($crearArchivo, $descripcion);
	$fclose($libros);
      
  ?>



</div>

<div class="column"></div>

</section>


    
</body>
</html>