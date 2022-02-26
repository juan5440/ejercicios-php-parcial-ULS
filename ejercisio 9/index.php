<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>ejercisio 9</title>
</head>
<body>
<header>distacia a belosidad de la luz</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>Tienpo recorrido en segundos <input type="float" name="valor1" id="valor1">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];

$distancia=$segundos*3000,000
echo 'Distancia recorida en kilometros es :',$distancia;
?>
</body>
</html>