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
	
	public function mdlMostrarProductosEditar($tabla , $id, $valor)
	{
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM $tabla WHERE $id = $valor");

		$stmt->execute();
		return $stmt -> fetchAll();

		$stmt-> close();
		$stmt = null;
		
	}

	public function mdlEditarProductos($tabla, $datos)
	{
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, id_categoria = :id_categoria, descripcion = :descripcion, stock = :stock, precio = :precio WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombreProductoEditado"], PDO::PARAM_STR);

		$stmt->bindParam(":id_categoria", $datos["categoriaEditada"], PDO::PARAM_INT);

		$stmt->bindParam(":descripcion", $datos["DescripcionEditada"], PDO::PARAM_STR);

		$stmt->bindParam(":stock", $datos["DisponiblesEditar"], PDO::PARAM_INT);

		$stmt->bindParam(":precio", $datos["precioEditado"], PDO::PARAM_STR);

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";


		}else{

			return "error";	

		}

		$stmt -> close();
		$stmt = null;

	}

	public function mdlEliminarProducto($Producto ,$tabla)
	{
		
		$stmt = Conexion::Conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $Producto, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();
		$stmt = null;
	}
}