<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 5</title>
	</head>
	<body>
		<legend>Ejercicio 5</legend>
		<p align="justify">
			5. Suponga que un individuo decide invertir su capital en un banco y desea saber cuánto dinero ganará después de un mes si el banco le paga a razón de 2% mensual.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="nombre">Ingres el nombre del cliente </label><br>
			<input type="text" id="nom" name="nom" required><br>
			<label for="dinero">Ingrese el monto de dinero a invertir</label><br>
			<input type="double" id="monto" name="monto"><br><br>

			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$nombre = $_POST['nom'];
	     		$monto  = $_POST['monto'];
	     		/**/
	     		$ganacia_por_mes = $monto*0.02;
	     		/**/
	     		echo "<br>Nombre: ".$nombre;
	     		echo "<br> Cantida de dinero a ganar por cada mes: $".$ganacia_por_mes;
	     	}
   		?>
		</form>
	</body>
</html>