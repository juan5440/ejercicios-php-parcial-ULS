<!DOCTYPE html>
<html lang="ES">
<head>
<meta charset="utf-8">
	<title>ejuercicio5</title>
</head>
<body>
<header>PROMEDIO DE ESTUDIANTES</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>estudiante1 <input type="float" name="estu1" id="estu1">
	<br>estudiante2 <input type="float" name="estu2" id="estu2">
	<br>estudiante3 <input type="float" name="estu3" id="estu3">
	<br>estudiante4 <input type="float" name="estu4" id="estu4">
	<br>estudiante5 <input type="float" name="estu5" id="estu5">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php

$estu1=$_POST['estu1'];
$estu2=$_POST['estu2'];
$estu3=$_POST['estu3'];
$estu4=$_POST['estu4'];
$estu5=$_POST['estu5'];
$resultado=$estu1+$estu2+$estu3+$estu4+$estu5;
$total=$resultado/5
echo 'la media aritmetica de estudiantes es',$total;
?>
</body>
</html>

