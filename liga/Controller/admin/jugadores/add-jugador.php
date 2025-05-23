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

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once '../../../clases/email.php';

$conexion = new conexion();
$liga = new liga();
$equipo = new equipo();
$jugador = new jugador();
$usuario = new usuario();
$error = "";

$nombre_equipo = "";
$correo_equipo = "";
$liga_id = 0;

// Añadir Jugador
if(isset($_POST["jugador"])){
    $jugador_nombre = $_POST["jugador_nombre"];
    $jugador_correo = $_POST["jugador_correo"]; 
    $jugador_curso = $_POST["jugador_curso"];
    $jugador_equipo = $_POST["jugador_equipo"];
    $sqlLiga = "SELECT * from equipos where id = $jugador_equipo";
    $resLiga = $conexion->BD_Consulta($sqlLiga);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    $jugador_liga = $tuplaLiga["id_liga"];
    $jugador_pass = CreacionClave();

    $sqlComprobacion = "SELECT * FROM usuarios where email = '$jugador_correo'";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
    if ($conexion->BD_NumeroFilas($resComprobacion) >0) {
        $error = "El jugador con correo $jugador_correo ya está registrado";
    }

    if ($error == ""){
        $jugador->insertar($jugador_nombre, $jugador_correo, $jugador_curso, $jugador_equipo, $jugador_liga);
        $sql = "SELECT * FROM jugadores WHERE jugador_correo='$jugador_correo'";
        $resJugador = $conexion->BD_Consulta($sql);
        $tuplaJugador = $conexion->BD_GetTupla($resJugador);
        $jugador_id = $tuplaJugador["id"];
        $usuario->insertar($jugador_correo, $jugador_pass, "Usuario", $jugador_id, $jugador_liga, $jugador_equipo);
        $correcto = "Se ha inscrito el jugador correctamente";

        $asunto = "Confirmación Inscripción Liga Ruiz Gijon";

        $sqlLigaNombre = "SELECT * from ligas WHERE id=$jugador_liga";
        $resLigaNombre = $conexion->BD_Consulta($sqlLigaNombre);
        $tuplaLigaNombre = $conexion->BD_GetTupla($resLigaNombre);

        $cuerpo = "<h1>Inscripción Liga Ruiz Gijón</h1>
        <h2> $jugador_nombre has sido inscrito correctamente al equipo: " . $tuplaLiga["nombre_equipo"] . "<h2>
        <h3>FELICIDADES te has inscrito correctamente a la liga " . $tuplaLigaNombre['nombre_liga'] ."<h3>
        <br>
        <h4>Estas son tus credenciales de inicio de sesión en la <a href='http://juanmanueljmfb.free.nf/Controller/index.php'>WEB</a>:</h4>
        <br>
        <table border='0'>
        <tr>
        <th>Usuario:</th>
        <td>$jugador_correo</td>
        </tr>
        <tr>
        <th>Contraseña:</th>
        <td>$jugador_pass</td>
        </tr>
        </table>";

        $exito = email($correo_config['correo_administrador'], $correo_config['pass_correo'], $correo_config['nombre'], $jugador_correo, $correo_config['correo_administrador'], $asunto, $cuerpo);
        print("<script>document.location.href='./add-jugador.php?&correcto=$correcto'</script>");
    }
}

require '../../../views/admin/jugadores/add-jugador.view.php';