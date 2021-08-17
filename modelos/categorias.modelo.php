<?php
require_once "conexion.php";

class ModeloCategorias{
	
	public function mdlMostrarCategorias($tabla)
	{
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();
	}
}