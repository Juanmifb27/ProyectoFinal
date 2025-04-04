<?php 
session_start();
include_once 'config.php';
// conseguido leer el array de los jugadores, esto iría en la
// parte de inscripción del equipo.
var_dump(unserialize($_GET['jugadores']))
?>