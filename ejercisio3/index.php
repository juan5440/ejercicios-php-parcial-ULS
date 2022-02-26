<!DOCTYPE html>
<html lang="ES">
<head>
<meta charset="utf-8">
	<title>ejercisio 3</title>
</head>
<header> descuento de renta</header>	
<body>
<section>
	<form action="" method="post" name="Formulario" >
	<br>salario del trabajador <input type="float" name="valor1" id="valor1">
	<br>nombre del trabajador <input type="float" name="valor2" id="valor2">
	<br>direccion del trabajador <input type="float" name="valor3" id="valor3">
	<br>telefono del detrabajador <input type="float" name="valor4" id="valor4">
	<br>descuento total <input type="float" name="valor5" id="valor5">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$valor3=$_POST['valor3'];
$valor4=$_POST['valor4'];
$valor5=$_POST['valor5'];

$renta=$valor1*0.10;
$AFP=$valor1*0.05;
$FSV=$valor1*0.08

$totaldes=$renta+$AFP+$FSV;
$descuentoapli=$valor1-$totaldes;

echo 'el nombre del trabajador es',$valor2;
echo 'direccion de trabajador',$valor3;
echo 'telefono del trabajador',$valor4;
echo 'total adescontar es :',$totaldes;
echo 'descuento aplicado suldo real es:',$descuentoapli;
?>
</body>
</html>