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

require '../../views/admin/index.view.php';
?>