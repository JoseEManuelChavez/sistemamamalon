<?php
$Producto = $_GET["producto"];
var_dump($Producto);
$eliminar = ControladorProductos::ctrlEliminarProductos($Producto);
var_dump($eliminar);