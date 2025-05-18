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
    $necesitaEmparejamientos = false;
    $sql = "SELECT * FROM ligas WHERE id=$liga_id";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);

    $liga_nombre = $tuplaLiga["nombre_liga"];
    $sqlEmparejamiento =  "SELECT * FROM `emparejamientos` where liga_id=$liga_id";
    $resEmparejamiento = $conexion->BD_Consulta($sqlEmparejamiento);
    if($conexion->BD_NumeroFilas($resEmparejamiento) == 0){
        $necesitaEmparejamientos = true;
    }

}else {
    print("<script>document.location.href='index.php';</script>");
}

if (isset($_GET["id_equipo_del"])) {
    $equipo_del = $_GET["id_equipo_del"];
    $condicion = "WHERE id=$equipo_del";
    $equipo->eliminar($condicion);
    $correcto = "Se ha eliminado el equipo correctamente";
    print("<script>document.location.href='detalles-liga.php?liga_id=$liga_id&correcto=$correcto'</script>");
}

require '../../../views/admin/ligas/detalles-liga.view.php';
?>