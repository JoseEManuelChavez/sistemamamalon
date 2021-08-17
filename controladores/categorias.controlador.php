<?php

class ControladorCategorias{
	
	public function ctrlMostrarCategorias()
	{
		
		$tabla = "categorias";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla);

		return $respuesta;
	}
}