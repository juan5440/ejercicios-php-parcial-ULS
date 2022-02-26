<!DOCTYPE html>
<html lang="ES">
<head>
<meta charset="utf-8">
	<title>ejercisio4</title>
</head>
<body>
<header>aumento de invercion</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>cantidad a invertir <input type="float" name="valor1" id="valor1">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$aumento=$valor1*0.02
$mes=$aumento*30
echo 'aumento capital durante un mes es',$mes;
echo 'el valor invertido fue',$valor1;
?>
</body>
</html>