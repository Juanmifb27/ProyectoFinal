<?php 
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/equipo.php';
include_once '../../../clases/seguridad.php';
include_once '../../../clases/functions.php';
include_once '../../../clases/header.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}

$conexion = new conexion();
$liga = new liga();
$equipo = new equipo();

if ($_GET["liga_id"]) {
    $liga_id = $_GET["liga_id"];
    $sql = "SELECT * FROM ligas WHERE id=$liga_id";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    $liga_nombre = $tuplaLiga["nombre_liga"];

    $sql = "SELECT * FROM equipos WHERE id_liga=$liga_id";
    $resEquipos = $conexion->BD_Consulta($sql);
    $totalEquipos = $conexion->BD_NumeroFilas($resEquipos);
}else {
    print("<script>document.location.href='index.php';</script>");
}
require '../../../views/admin/ligas/emparejamientos-liga.view.php';
?>