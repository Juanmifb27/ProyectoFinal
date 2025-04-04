<?php 
require 'admin/config.php';
require 'clases/conexion.php';
require 'clases/liga.php';
require 'clases/equipo.php';
require 'clases/emparejamiento.php';
require 'clases/functions.php';
require_once 'clases/header.php';

$conexion = new conexion();
$emparejamiento = new emparejamiento();
$equipo = new equipo();



generarEmparejamientos(1);
// $res = $emparejamiento->obtenerConFiltro("","");
// $res = $emparejamiento->obtener();

// $bd=mysqli_connect('localhost', 'root', '', 'ligarg_' );
// $sql = "SELECT id, nombre_equipo FROM equipos WHERE id_liga = 1";

// $resultado=FALSE;
// $i=0;

// while(!$resultado && $i<3 && $bd){
//     $resultado=mysqli_query($bd, $sql);
//     $i++;
// }

// if ($resultado) {

// }else{
//    $resultado=NULL;
// }
// var_dump($res);

// $emparejamiento->generarEmparejamientos(1);


?>