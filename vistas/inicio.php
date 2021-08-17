<!DOCTYPE html>
<html>
<head>
	<title>Sistema mamalon</title>
</head>
<body>

	<h1>Sistema mamalon</h1>

	<button><a href="index.php?ruta=formulario.php">Agregar producto</a></button>

	
	<?php


		if (isset($_GET["ruta"])) {

			if ($_GET["ruta"] == "formulario.php") {


	          include "modulos/formulario.php";

				
			}else{

				include "modulos/tabla.php";

			}
		}

	?>

</body>
</html>