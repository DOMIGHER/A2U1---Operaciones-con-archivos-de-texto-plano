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
    <section class="section is-medium columns">

  		<div class="column">
              <section class="section">
		
		<form action="guardar.php" method="post">
			<div>
				<label>Título:</label>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título">
			</div>

			<div>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section></div>


       
	</section>


	
</body>
</html>