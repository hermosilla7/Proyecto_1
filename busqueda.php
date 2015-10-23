<?php
include_once 'html_head.php';
include_once 'conexion.php';
include_once 'cabecera.php';
  
$consulta_raca = ("SELECT * FROM tbl_raca");
$consulta_animal = ("SELECT * FROM tbl_tipus_animal");
$consulta_municipi = ("SELECT * FROM tbl_municipi");
$result_raca = mysqli_query($con, $consulta_raca);
$result_animal = mysqli_query($con, $consulta_animal);
$result_municipi = mysqli_query($con, $consulta_municipi);
?>
		<script type="text/javascript">
			<?php
			$races = [];
				while($fila=mysqli_fetch_array($result_raca)) {
					$races[] = [
						'value' => utf8_encode($fila['raca_id']),
						'tipus_anim_id' => utf8_encode($fila['tipus_anim_id']),
						'display' => utf8_encode($fila['raca_nom']),
					];
				}
				echo 'var races = '. json_encode($races) . ';';
	        ?>
		
			function updateRacasSelect(value)
			{
				var options = '<option value="0">Seleccionar</option>';
				for (var i = 0; i < races.length; i++) {
					if (races[i].tipus_anim_id == value) {
						options += '<option value="'+races[i].value+'">'+races[i].display+'</option>';
					}
				}
				var races_select = document.getElementById('racas');
				races_select.innerHTML = options;
				races_select.disabled = value == 0;
			}

						// Mozilla, Opera, Webkit 
			if ( document.addEventListener ) {
			 	 document.addEventListener( "DOMContentLoaded", function(){
			    document.removeEventListener( "DOMContentLoaded", arguments.callee, false);
			    updateRacasSelect(document.getElementById('animal_tipo_select').value);
			  }, false );

			// If IE event model is used
			} else if ( document.attachEvent ) {
			  // ensure firing before onload
			  document.attachEvent("onreadystatechange", function(){
			    if ( document.readyState === "complete" ) {
			      document.detachEvent( "onreadystatechange", arguments.callee );
					updateRacasSelect(document.getElementById('animal_tipo_select').value);    }
			  });
			}
		</script>
		<form action="resultados.php" method="GET">
			<input id="checkbox" type="checkbox" name="estado_animal[]" value="0">Perdido<br/><br>
			<input id="checkbox" type="checkbox" name="estado_animal[]" value="1">Encontrado<br/><br>
		
		<!-- TIPO DE ANIMAL -->
	   	<select id="animal_tipo_select" name="animal_tipo" onchange="updateRacasSelect(this.value)">
				<option value="0">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_animal)){
					echo utf8_encode("<option value=\"$fila[tipus_anim_id]\">$fila[tipus_anim_nom]</option>");
				}
	        	?>
	   	</select><br/><br>


		<!-- RAZAS -->
		<select id="racas" name="raca" disabled="disabled">
	   	</select><br/><br>

	   	<!-- MUNICIPIO -->
		<select id="mun" name="mun">
				<option value="">Seleccionar</option>
				<?php
				while($fila=mysqli_fetch_array($result_municipi)){
					echo utf8_encode("<option value=\"$fila[municipi_id]\">$fila[municipi_nom]</option>");
				}
	        	?>
	    </select><br/><br>
	   	
			<input id="boton" type="submit" value="Enviar">
			<input id="boton" type="reset" value="Cancelar">
			<input id="boton" type="button" onclick="alert('Rellena los campos para encontrar a tu mascota')" value="?">
			<a href="alta_anunci.php" type="button" class="button">Dar de alta un anuncio</a>

		</form>
		<?php  include "footer.php";