<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 4</title>
	</head>
	<body>
		<legend>Ejercicio 4</legend>
		<p align="justify">
			4. Se desea saber la media aritmética de los 5 mejores estudiantes de Informática e imprimir el resultado.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="Nota_1">Ingrese la nota 1</label><br>
			<input type="double" id="n1" name="n1" required><br>
			<label for="Nota_2">Ingrese la nota 2</label><br>
			<input type="double" id="n2" name="n2" required><br>
			<label for="Nota_3">Ingrese la nota 3</label><br>
			<input type="double" id="n3" name="n3" required><br>
			<label for="Nota_4">Ingrese la nota 4</label><br>
			<input type="double" id="n4" name="n4" required><br>
			<label for="Nota_5">Ingrese la nota 5</label><br>
			<input type="double" id="n5" name="n5" required><br><br>
			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$nota_1 = $_POST['n1'];
	     		$nota_2 = $_POST['n2'];
	     		$nota_3 = $_POST['n3'];
	     		$nota_4 = $_POST['n4'];
	     		$nota_5 = $_POST['n5'];
	     		/**/
	     		$media=($nota_1+$nota_2+$nota_3+$nota_4+$nota_5)/5;
	     		/**/
	     		echo "<br>Resultado";
	     		echo "<br> La media de las 5 notas es: ".$media;
	     	}
   		?>
		</form>
	</body>
</html>