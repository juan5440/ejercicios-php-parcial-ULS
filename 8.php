<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 8</title>
	</head>
	<body>
		<legend>Ejercicio 8</legend>
		<p align="justify">
			8. Calcular e imprimir el costo de producción de un artículo, teniendo como datos la descripción y el número de unidades producidas. El costo se calcula multiplicando el número de unidades producidas por un factor de costo de materiales de 3.5 y sumándole al producto un costo fijo de $10700
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="nombre">Describa que articulo se a producido </label><br>
			<input type="text" id="nom" name="nom" required><br>
			<label for="dinero">Cuantos articulos fueron producidos</label><br>
			<input type="double" id="cant" name="cant"><br><br>

			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$nombre = $_POST['nom'];
	     		$cant  = $_POST['cant'];
	     		/**/
	     		$cal = ($cant*3.5)+10700;
	     		/**/
	     		echo "<br>Nombre del articulo: ".$nombre;
	     		echo "<br> El costo  de producción de ".$cant." ".$nombre." es = $ ".number_format($cal);
	     	}
   		?>
		</form>
	</body>
</html>