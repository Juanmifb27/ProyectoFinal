<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/equipo.php';
include_once '../../../clases/emparejamiento.php';
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
$emparejamiento = new emparejamiento();

$imprime_modales ="";

if (isset($_GET["liga_id"])) {
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

// Genera Emparejamientos
if (isset($_GET["liga_id_emparejamientos"])) {
    $liga_id_emparejamientos = $_GET["liga_id_emparejamientos"];
    $emparejamiento->generarEmparejamientos($liga_id_emparejamientos);
    $mensaje = "Los emparejamientos se han generado correctamente.";
    header("Location: ./emparejamientos-liga.php?liga_id=$liga_id_emparejamientos&correcto=$mensaje");
}

// Elimina los emparejamientos
if (isset($_GET["id_liga_del"])) {
    $liga_id_del = $_GET["id_liga_del"];
    $sqlCondicion = " WHERE liga_id=$liga_id_del";
    $emparejamiento->eliminar($sqlCondicion);
    $mensaje = "Los emparejamientos se han eliminado correctamente.";
    header("Location: ./emparejamientos-liga.php?liga_id=$liga_id_del&correcto=$mensaje");
}

// Modifica la fecha
if(isset($_POST["aux_fecha_mod"])){
    $emparejamiento_id = $_POST["aux_fecha_mod"];
    $emparejamiento_fecha = $_POST["fecha_mod"];
    $emparejamiento->dar_Fecha($emparejamiento_fecha, $emparejamiento_id);
    $mensaje = "La fecha se ha modificado correctamente.";
    header("Location: ./emparejamientos-liga.php?liga_id=$liga_id&correcto=$mensaje");
}

// Dar Resultado del Partido
if(isset($_POST['aux_resultado_mod'])){
    $emparejamiento_id = $_POST["aux_resultado_mod"];
    $id_local = $_POST["aux_resultado_local_mod"];
    $id_visitante = $_POST["aux_resultado_visitante_mod"];
    $goles_local = $_POST['goles_local_mod'];
    $goles_visitante = $_POST['goles_visitante_mod'];
    $resultado="";

    $emparejamiento->dar_Resultado($goles_local, $goles_visitante, $emparejamiento_id);

    if($goles_local > $goles_visitante){
        $equipo->dar_Resultado($id_local, 3, $goles_local, $goles_visitante);
        $equipo->dar_Resultado($id_visitante, 0, $goles_visitante, $goles_local);
    }else if($goles_local < $goles_visitante){
        $equipo->dar_Resultado($id_local, 0, $goles_local, $goles_visitante);
        $equipo->dar_Resultado($id_visitante, 3, $goles_visitante, $goles_local);
    }else{
        $equipo->dar_Resultado($id_local, 1, $goles_local, $goles_visitante);
        $equipo->dar_Resultado($id_visitante, 1, $goles_visitante, $goles_local);
    }

    $mensaje= "El resultado del partido se ha indicado correctamente, liga actualizada";
    header("Location: ./emparejamientos-liga.php?liga_id=$liga_id&correcto=$mensaje");
}

// Resetear Partido
if(isset($_POST['aux_emparejamiento_del'])){
    $emparejamiento_id = $_POST["aux_emparejamiento_del"];
    $id_local = $_POST["aux_emparejamiento_del_id_local"];
    $id_visitante = $_POST["aux_emparejamiento_del_id_visitante"];
    $goles_local = $_POST["aux_emparejamiento_del_goles_local"];
    $goles_visitante = $_POST["aux_emparejamiento_del_goles_visitante"];

    $emparejamiento->resetear_Resultado($emparejamiento_id);

    if($goles_local > $goles_visitante){
        $equipo->resetear_Resultado($id_local, 3, $goles_local, $goles_visitante);
        $equipo->resetear_Resultado($id_visitante, 0, $goles_visitante, $goles_local);
    }else if($goles_local < $goles_visitante){
        $equipo->resetear_Resultado($id_local, 0, $goles_local, $goles_visitante);
        $equipo->resetear_Resultado($id_visitante, 3, $goles_visitante, $goles_local);
    }else{
        $equipo->resetear_Resultado($id_local, 1, $goles_local, $goles_visitante);
        $equipo->resetear_Resultado($id_visitante, 1, $goles_visitante, $goles_local);
    }

    $mensaje= "El resultado del partido se ha reiniciado correctamente, liga actualizada";
    header("Location: ./emparejamientos-liga.php?liga_id=$liga_id&correcto=$mensaje");
}
require '../../../views/admin/ligas/emparejamientos-liga.view.php';
?>