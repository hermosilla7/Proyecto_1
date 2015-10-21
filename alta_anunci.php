<?php
include ("conexion.php");
$consulta_raca = ("SELECT * FROM tbl_raca");
$consulta_animal = ("SELECT * FROM tbl_tipus_animal");
$consulta_municipi = ("SELECT * FROM tbl_municipi");
$consulta_per_trob = ("SELECT * FROM tbl_municipi");
$result_raca = mysqli_query($con, $consulta_raca);
$result_animal = mysqli_query($con, $consulta_animal);
$result_municipi = mysqli_query($con, $consulta_municipi);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alta d'anunci</title>
	</head>
	<body>
		<h1>Alta d'anunci</h1>
		<form action="insert.php" method="post">
		Contingut:
		<input type="text" name="contenido"><br>
		Nom:
		<input type="text" name="nombre"><br>
		Raça:
		<select name="raca">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_raca)){
					echo utf8_encode("<option value=\"$fila[raca_id]\">$fila[raca_nom]</option>");
				}
	        	?>
	   	</select><br>
		Municipi:
		<select name="mun">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_municipi)){
					echo utf8_encode("<option value=\"$fila[municipi_id]\">$fila[municipi_nom]</option>");
				}
	        	?>
	   	</select><br>
		Contacte:
		<input type="text" name="contac"><br>
		Tipus:	
		<br>	
		<input type="radio" name="tipus" value="0">Trobat<br>		
		<input type="radio" name="tipus" value="1">Perdut
	<br>
	<input type="submit" value="Registrar">
	<input type="reset" value="Cancelar">
	</form>
	</body>
</html>