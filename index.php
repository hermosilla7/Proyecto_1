<?php
include ("conexion.php");
$consulta_raca = ("SELECT * FROM tbl_raca");
$consulta_animal = ("SELECT * FROM tbl_tipus_animal");
$result_raca = mysqli_query($con, $consulta_raca);
$result_animal = mysqli_query($con, $consulta_animal);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Buscar animals perduts/trobats</title>
		<link rel="icon" href="http://media.animalear.com/media/favicon/default/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<form action="busqueda.php" method="GET">
			<input type="checkbox" name="estado_animal[]" value="0">Perdut<br/>
			<input type="checkbox" name="estado_animal[]" value="1">Trobat<br/>
		
		<!-- TIPO DE ANIMAL -->
	   	<select name="animal_tipo">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_animal)){
					echo utf8_encode("<option value=\"$fila[tipus_anim_id]\">$fila[tipus_anim_nom]</option>");
				}
	        	?>
	   	</select><br/>


		<!-- RAZAS -->
		<select name="raca">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_raca)){
					echo utf8_encode("<option value=\"$fila[raca_id]\">$fila[raca_nom]</option>");
				}
	        	?>
	   	</select><br/>

	   	<!-- MUNICIPIO -->
		<select name="raca">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_raca)){
					echo utf8_encode("<option value=\"$fila[raca_id]\">$fila[raca_nom]</option>");
				}
	        	?>
	    </select><br/>
	   	
			<input type="submit" value="Enviar">
			<input type="reset" value="Cancel·lar">
			<input type="button" onclick="alert('Versión 1.0')" value="?">
			<a href="alta_anunci.php" type="button" class="button">Donar d'alta</a>

		</form>
	</body>
</html>