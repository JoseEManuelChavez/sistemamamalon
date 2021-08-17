<?php

require_once "conexion.php";

class ModeloProductos{
	
	public function mdlGuardarProductos($tabla,$datos)
	{
		$stmt = Conexion::Conectar()->prepare("INSERT INTO $tabla (nombre, id_categoria, descripcion, stock, precio) VALUES (:nombre, :id_categoria, :descripcion, :stock, :precio)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id_categoria", $datos["categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":descripcion", $datos["Descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["Disponibles"], PDO::PARAM_INT);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
	

		}


		$stmt->close();
		$stmt = null;
	}

	public function mdlMostrarProductos($tabla)
	{
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();
		return $stmt -> fetchAll();

		$stmt-> close();
		$stmt = null;


	}
}