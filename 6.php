<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 6</title>
	</head>
	<body>
		<legend>Ejercicio 6</legend>
		<p align="justify">
			6. Un alumno desea saber cuál será el promedio general en las tres materias más difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas, sabiendo que se evalúa de la siguiente manera: <br>
				•	La calificación de Informática se obtiene de un examen con 50% y un promedio de tareas de 50% con tres tareas entregadas.<br>
				•	La calificación de Física se obtiene de la siguiente forma: Examen 30%, promedio de tareas 40% para un total de dos tareas, Proyecto 30%.<br>
				•	La calificación de Matemática se obtiene con 2 exámenes 20% cada uno, promedio de tres tareas 30% y proyecto con 30%.<br> Calcular el promedio de un alumno cualquiera por asignatura y el total ganado por las tres.<br>

		</p>
		<form action="" method="POST" name="Formulario" align="center">
			<table border="2" align="center">
				<thead>
					<tr >
						<th colspan="8">Informática</th>
						<th colspan="2"></th>
						<th colspan="8">Física</th>
						<th colspan="2"></th>
						<th colspan="8">Matemáticas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="8">
							<label for="tarea1i">Nota tarea 1</label><br>
							<input type="double" id="t1i" name="t1i" required><br> 

							<label for="tarea2i">Nota tarea 2</label><br>
							<input type="double" id="t2i" name="t2i" required><br>

							<label for="tarea2i">Nota tarea 3</label><br>
							<input type="double" id="t3i" name="t3i" required><br>

							<label for="exameni">Nota examen </label><br>
							<input type="double" id="exai" name="exai" required><br>
							<hr>
						</td>
						<td colspan="2"></td>
						<td colspan="8">
							<label for="examenf">Nota examen</label><br>
							<input type="double" id="exaf" name="exaf" required><br>

							<label for="tarea1f">Nota tarea 1</label><br>
							<input type="double" id="t1f" name="t1f" required><br>

							<label for="tarea2f">Nota tarea 2</label><br>
							<input type="double" id="t2f" name="t2f" required><br>
							
							<label for="proyectof">Nota proyecto </label><br>
							<input type="double" id="proyf" name="proyf" required><br>
							<hr>
						</td>
						<td colspan="2"></td>
						<td colspan="8">
							<label for="examen1m">Nota examen 1</label><br>
							<input type="double" id="exa1m" name="exa1m" required><br>

							<label for="examen2m">Nota examen 2</label><br>
							<input type="double" id="exa2m" name="exa2m" required><br>

							<label for="tarea1m">Nota tarea 1</label><br>
							<input type="double" id="t1m" name="t1m" required><br>
							
							<label for="tarea2m">Nota tarea 2 </label><br>
							<input type="double" id="t2m" name="t2m" required><br>

							<label for="tarea3m">Nota tarea 3 </label><br>
							<input type="double" id="t3m" name="t3m" required><br>

							<label for="proyectom">Nota proyecto </label><br>
							<input type="double" id="proym" name="proym" required><br>
							<hr>
						</td>
					</tr>
				</tbody>
			</table><br>
			<input type="submit" id="enviar" name="enviar" value="Procesar"><br><br>
			<?php
				/*Informatica: t1i,t2i,t3i,exai*/
				/*Fisica: exaf, t1f, t2f, proyf*/
				/*Matematica: exa1m, exa2m, t1m, t2m, t3m, proym */
	     	if (isset($_POST['enviar'])) 
	     	{	
	     		/*I(Informatica)*/
	     		$tarea_1_inforamtica=$_POST['t1i'];
	     		$tarea_2_inforamtica=$_POST['t2i'];
	     		$tarea_3_inforamtica=$_POST['t3i'];
	     		$examen_inforamtica=$_POST['exai'];
	     		/**/
	     		$pro1_informatica=(($tarea_1_inforamtica+$tarea_2_inforamtica+$tarea_3_inforamtica)/3)*0.50;
	     		$pro2_informatica=$examen_inforamtica*0.50;
	     		$pro_f_informatica=$pro1_informatica+$pro2_informatica;
	     		/*O(Informatica) */
	     		/*I(Fisica)30%, 40% / 2, 30%*/
	     		$examen_fisica=$_POST['exaf'];
	     		$tarea_1_fisica=$_POST['t1f'];
	     		$tarea_2_fisica=$_POST['t2f'];
	     		$proyecto_fisica=$_POST['proyf'];
	     		/**/
	     		$p_exa_f=$examen_fisica*0.30;
	     		$p_tareas_f=(($tarea_1_fisica+$tarea_2_fisica)/2)*0.4;
	     		$p_proy_f=$proyecto_fisica*0.30;
	     		$pro_f_fisica=$p_exa_f+$p_tareas_f+$p_proy_f;
	     		/*O(Fisica)*/
	     		/*I(Matematica)20% * 2, 30%, 30%*/
	     		$examen_1_matematica=$_POST['exa1m'];
	     		$examen_2_matematica=$_POST['exa2m'];
	     		$tarea_1_matematica=$_POST['t1m'];
	     		$tarea_2_matematica=$_POST['t2m'];
	     		$tarea_3_matematica=$_POST['t3m'];
	     		$proyecto_matematica=$_POST['proym'];
	     		/**/
	     		$p_exa_m=(($examen_1_matematica+$examen_2_matematica)/2)*0.40;
	     		$p_tareas_m=(($tarea_1_matematica+$tarea_2_matematica+$tarea_3_matematica)/3)*0.30;
	     		$p_proy_m=$proyecto_matematica*0.30;
	     		$pro_f_matematica=$p_exa_m+$p_tareas_m+$p_proy_m;
	     		/*O(Matematica)*/
	     		/*Promedios finales*/
	     		$promedio_final=($pro_f_informatica+$pro_f_fisica+$pro_f_matematica)/3;
	    ?>
	     		<table border="2" align="center">
	     			<thead>
	     				<tr>
	     					<th>Promedio Informática</th>
	     					<th>Promedio Física</th>
	     					<th>Promedio Matemática</th>
	     					<th>Promedio gobal final</th>
	     				</tr>
	     			</thead>
	     			<tbody>
	     				<tr>
	     					<td><?php echo $pro_f_informatica; ?></td>
	     					<td><?php echo $pro_f_fisica; ?></td>
	     					<td><?php echo $pro_f_matematica; ?></td>
	     					<td><?php echo round($promedio_final,2); ?></td>
	     				</tr>
	     			</tbody>
	     		</table>	    
	    <?php 		
	     	}
   		?>
		</form>
	</body>
</html>