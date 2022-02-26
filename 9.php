<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 9</title>
	</head>
	<body>
		<legend>Ejercicio 59</legend>
		<p align="justify">
			9. La velocidad de la luz es 300000 Km. por segundo. Leer un tiempo en segundos e imprimir la distancia que recorre en dicho tiempo.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="nombre">Ingrese el tiempo a calcular en segundos </label><br>
			<input type="text" id="segundos" name="segundos" required><br><br>

			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$segundos= $_POST['segundos'];
	     		$vluz  = 300000;
	     		/**/
	     		$distancia = $segundos*$vluz;
	     		/**/
	     		echo "<br> La distancia recorrida en ". $segundos. " segundos es = ". number_format($distancia)." KM ";
	     	}
   		?>
		</form>
	</body>
</html>