<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>ejercicio </title>
</head>
<body>
<header>pago neto</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>ingrese sueldo base <input type="float" name="valor1" id="valor1">
	<br>nombre de trabajador <input type="float" name="valor2" id="valor2">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];

$comision=$valor1*0.10;

$sueldo=$valor1+$comision;

echo 'su nombre es :',$valor2;
echo 'su sueldo bace es :',$valor1;
echo 'su sueldo con comicion es:',$sueldo;
?>

</body>
</html>