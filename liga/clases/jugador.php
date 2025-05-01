<?php 

include_once("conexion.php");

class jugador{

var $conexion;

// Tengo que llamarlo así y no como el nombre de la clase para que se ejecute automaticamente
// al instanciarla
function __construct(){
    $this->conexion = new conexion();
}

function insertar($jugador_nombre, $jugador_correo, $jugador_curso, $jugador_equipo, $jugador_liga){
    $consulta = "INSERT INTO jugadores(jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga ) VALUES('$jugador_nombre', '$jugador_correo', '$jugador_curso', $jugador_equipo, $jugador_liga)";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function eliminar($condicion){
    $consulta = "DELETE FROM jugadores $condicion";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function modificar($jugador_nombre, $jugador_correo, $jugador_curso, $jugador_equipo, $jugador_liga, $jugador_id){
    $consulta = "UPDATE jugadores SET jugador_nombre='$jugador_nombre', jugador_correo='$jugador_correo', jugador_curso='$jugador_curso', id_equipo=$jugador_equipo, id_liga=$jugador_liga where id=$jugador_id";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtener(){
    $consulta = "SELECT id, jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga FROM jugadores";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtenerConFiltro($condicion,$order){
    if ($condicion=="" && $order!="") {
        $consulta = "SELECT id, jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga FROM jugadores $order";
    }else{
        if($order=="" && $condicion!=""){
            $consulta = "SELECT id, jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga FROM jugadores $condicion";
        }else {
            if ($order!="" && $condicion!="") {
                $consulta = "SELECT id, jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga FROM jugadores $condicion $order";
            }else{
                if ($order=="" && $condicion=="") {
                    $consulta = "SELECT id, jugador_nombre, jugador_correo, jugador_curso, id_equipo, id_liga FROM jugadores";
                }
            }
        }
    }
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}
}
?>