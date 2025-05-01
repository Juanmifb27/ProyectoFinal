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
if (isset($_GET["equipo_id"])) {
    $equipo_id = $_GET["equipo_id"];
    $sql = "SELECT * FROM equipos WHERE id=$equipo_id";
    $resEquipo = $conexion->BD_Consulta($sql);
    $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
    if ($tuplaEquipo == NULL) {
        print("<script>document.location.href='./index.php'</script>");
    }
    $equipo_nombre = $tuplaEquipo["nombre_equipo"];
    $equipo_correo = $tuplaEquipo["equipo_correo"];
    $equipo_imagen = $tuplaEquipo["equipo_imagen"];
    $equipo_puntos = $tuplaEquipo["puntos"];
    $equipo_partidos_jugados = $tuplaEquipo["partidos_jugados"];
    $equipo_goles_a_favor = $tuplaEquipo["goles_a_favor"];
    $equipo_goles_en_contra = $tuplaEquipo["goles_en_contra"];
    $equipo_id_liga = $tuplaEquipo["id_liga"];

    $sql = "SELECT * FROM ligas where id=$equipo_id_liga";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    $equipo_liga = $tuplaLiga["nombre_liga"];
}

if (isset($_POST["equipo"])) {
    $equipo_nombre = $_POST["equipo_nombre"];
    $equipo_correo = $_POST["equipo_correo"];
    $equipo_imagen = $_POST["equipo_imagen"];
    $equipo_puntos = $_POST["equipo_puntos"];
    $equipo_partidos_jugados = $_POST["equipo_partidos_jugados"];
    $equipo_goles_a_favor = $_POST["equipo_goles_a_favor"];
    $equipo_goles_en_contra = $_POST["equipo_goles_en_contra"];

    $res = $equipo->modificar($equipo_nombre,$equipo_correo, $equipo_imagen, $equipo_puntos, $equipo_partidos_jugados, $equipo_goles_a_favor, $equipo_goles_en_contra, $equipo_id_liga, $equipo_id);
    $correcto = "Equipo Modificado correctamente";
    print("<script>document.location.href='detalles-liga.php?liga_id=$equipo_id_liga&correcto=$correcto'</script>");
}

require '../../../views/admin/ligas/mod-equipo.view.php';
?>