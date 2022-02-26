<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 3</title>
	</head>
	<body>
		<legend>Ejercicio 3</legend>
		<p align="justify">
			3. Calcular el sueldo de un trabajador a quien se le realizan los siguientes descuentos: Renta = 10%, AFP = 5%, FSV = 8%; al final deberá imprimir el nombre del trabajador, su dirección, teléfono, salario neto y total de descuentos.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="nombre">Ingrese su nombre: </label><br>
			<input type="text" id="nom" name="nom"><br>
			<label for="nombre">Ingrese su dirección: </label><br>
			<input type="text" id="dir" name="dir"><br>
			<label for="nombre">Ingrese su telefono: </label><br>
			<input type="text" id="tel" name="tel"><br>
			<label for="sue" >Sueldo: $ </label><br>
			<input type="double" id="sueldo" name="sueldo"><br><br>
			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$nombre = $_POST['nom'];
				$dirección = $_POST['dir'];
				$telefono= $_POST['tel'];
				$sueldo = $_POST['sueldo'];
				$renta=$sueldo*0.10;
				$AFP=$sueldo*0.05;
				$FSV=$sueldo*0.08;
				$descuentos=$renta+$AFP+$FSV;
				$nuevo_sueldo=$sueldo-$descuentos;
				/* */
				echo "<br>Nombre: ".$nombre;
				echo "<br>Total de descuentos: $".$descuentos;
				echo "<br>Nuevo sueldo: $". $nuevo_sueldo;
			}
   		?>
		</form>
	</body>
</html>	