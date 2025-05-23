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
$error = "";

// Añadir Usuario
if(isset($_POST["aux_Usuario"])){
    $usu_email = $_POST["usuario_email"];
    $usu_password = $_POST["usuario_password"];
    $usu_rol = $_POST["usuario_rol"];

    $sqlComprobacion = "SELECT * FROM usuarios where email='$usu_email'";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
    if($conexion->BD_NumeroFilas($resComprobacion) > 0){
        $error = "Ya existe un usuario con ese correo";
    }
    if($error == ""){
    if(isset($_POST["usuario_curso"]) && isset($_POST["usuario_equipo"]) && isset($_POST["usuario_nombre"])){
        $usuario_curso = $_POST["usuario_curso"];
        $usuario_equipo = $_POST["usuario_equipo"];
        $usuario_nombre = $_POST["usuario_nombre"];
        $sqlEquipo = "SELECT * FROM equipos WHERE id=$usuario_equipo";
        $resEquipo = $conexion->BD_Consulta($sqlEquipo);
        $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
        $usuario_liga = $tuplaEquipo["id_liga"];
        $jugador->insertar($usuario_nombre, $usu_email, $usuario_curso, $usuario_equipo, $usuario_liga);

        $sqlJugador = "SELECT * FROM jugadores where jugador_correo='$usu_email'";
        $resJugador = $conexion->BD_Consulta($sqlJugador);
        $tuplaJugador = $conexion->BD_GetTupla($resJugador);
        $usuario_jugador = $tuplaJugador["id"];


        $usuario->insertar($usu_email, $usu_password, $usu_rol, $usuario_jugador, $usuario_liga, $usuario_equipo);
    }else{
    $usuario->insertar($usu_email, $usu_password, $usu_rol, 'NULL', 'NULL', 'NULL');
    }

    $correcto = "Usuario Añadido correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
    }else{
    print("<script>document.location.href='index.php?error=$error'</script>");
    }
}

// Modificar Usuario
if(isset($_POST["aux_modUsuario"])){
    $usu_id_mod = $_POST["aux_modUsuario"];
    $usu_id_jugador_mod = $_POST["aux_modUsuario_jugador"];
    $usu_id_equipo_mod = $_POST["aux_modUsuario_equipo"];
    $usu_id_liga_mod = $_POST["aux_modUsuario_liga"];
    $usu_rol_mod = $_POST["aux_modUsuario_rol"];

    if($usu_id_jugador_mod == ""){
        $usu_id_jugador_mod = "NULL";
    }
    if($usu_id_equipo_mod == ""){
        $usu_id_equipo_mod = "NULL";
    }
    if($usu_id_liga_mod == ""){
        $usu_id_liga_mod = "NULL";
    }

    $usu_email_mod = $_POST["email_mod"];
    $usu_password_mod = $_POST["pass_mod"];

    $sqlComprobacion = "SELECT * FROM usuarios where email='$usu_email_mod' and id!=$usu_id_mod";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
        if($conexion->BD_NumeroFilas($resComprobacion) > 0){
        $error = "Ya existe un usuario con ese correo";
    }

    if($error == ""){
        $usuario->modificar($usu_email_mod, $usu_password_mod, $usu_rol_mod, $usu_id_jugador_mod, $usu_id_equipo_mod, $usu_id_liga_mod, $usu_id_mod);
        $correcto = "Usuario modificado correctamente";
        print("<script>document.location.href='index.php?correcto=$correcto'</script>");
    }else{
        print("<script>document.location.href='index.php?error=$error'</script>");
    }
}

// Eliminar Usuario
if(isset($_GET["id_usuario_del"])){
    $usuario_id_del = $_GET["id_usuario_del"];

    $sqlComprobacion = "SELECT * FROM usuarios where id=$usuario_id_del";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
    $tuplaComprobacion = $conexion->BD_GetTupla($resComprobacion);

    $usuario->eliminar("WHERE id=$usuario_id_del");

    if($tuplaComprobacion["id_jugador"] != NULL){
        $jugador->eliminar("WHERE id=$tuplaComprobacion[id_jugador]");
    }
    $correcto = "Usuario Eliminado Correctamente";
    // print("<script>document.location.href='index.php?correcto=$correcto'</script>");
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

require '../../../views/admin/usuarios/index.view.php';
?>