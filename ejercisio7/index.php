<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>ejercisio 7</title>
</head>
<header>porcentaje de H y M</header>
<body>
<section>
	<form action="" method="post" name="Formulario" >
	<br>Numero de hombres <input type="float" name="valor1" id="valor1">
	<br>Numero de mujeres <input type="float" name="valor2" id="valor2">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$alumnos=$valor1+$valor2
$porhobres=$valor1*100/$alumnos;
$pormujeres=$valor2*100/$alumnos;
echo 'porcentaje de honpmbres es:',$porhobres;
echo 'porcentaje de mujeres es:',$pormujeres;
?>
</body>
</html>