<!DOCTYPE html>
<html>
	<head>
		<title>Alta d'anunci</title>
	</head>
	<body>
		<?php
			$con=mysqli_connect("localhost","root","","bd_botiga_animals") or
			    die("Problemas con la conexión");

			//ORIGINAL
			$mio="insert into tbl_anunci(anu_contingut	,anu_nom, anu_data, raca_id, mun_id, contact_id, anu_tipus) values 
			                       ('$_REQUEST[contenido]','$_REQUEST[nombre]',$_REQUEST[raca],$_REQUEST[mun],$_REQUEST[contac],$_REQUEST[tipus])";
			echo $mio;
			mysqli_query($con,"insert into tbl_anunci(anu_contingut	,anu_nom, raca_id, mun_id, contact_id, anu_tipus) values 
			                       ('$_REQUEST[contenido]','$_REQUEST[nombre]',$_REQUEST[raca],$_REQUEST[mun],$_REQUEST[contac],$_REQUEST[tipus])")
			  or die("Problemas en el select".mysqli_error($con));

			



			mysqli_close($con);

			echo "Incidencia donada d'alta";
		?>
	</body>
</html>
