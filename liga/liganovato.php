<?php 
require 'admin/config.php';
require 'clases/conexion.php';
require 'clases/liga.php';
require 'clases/equipo.php';
require_once 'clases/header.php';

$conexion = new conexion();
$liga = new liga();
$liga_nombre = "Liga Novato";
$equipos_connect = new equipo();

$condicion = "WHERE nombre_liga = '$liga_nombre'";
$resultado_liga = $liga->obtenerConFiltro($condicion, "");
$liga_novato = $resultado_liga->fetch_assoc();

$condicion = "WHERE id_liga = $liga_novato[id]";
$orden = "ORDER BY puntos";
$resultado_equipos = $equipos_connect->obtenerConFiltro($condicion, $orden);
$posicion = 1;
// $equipo = $resultado_equipos->fetch_assoc();
// print_r($equipo);
// Funciona
// $res = $liga->insertar($liga_nombre);

// $sql_equipos = "SELECT * FROM equipos "


require 'views/liganovato.view.php';
?>