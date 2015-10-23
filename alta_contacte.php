<?php
include_once 'html_head.php';
include_once 'cabecera.php';
include 'conexion.php';
?>
		<h1>Alta contacto</h1>
		<form action="insert_contacte.php" method="post">
		Nombre:&nbsp;&nbsp;&nbsp;&nbsp;
		<input id="nom" type="text" name="nombre" maxlength="25"></br><br>
		Teléfono:
		<input id="nom" type="text" name="telf" maxlength="9"></br><br>
		Dirección:
		<input id="nom" type="text" name="direcc" maxlength="50"></br><br>


		<input id="boton" type="submit" value="Registrar">
		<input id="boton" type="reset" value="Cancel·lar">
		<input id="boton" type="button" onclick="alert('Versión 1.0')" value="?">
			


<?php  include "footer.php";?>

<!-- // header ('Location: http://localhost/Definitivo/alta_anunci.php?contacte='.'Mateo');
// 	exit(0); -->