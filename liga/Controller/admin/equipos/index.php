<?php 
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/equipo.php';
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


// Eliminar Equipo
if (isset($_GET["id_equipo_del"])) {
    $equipo_id = $_GET["id_equipo_del"];
    $sqlImagen = "SELECT equipo_imagen FROM equipos where id=$equipo_id";
    $resImagen = $conexion->BD_Consulta($sqlImagen);
    $tuplaImagen = $conexion->BD_GetTupla($resImagen);
    if($tuplaImagen["equipo_imagen"] != "default.png"){
        $dir = __DIR__;
        $rutaImagen = $dir . "/../../../build/assets/img/equipos/" . $tuplaImagen["equipo_imagen"];
        unlink($rutaImagen); 
    }
    $condicion = "WHERE id=$equipo_id";
    $equipo->eliminar($condicion);
    $correcto = "Equipo Eliminado correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}

// Enviar Correo Equipo
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

require '../../../views/admin/equipos/index.view.php';
?>