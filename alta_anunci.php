<?php
include_once 'html_head.php';
include_once 'cabecera.php';
include 'conexion.php';
$consulta_raca = ("SELECT * FROM tbl_raca");
$consulta_animal = ("SELECT * FROM tbl_tipus_animal");
$consulta_municipi = ("SELECT * FROM tbl_municipi");
$consulta_contacte = ("SELECT * FROM tbl_contacte");
$result_raca = mysqli_query($con, $consulta_raca);
$result_animal = mysqli_query($con, $consulta_animal);
$result_municipi = mysqli_query($con, $consulta_municipi);
$result_contacte = mysqli_query($con, $consulta_contacte);
?>
		<h1>Alta d'anunci</h1></br><br>
		<form action="insert_anunci.php" method="post" enctype="multipart/form-data">
		Titulo:&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="nombre" id="nom"></br><br>
		Contenido:
		<textarea name="contenido" id="contin" cols="20" rows="5" maxlength="255"></textarea></br><br>


		<!-- imagen -->
		<!-- Nombre imagen:
		<input type="text" name="nombre_foto" value=""><br> -->
	   	Imagen:
		<input type="file" name="foto" id="foto"></br><br>
		<!-- fin imagen -->


		Raza:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select id="selects" name="raca">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_raca)){
					echo utf8_encode("<option value=\"$fila[raca_id]\">$fila[raca_nom]</option>");
				}
	        	?>
	   	</select></br><br>
		Municipio:
		<select id="selects" name="mun">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_municipi)){
					echo utf8_encode("<option value=\"$fila[municipi_id]\">$fila[municipi_nom]</option>");
				}
	        	?>
	   	</select></br><br>
		Contacto:
		<!-- CONTACTO -->
		<select id="selects" name="contac">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_contacte)){
					echo utf8_encode("<option value=\"$fila[contact_id]\">$fila[contact_nom]</option>");
				}
	        	?>
	    </select></br><br>
		Tipo:	
		<br>	
		<input id="checkbox" type="radio" name="tipus" value="0">Perdido</br><br>		
		<input id="checkbox" type="radio" name="tipus" value="1">Encontrado</br><br>
	<br>
	<input id="boton" type="submit" value="Registrar">
	<input id="boton" type="reset" value="Cancelar">
	<a href="alta_contacte.php" type="button" class="button">Dar de alta un contacto</a>
	</form>

<?php  include "footer.php";