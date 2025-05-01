<?php 
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/seguridad.php';
include_once '../../../clases/functions.php';
include_once '../../../clases/header.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}
$conexion = new conexion();
$liga = new liga();
if (isset($_GET["liga_id"])) {
    $liga_id = $_GET["liga_id"];
    $sql = "SELECT * FROM ligas WHERE id=$liga_id";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    if ($tuplaLiga == NULL) {
        print("<script>document.location.href='./index.php'</script>");
    }
    $liga_nombre = $tuplaLiga["nombre_liga"];
}

if (isset($_POST["liga_nombre"])) {
    $liga_nombre = $_POST["liga_nombre"];

    $res = $liga->modificar($liga_nombre, $liga_id);
    $correcto = "Liga Modificada correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}

require '../../../views/admin/ligas/mod-liga.view.php';
?>