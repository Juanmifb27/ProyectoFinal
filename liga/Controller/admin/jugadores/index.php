<?php 
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/equipo.php';
include_once '../../../clases/jugador.php';
include_once '../../../clases/usuario.php';
include_once '../../../clases/seguridad.php';
include_once '../../../clases/functions.php';
include_once '../../../clases/header.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once '../../../clases/email.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}

$conexion = new conexion();
$liga = new liga();
$equipo = new equipo();
$jugador = new jugador();
$usuario = new usuario();

// Modificar Jugador
if(isset($_POST["aux_modJugador"])){
    $jugador_id = $_POST["aux_modJugador"];
    $jugador_nombre = $_POST["nombre_jugador_mod"];
    $jugador_correo = $_POST["email_jugador_mod"];
    $jugador_equipo_id = $_POST["equipo_jugador"];
    $jugador_curso = $_POST["curso_jugador"];
    $sqlLiga = "SELECT * FROM equipos where id=$jugador_equipo_id";
    $resLiga = $conexion->BD_Consulta($sqlLiga);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    $jugador_id_liga = $tuplaLiga["id_liga"];
    $jugador->modificar($jugador_nombre, $jugador_correo, $jugador_curso, $jugador_equipo_id, $jugador_id_liga, $jugador_id);
    $sqlUsuario = "SELECT * FROM usuarios where id_jugador=$jugador_id";
    $resUsuario = $conexion->BD_Consulta($sqlUsuario);
    $tuplaUsuario = $conexion->BD_GetTupla($resUsuario);
    $usuario->modificar($jugador_correo, $tuplaUsuario["password"], $tuplaUsuario["rol"], $jugador_id, $jugador_id_liga, $jugador_equipo_id, $tuplaUsuario["id"]);
    $correcto = "Jugador Modificado correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}

// Eliminar Jugador
if (isset($_GET["id_jugador_del"])) {
    $jugador_id = $_GET["id_jugador_del"];
    $condicion = "WHERE id=$jugador_id";
    $jugador->eliminar($condicion);
    $correcto = "Jugador Eliminado correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}

// Enviar Correo Jugador
if(isset($_POST["aux_correo"])){
$correoDestino = $_POST["aux_correo"];
$asunto = $_POST["asunto_correo"];
$cuerpo = nl2br($_POST["cuerpo_correo"]);
$archivo = $_FILES["fichero_correo"];
$nombre_archivo = $archivo['name'];
$ruta_archivo = $archivo['tmp_name'];

$exito = email($correo_config['correo_administrador'], $correo_config['pass_correo'], $correo_config['nombre'],$correoDestino, $correo_config['correo_administrador'],$asunto, $cuerpo, $ruta_archivo, $nombre_archivo);
if($exito == true){
    $correcto = "Correo Enviado Correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}else{
    $error = "Hubo un error al enviar el correo";
    print("<script>document.location.href='index.php?error=$error'</script>");
}

}

require '../../../views/admin/jugadores/index.view.php';
?>