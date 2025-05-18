<?php 
require_once 'conexion.php';
require_once 'liga.php';
require_once 'equipo.php';
require_once 'emparejamiento.php';


// Funcion para limpiar los datos recibidos 
function limpiarDatos($datos)
{
    // Quita los espacios al inicio y final de la cadena
    $datos = trim($datos);
    // Cambia los / y \ por '
    $datos = stripslashes($datos);
    // Convierte los caracteres especiales de html como <b></b> en entidades HTMl para que preserve su valor y no inyecte codigo
    $datos = htmlspecialchars($datos);
    return $datos;
}
?>