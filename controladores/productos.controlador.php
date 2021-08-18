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
					window.location.href="sistemamamalon";

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

	public function ctrlMostrarProductoEditar($id, $valor)
	{
		$tabla = "productos";

		$productos = ModeloProductos::mdlMostrarProductosEditar($tabla, $id, $valor);

		return $productos;
	}

	public function ctrlEditarProducto()
	{
		if (isset($_POST["nombreProductoEditado"])) {
			
			$tabla = "productos";

			$datos = array("id" => $_POST["idProducto"],
						   "nombreProductoEditado" => $_POST["nombreProductoEditado"],
						   "categoriaEditada" => $_POST["categoriaEditada"] ,
						   "DescripcionEditada" => $_POST["DescripcionEditada"],
						   "DisponiblesEditar" => $_POST["DisponiblesEditar"],
						   "precioEditado" => $_POST["precioEditado"]
						   );

			$productoEditado = ModeloProductos::mdlEditarProductos($tabla, $datos);

			if ($productoEditado == "ok") {
						
				echo '<script>

					alert("producto editado correctamente");

					window.location.href="index.php?ruta=tabla.php";

					</script>';
			}
		}
	}

	public function ctrlEliminarProductos($Producto)
	{
		$tabla = "productos";

		$respuesta = ModeloProductos::mdlEliminarProducto($Producto,$tabla);

			if($respuesta == "ok"){

				echo'<script>

					alert("producto Eliminado correctamente");

					window.location.href="index.php?ruta=tabla.php";

				</script>';


			}		


	}
}