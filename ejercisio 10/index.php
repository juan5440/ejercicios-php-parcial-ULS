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
	<br>catidad de dinero total <input type="float" name="valor1" id="valor1">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=0.30*$valor1;
$valor3=0.40*$valor1;
$valor4=0.30*$valor1;
$total=$valor2+$valor3+$valor4
echo 'cantidad para pediatria es',$valor2;
echo 'cantidad para oncologia',$valor3;
echo 'cantidad para traumologia',$valor4;
echo 'cantidad total es',$total;

?>

</body>
</html>