<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1</title>
	</head>
	<body>
		<legend>Ejercicio 1</legend>
		<p align="justify">
			1. Un alumno ha realizado tres evaluaciones parciales. El desea saber cuál es su promedio final del módulo Desarrollo de Lógica de Programación, si se sabe que las dos primeras evaluaciones valen 30% y la tercera 40%.
		<form action="" method="POST" name="Formulario">
		     <label for="">Ingrese la nota 1</label>
		     <input type="float" name="valor1" id="valor1" required /><br/>
		     <label for="">Ingrese la nota 2</label>
		     <input type="float" name="valor2" id="valor2" required /><br/>
		     <label for="">Ingrese la nota 3</label>
		     <input type="float" name="valor3" id="valor3" required /><br/>
		<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$valor1 = $_POST['valor1'];
				$valor2 = $_POST['valor2'];
				$valor3 = $_POST['valor3'];
				$nota1 = $valor1 * 0.30;
				$nota2 = $valor2 * 0.30;
				$nota3 = $valor3 * 0.40;
				$total = $nota1 + $nota2 + $nota3;
				$resultado = $total;
	     		if ($resultado >= 8 and $resultado <= 10) 
		     	{
		     		echo "Su promedio de la materia de logica es ". $resultado."<br/>";
					echo "Aprobado"."<br/>";
					echo "Excelente"."<br/>";
		     	}elseif($resultado >= 5 and $resultado <7)
		     	{
		     		echo "Su promedio de la materia de logica es ". $resultado."<br/>";
					echo "Aprobado"."<br/>";
					echo "Bueno, necesita, mejorar"."<br/>";
			   	}else
			    {
		     		echo "Su promedio de la materia de logica es ". $resultado."<br/>";
					echo "Reprobado"."<br/>";
					echo "Malo"."<br/>";
		     	}
		    }
   		?>
	   		 <br><input type="submit" value="Enviar" id="enviar" name="enviar"> 
	    </form>
	 
	   <br/>
	</body>
</html>
