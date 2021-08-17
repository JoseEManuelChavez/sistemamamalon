<?php

class ControladorProductos{
	
	public function ctrlGuardarProductos()
	{
		if (isset($_POST["nombreProducto"])) {
			
			$tabla = "productos";

			$datos = array("nombre" => $_POST["nombreProducto"],
						   "categoria" => $_POST["categoria"],
						   "Descripcion" => $_POST["Descripcion"],
						   "Disponibles" => $_POST["Disponibles"],
						   "precio" => $_POST["precio"]
						);

			$respuesta = ModeloProductos::mdlGuardarProductos($tabla,$datos);

			if ($respuesta == "ok") {
						
				echo '<script>

					alert("producto guardado correctamente");
					window.location.href="index.php?ruta=tabla.php";

					</script>';
			}

		}
	}

	public function ctrlMostrarProductos()
	{
		$tabla = "productos";

		$productos = ModeloProductos::mdlMostrarProductos($tabla);

		return $productos;
	}
}