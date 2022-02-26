<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 2</title>
	</head>
	<body>
		<legend>Ejercicio 2</legend>
		<p align="justify">
			2. Determinar el sueldo de un vendedor, el cual depende de su sueldo base más el 10% de su comisión sobre las ventas. Imprimir el nombre del vendedor, sueldo y comisión.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="nombre">Ingrese su nombre: </label><br>
			<input type="text" id="nom" name="nom"><br>
			<label for="sue" >Sueldo: $ </label><br>
			<input type="float" id="sueldo" name="sueldo"><br>
			<label for="vent" >Monto de venta: $</label><br>
			<input type="float" id="venta" name="venta"><br><br>

			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$nombre = $_POST['nom'];
				$sueldo = $_POST['sueldo'];
				$venta = $_POST['venta'];
				$comisión = $venta * 0.10;
				$nuevo_sueldo=$sueldo+$comisión;
				/* */
				echo "<br>Nombre: ".$nombre;
				echo "<br>Sueldo sin comisión: $".$sueldo;
				echo "<br>Monto de venta: $".$venta.", % de comision 10%";
				echo "<br>Nuevo sueldo: $". $nuevo_sueldo;
			}
   		?>
		</form>
	</body>
</html>	