<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 10</title>
	</head>
	<body>
		<legend>Ejercicio 10</legend>
		<p align="justify">
			10. En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. El presupuesto anual del hospital se reparte conforme a la siguiente tabla:
			<br>Área de Pediatría = 30%
			<br>Área de Oncología  = 40%
			<br>Área de Traumatología = 30%

		</p>
		<form action="" method="POST" name="Formulario">
			<label for="presupuesto">Ingrese el presupuesto para el Hospital </label><br>
			<input type="text" id="presu" name="presu" required><br><br>

			<input type="submit" id="enviar" name="enviar"><br>
		<?php
	     	if (isset($_POST['enviar'])) 
	     	{
	     		$presupuesto = $_POST['presu'];
	     		/**/
				$pediatria = $presupuesto*0.30;
	     		$oncoligia = $presupuesto*0.40;
	     		$traumatologia = $presupuesto*0.30;
	     		/**/
	     		echo "<br>EL  presupuesto se a dividido de la forma siguiente: ";
				echo "<br>Area de Pediatria = $ ". number_format($pediatria);
				echo "<br>Area de Oncoligia = $ ". number_format($oncoligia);
				echo "<br>Area de Traumatologia = $ ". number_format($traumatologia);
	     	}
   		?>
		</form>
	</body>
</html>