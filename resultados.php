<?php
include_once 'html_head.php';
include_once 'cabecera.php';
include 'conexion.php';

//realizamos la conexión con mysql
$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');

//como la sentencia SIEMPRE va a buscar todos los registros de la tabla producto, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
$sql = "SELECT * FROM tbl_anunci WHERE ";

//VERSION BETA
//controlar checkbox
if(!isset($_REQUEST['estado_animal'])){
	echo "Selecciona perdido o encontrado";
} else {
	$count = 0;
	foreach ($_REQUEST['estado_animal'] as $opcionEstado[]) {
	$count+=1;			
	}

	if ($count==0) {
		$sql = "";
	}
	if ($count>0) {
		$sql.= " (anu_tipus=$opcionEstado[0]";
		if ($count>1){
			$sql.= " OR anu_tipus=$opcionEstado[1]";
		}
		$sql.=")";
	}

	// //DATOS RAZA
	// if($_REQUEST['raca'] == ''){
	// 	// echo "No se muestra raza";
	// } else {
	// $raca=$_REQUEST['raca'];
	// $sql .= " AND raca_id = $raca";
	// // echo $raca;
	// }

	//DATOS MUNICIPIO
	if(($_REQUEST['mun'] == '')){
		// echo "No se muestra municipio";
	}
	else {
	$mun=$_REQUEST['mun'];
	$sql .= " AND mun_id = $mun";
	// echo $mun;
	}

	//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
	$sql .= " ORDER BY anu_data DESC";
	// echo "$sql<br/>";

	

	//lanzamos la sentencia sql
	$datos = mysqli_query($con, $sql);
	//extraemos los productos uno a uno en la variable $anuncio que es un array
	while($anuncio = mysqli_fetch_array($datos)){
		echo "<b>Nombre:</b>";
		echo utf8_encode($anuncio['anu_nom']);
		echo "<br/>";
		echo "<b>Contenido:</b> ";
		echo utf8_encode($anuncio['anu_contingut']);
		echo "<br/>";
		echo "<b>Fecha:</b> $anuncio[anu_data]<br/>";


		// //contacto
		$sql_contact = "SELECT * FROM tbl_contacte, tbl_anunci where $anuncio[contact_id] = tbl_contacte.contact_id";
		$datos_contac = mysqli_query($con, $sql_contact);
		$contacto = mysqli_fetch_array($datos_contac);
		
		echo "<b>Contacto:</b>";
		echo utf8_encode($contacto['contact_nom']);
		echo "<br/>";
		echo "<b>Teléfono:</b>";
		echo utf8_encode($contacto['contact_telf']);
		echo "<br/>";
		echo "<b>Dirección:</b>";
		echo utf8_encode($contacto['contact_adre']);
		echo "<br/>";
		// //
	
		//echo "<b>Contacto:</b> $anuncio[contact_id]<br/>";

		$fichero="img/$anuncio[anu_foto]";
		if(file_exists($fichero)&&(($anuncio['anu_foto']) != '')){
			echo "<img src='$fichero' width='200' heigth='200' ><br/><br/><br/>";
		}
		else{
			echo "<img src ='img/no_disponible.jpg'/><br/><br>";
		}

		
	}
}
//cerramos la conexión con la base de datos
mysqli_close($con);
?>

<?php include "footer.php";