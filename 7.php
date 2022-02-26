<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 7</title>
	</head>
	<body>
		<legend>Ejercicio 7</legend>
		<p align="justify">
			7. Un maestro desea saber qué porcentaje de hombres y qué porcentaje de mujeres hay en un grupo de estudiantes.
		</p>
		<form action="" method="POST" name="Formulario">
			<label for="T_alumno">Ingrese ek total de estudiantes </label><br>
			<input type="int" id="ta" name="ta" required><br>
			<label for="T_hombres">Ingrese el total de hombres</label><br>
			<input type="int" id="th" name="th" required><br>
			<label for="T_mujeres">Ingrese el total de mujeres</label><br>
			<input type="int" id="tm" name="tm" required><br><br>
			<input type="submit" id="enviar" name="enviar"><br>
			<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$t_alumnos=$_POST['ta'];
	     		$t_hombres=$_POST['th'];
	     		$t_mujeres=$_POST['tm'];
	     		/*proceso*/
	     		$p_h=($t_hombres*100)/$t_alumnos;
	     		$p_m=($t_mujeres*100)/$t_alumnos;
	     		/* */
	     		echo "<br>El porcentaje de Hombres es: ".$p_h."%";
	     		echo "<br>El porcentaje de Mujeres es: ".$p_m."%";
	     	}
   		?>
		</form>
	</body>
</html>