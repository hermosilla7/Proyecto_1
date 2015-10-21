<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Buscar animals perduts/trobats</title>
		<link rel="icon" href="http://media.animalear.com/media/favicon/default/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');

			//como la sentencia SIEMPRE va a buscar todos los registros de la tabla producto, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
			$sql = "SELECT * FROM tbl_anunci WHERE ";

			

			


			//VERSION BETA
			//controlar checkbox
			if(!isset($_REQUEST['estado_animal'])){
				echo "No se muestra nada";
			} else {
				$count = 0;
				foreach ($_REQUEST['estado_animal'] as $opcionEstado[]) {
				$count+=1;			
				}

				if ($count==0) {
					$sql = "";
				}
				if ($count>0) {
					$sql.= " anu_tipus=$opcionEstado[0]";
					if ($count>1){
						$sql.= " OR anu_tipus=$opcionEstado[1]";
					}
				}

				//DATOS COMBOBOX
				if(($_REQUEST['raca'] == '')){
					echo "No se muestra raza";
					// $sql .= "raca_id != ''";
					
				}
				else {
				$raca=$_REQUEST['raca'];
				$sql .= " AND raca_id = $raca";
				echo $raca;
				}

				//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
				$sql .= " ORDER BY anu_data ASC";
				echo "$sql<br/>";


				//lanzamos la sentencia sql
				$datos = mysqli_query($con, $sql);

				//extraemos los productos uno a uno en la variable $anuncio que es un array
				while($anuncio = mysqli_fetch_array($datos)){
					echo "<b>Nom:</b> $anuncio[anu_nom]<br/>";
					echo "<b>Contingut:</b> ";
					echo utf8_encode($anuncio['anu_contingut']);
					echo "<br/>";
					echo "<b>Data:</b> $anuncio[anu_data]<br/>";					
					$fichero="img/$anuncio[anu_foto]";
					if(file_exists($fichero)){
						echo "<img src='$fichero'><br/><br/><br/>";
					}
					else{
						echo "<img src =' img/no_disponible.jpg'/><br/><br>";
					}

					
				}
			}
			//cerramos la conexión con la base de datos
			mysqli_close($con);
		?>
	</body>
</html>