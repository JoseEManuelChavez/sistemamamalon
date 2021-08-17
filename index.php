<?php

require_once "controladores/inicio.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";
require_once "controladores/productos.controlador.php";
require_once "modelos/productos.modelo.php";

$objeto = new controladorInicio();
$objeto -> ctrlMostrarElInicio();