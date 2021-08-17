<form method="POST">
	
	</br></br>

	<label>Nombre</label>
	<input type="text" name="nombreProducto">
	</br></br>

	<label>Categoria</label>
	<select name="categoria">
		
		<option>Seleccionar categorias</option>

		<?php

			$categorias = ControladorCategorias::ctrlMostrarCategorias();

			foreach ($categorias as $key => $valueCategorias) {
				
				echo'<option value="'.$valueCategorias["id"].'">'.$valueCategorias["nombre"].'</option>';
			}

		?>
		
	</select></br></br>

	<label>Descripcion</label>
	<textarea name="Descripcion"></textarea></br></br>

	<label>Stock</label>
	<input type="number" name="Disponibles"></br></br>

	<label>Precio</label>
	<input type="number" name="precio"></br></br>

	<button type="submit">Guardar</button>

	<?php

		$guardar = new ControladorProductos();
		$guardar -> ctrlGuardarProductos();

	?>

</form>