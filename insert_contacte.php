<?php
include_once 'html_head.php';
include_once 'cabecera.php';
include 'conexion.php';

	$con=mysqli_connect("localhost","root","","bd_botiga_animals") or
	    die("Problemas con la conexión");

	mysqli_query($con,"insert into tbl_contacte(contact_nom, contact_telf, contact_adre) values 
	                       ('$_REQUEST[nombre]','$_REQUEST[telf]','$_REQUEST[direcc]')")
	  or die("Problemas en el select".mysqli_error($con));

	mysqli_close($con);

	echo "Contacto dado de alta";
	
?>

<?php  include "footer.php";
