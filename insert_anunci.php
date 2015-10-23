<?php
include_once 'html_head.php';
include_once 'cabecera.php';
include 'conexion.php';

	$con=mysqli_connect("localhost","root","","bd_botiga_animals") or
	    die("Problemas con la conexión");
	$fecha = date('Y-m-d');

	//insertar imagen
	//$nombre_foto=$_REQUEST["nombre_foto"];
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="img/".$foto;
	copy($ruta, $destino);

	$sql="insert into tbl_anunci(anu_contingut, anu_nom, anu_data, anu_foto, raca_id, mun_id, contact_id, anu_tipus) values 
	                       ('$_REQUEST[contenido]','$_REQUEST[nombre]', '$fecha', '$foto', $_REQUEST[raca],$_REQUEST[mun],$_REQUEST[contac],$_REQUEST[tipus])";
	                       // echo $sql;
	mysqli_query($con,$sql)
	  or die("Problemas en el select".mysqli_error($con));

	mysqli_close($con);

	echo "Anunci donat d'alta";
	
?>

<?php  include "footer.php";
