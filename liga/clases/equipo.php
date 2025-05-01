<?php 

include_once("conexion.php");

class equipo{

var $conexion;

function __construct(){
    $this->conexion = new conexion();
}

function insertar($equipo_nombre, $equipo_contacto, $equipo_imagen ,$equipo_liga){
    $consulta = "INSERT INTO equipos(nombre_equipo, equipo_correo, equipo_imagen, id_liga) VALUES('$equipo_nombre', '$equipo_contacto', '$equipo_imagen', $equipo_liga)";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function eliminar($condicion){
    $consulta = "DELETE FROM equipos $condicion";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}


function modificar($equipo_nombre,$equipo_contacto, $equipo_imagen, $equipo_puntos, $equipo_partidos_jugados, $equipo_goles_a_favor, $equipo_goles_en_contra, $equipo_liga, $equipo_id){
    $consulta = "UPDATE equipos SET nombre_equipo='$equipo_nombre', equipo_correo='$equipo_contacto', equipo_imagen='$equipo_imagen', puntos=$equipo_puntos, partidos_jugados=$equipo_partidos_jugados, goles_a_favor=$equipo_goles_a_favor, goles_en_contra=$equipo_goles_en_contra, id_liga=$equipo_liga WHERE id=$equipo_id";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function modificarImagen($equipo_imagen, $equipo_id){
    $consulta = "UPDATE equipos SET equipo_imagen='$equipo_imagen' WHERE id=$equipo_id";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtener(){
    $consulta = "SELECT id, nombre_equipo, equipo_correo, equipo_imagen, puntos, partidos_jugados, goles_a_favor, goles_en_contra, id_liga FROM equipos";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtenerConFiltro($condicion,$order){
    if ($condicion=="" && $order!="") {
        $consulta = "SELECT id, nombre_equipo, equipo_correo, equipo_imagen, puntos, partidos_jugados, goles_a_favor, goles_en_contra, id_liga FROM equipos $order";
    }else{
        if($order=="" && $condicion!=""){
            $consulta = "SELECT id, nombre_equipo, equipo_correo, equipo_imagen, puntos, partidos_jugados, goles_a_favor, goles_en_contra, id_liga FROM equipos $condicion";
        }else {
            if ($order!="" && $condicion!="") {
                $consulta = "SELECT id, nombre_equipo, equipo_correo, equipo_imagen, puntos, partidos_jugados, goles_a_favor, goles_en_contra, id_liga FROM equipos $condicion $order";
            }else{
                if ($order=="" && $condicion=="") {
                    $consulta = "SELECT id, nombre_equipo, equipo_correo, equipo_imagen, puntos, partidos_jugados, goles_a_favor, goles_en_contra, id_liga FROM equipos";
                }
            }
        }
    }
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}
}

function subirImagen($directorio,$id,$ext){
    $nombreDirectorio = "../../build/assets/equipo/img/";
    $idUnico = rand(0,time());
    $nombreFichero = $idUnico . "-". $id . "." . $ext;
    if ($nombreFichero != '') {
        move_uploaded_file ($directorio, $nombreFichero);
    }
    return $nombreFichero;
}

function eliminarImagen($imagen){
    if (trim($imagen)!= "") {
        $imagen2 = "../../build/assets/equipo/img/" . $imagen;
        unlink ($imagen2);
    }
}


?>