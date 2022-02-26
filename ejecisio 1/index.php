<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>ejercicio 1</title>
</head>
<body>
<header>promedio</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>Ingrese su primer nota <input type="float" name="valor1" id="valor1">
	<br>Ingrese su segunda nota <input type="float" name="valor2" id="valor2">
	<br>Ingrese su tercera nota <input type="float" name="valor3" id="valor3">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$valor3=$_POST['valor3'];
$nota1=$valor1*0.30;
$nota2=$valor2*0.30;
$nota2=$valor3*0.40;
$resultado=$nota1+$nota2+$nota3;
$resultado=$total1;
echo 'Supromedio de materia de programacion es',$resultado;

?>

</body>
</html>