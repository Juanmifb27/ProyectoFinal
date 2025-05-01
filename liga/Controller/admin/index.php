<?php 
session_start();
include_once 'config.php';
include_once '../../clases/conexion.php';
include_once '../../clases/liga.php';
include_once '../../clases/seguridad.php';
include_once '../../clases/functions.php';
include_once '../../clases/header.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../index.php");
}

$conexion = new conexion();
$liga = new liga();

// conseguido leer el array de los jugadores, esto iría en la
// parte de inscripción del equipo (Para verificar la inscripcion desde el correo).
// var_dump(unserialize($_GET['jugadores']));

require '../../views/admin/index.view.php';
?>