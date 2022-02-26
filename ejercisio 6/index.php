<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>ejercisio6</title>
</head>
<body>
<header>pomediode de notas</header>
<section>
	<form action="" method="post" name="Formulario" >
	<br>Calificacion de examen <input type="float" name="valor1" id="valor1">
	<br>Calificasion de tareas <input type="float" name="valor2" id="valor2">
	<br>Nombre de materia <input type="float" name="valor3" id="valor3">
	<br><br/>
	<br><br/>
	<br>Calificacion de examen <input type="float" name="valor4" id="valor4">
	<br>Calificacion de tarea1 <input type="float" name="tarea1" id="tarea1">
	<br>Calificacion de tarea2 <input type="float" name="tarea2" id="tarea2">
	<br>Calificacion de proyecto <input type="float" name="valor6" id="valor6">
	<br>Nombre de materia <input type="float" name="valor7" id="valor7">
	<br><br/>
	<br><br/>
	<br>calificacion de examen1 <input type="float" name="examen1" id="examen1">
	<br>calificacion de examen2 <input type="float" name="examen2" id="examen2">
	<br>calificacion de tarea4 <input type="float" name="tarea4" id="tarea4">
	<br>calificacion de tarea5 <input type="float" name="tarea5" id="tarea5">
	<br>calificacion de tarea6 <input type="float" name="tarea6" id="tarea6">
	<br>calificacion de proyecto <input type="float" name="valor8" id="valor8">
	<br>nombre de materia <input type="float" name="nombre" id="nombre">
	<br><input type="submit" value="Enviar">
	</form>
</section>
<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$valor3=$_POST['valor3'];
$calificasion1=$valor1*0.50;
$calificasion2=$valor2*0.50;
$total1=$calificasion1+$calificasion2;

$valor1=$_POST['valor4'];
$tarea1=$_POST['tarea1'];
$tarea2=$_POST['tarea2'];
$valor3=$_POST['valor7'];
$tarea3=$tarea1+$tarea2/2;
$calificasion3=$valor4*0.30;
$calificasion4=$tarea3*0.40;
$calificasion5=$valor6*0.30;
$total2=$calificasion3+$calificasion14+$calificasion5;

$examen1=$_POST['examen1'];
$examen2=$_POST['examen2'];
$tarea4=$_POST['tarea4'];
$tarea5=$_POST['tarea5'];
$tarea6=$_POST['tarea6'];
$valor8=$_POST['valor8'];
$nombre=$_POST['nombre'];
$examen3=$examen1+$examen2/2;
$tarea9=$tarea4+$tarea5+$tarea6/3;
$total3=$examen3*0.40;
$total4=$tarea9*0.30;
$total5=$valor8*0.30;
$total6=$total3+$total4+$total5;

echo 'nombre de materia es',$valor3;
echo 'promedio total de la materia',$total1;
echo 'monbrer de materia es',$valor7;
echo 'promedio total',$total2;
echo 'nombre de materia es',$nombre;
echo 'promedio total',$total6;


?>
</body>
</html>