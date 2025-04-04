<?php
session_start();
include_once 'admin/config.php';
include_once '../clases/conexion.php';
include_once '../clases/liga.php';
include_once '../clases/equipo.php';
include_once '../clases/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty([$_GET['liga']])) {
    $liga_nombre = $_GET['liga'];
} else {
    header("Location: index.php");
}

$conexion = new conexion();
$liga = new liga();
$equipos_connect = new equipo();

$grupos = ["A", "B", "C", "D", "E", "F"];

$errores = "";

$condicion = "WHERE nombre_liga LIKE '%$liga_nombre%'";
$resultado_liga = $liga->obtenerConFiltro($condicion, "");

$tabs_liga = $liga->obtenerConFiltro($condicion,"");

if ($resultado_liga != NULL) {
    if ($resultado_liga->num_rows > 0) {
        $tuplaLiga = $conexion->BD_GetTupla($resultado_liga);
        while ($tuplaLiga != NULL) {
            $liga_seleccionada[] = $tuplaLiga;
            $tuplaLiga = $conexion->BD_GetTupla($resultado_liga);
        }

        for ($i = 0; $i < count($liga_seleccionada); $i++) {
            $condicion = "WHERE id_liga = " . $liga_seleccionada[$i]["id"] . "";
            $orden = "ORDER BY id_liga, puntos DESC";
            $resultado_equipos = $equipos_connect->obtenerConFiltro($condicion, $orden);
            
            if ($resultado_equipos !=NULL) {
                if ($resultado_equipos->num_rows > 0) {
                    $tuplaEquipo = $conexion->BD_GetTupla($resultado_equipos);
                    while (!empty($tuplaEquipo)) {
                        $equipos_liga[] = $tuplaEquipo;
                        $tuplaEquipo = $conexion->BD_GetTupla($resultado_equipos);
                    }
                }
            }
        }
    }
}

require '../views/liga.view.php';
