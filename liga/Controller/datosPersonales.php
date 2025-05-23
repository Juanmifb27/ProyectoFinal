<?php 
session_start();

include_once 'admin/config.php';
include_once '../clases/conexion.php';
include_once '../clases/liga.php';
include_once '../clases/equipo.php';
include_once '../clases/jugador.php';
include_once '../clases/usuario.php';
include_once '../clases/seguridad.php';
include_once '../clases/functions.php';
include_once '../clases/header.php';

$vectorUsuario = Seguridad();
if (!$vectorUsuario) {
    header("Location: ./index.php");
}

$usuario_correo = $vectorUsuario["email"];
$usuario_pass = $vectorUsuario["password"];

$sqlNombre = "SELECT * FROM jugadores where id=$vectorUsuario[id_jugador]";
$resNombre = $conexion->BD_Consulta($sqlNombre);
$tuplaNombre = $conexion->BD_GetTupla($resNombre);
$usuario_nombre = $tuplaNombre["jugador_nombre"];

$sqlEquipo = "SELECT * FROM equipos WHERE id=$vectorUsuario[id_equipo]";
$resEquipo = $conexion->BD_Consulta($sqlEquipo);
$tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
$usuario_equipo = $tuplaEquipo["nombre_equipo"];
$equipo_imagen = $tuplaEquipo["equipo_imagen"];

$sqlLiga = "SELECT * FROM ligas WHERE id=$vectorUsuario[id_liga]";
$resLiga = $conexion->BD_Consulta($sqlLiga);
$tuplaLiga = $conexion->BD_GetTupla($resLiga);
$usuario_liga = $tuplaLiga["nombre_liga"];


$conexion = new conexion();
$liga = new liga();
$equipo = new equipo();
$jugador = new jugador();
$usuario = new usuario();

$imprime_modal = "";

// Modificar Contraseña
if(isset($_POST["aux_DatosPersonales"])){
    $usuario_pass = $_POST["usuario_pass"];

    $usuario->modificar($vectorUsuario["email"], $usuario_pass, $vectorUsuario["rol"], $vectorUsuario["id_jugador"], $vectorUsuario["id_equipo"], $vectorUsuario["id_liga"], $vectorUsuario["id"]);
    $correcto = "Contraseña modificada correctamente";
    print("<script>document.location.href='datosPersonales.php?correcto=$correcto'</script>");
}


require '../views/datosPersonales.view.php';
?>