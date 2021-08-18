<?php
	
	$id = "id";
	$valor = $_GET["producto"];

	$categoriaEditar = ControladorProductos::ctrlMostrarProductoEditar($id, $valor);

	foreach ($categoriaEditar as $key => $value) {
		# code...
	}
?>

<form method="POST">
	
	</br></br>

	<label>Nombre</label>
	<input type="text" name="nombreProductoEditado" value="<?php echo $value["nombre"] ?>">
	<input type="hidden" name="idProducto" value="<?php echo $value["id"] ?>">
	</br></br>

	<label>Categoria</label>
	<select name="categoriaEditada">
		
		<option><?php echo $value["id_categoria"] ?></option>

		<?php

			$categorias = ControladorCategorias::ctrlMostrarCategorias();

			foreach ($categorias as $key => $valueCategorias) {
				
				echo'<option value="'.$valueCategorias["id"].'">'.$valueCategorias["nombre"].'</option>';
			}

		?>
		
	</select></br></br>

	<label>Descripcion</label>
	<textarea name="DescripcionEditada"><?php echo $value["descripcion"] ?></textarea></br></br>

	<label>Stock</label>
	<input type="number" name="DisponiblesEditar" value="<?php echo $value["stock"] ?>"></br></br>

	<label>Precio</label>
	<input type="number" name="precioEditado" value="<?php echo $value["precio"] ?>"></br></br>

	<button type="submit">Editar</button>

	<?php

		$editar = new ControladorProductos();
		$editar -> ctrlEditarProducto();

	?>

</form>