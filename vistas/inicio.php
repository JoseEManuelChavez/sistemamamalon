<!DOCTYPE html>
<html>
<head>
	<title>Sistema mamalon</title>
</head>
<body>

	<h1>Sistema mamalon</h1>

	<button><a href="index.php?ruta=formulario.php">Agregar producto</a></button>

	
	<?php

	include "modulos/tabla.php";

		if (isset($_GET["ruta"])) {

			if ($_GET["ruta"] == "formulario.php") {


	          include "modulos/formulario.php";

				
			}else if ($_GET["ruta"] == "editarProductos.php") {
				
				include "modulos/editarProductos.php";

			}else if ($_GET["ruta"] == "EliminarProductos.php") {
				
				include "modulos/EliminarProductos.php";
			}
		}

	?>

</body>
</html>