<?php 
session_start();
include_once 'config.php';
include_once '../../clases/conexion.php';
include_once '../../clases/seguridad.php';

if(!comprobarSesionIniciadaAdministrador()) {
    header('Location: ../login.php');
    exit();
}


// conseguido leer el array de los jugadores, esto iría en la
// parte de inscripción del equipo.
// var_dump(unserialize($_GET['jugadores']));

require '../../views/admin/index.view.php';
?>