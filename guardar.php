<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-danger">
  		<div class="hero-body">
    		<p class="title">
			Práctica 02 de programación

			<h1> Ingrese los siguientes datos</h1>
    		</p>
  		</div>
	</section>

<section>
    
<?php

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];


	$libros = fopen("libros.txt", "a+");
	fwrite($libros, "<br>Titulo: " . $titulo);
    fwrite($libros, "<br>Descripcion: " . $descripcion );
	fclose($libros);

?>

<?php 

         $lecturaArchivo = fopen("libros.txt", "r");
        while (!feof($lecturaArchivo)){
        $linea = fgets ($lecturaArchivo);
        echo nl2br($linea);
        }

         fclose($lecturaArchivo);

         ?>
         </section>    



    
</body>
</html>