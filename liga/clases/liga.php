<?php 

include_once("conexion.php");

class liga{

var $conexion;

// Tengo que llamarlo así y no como el nombre de la clase para que se ejecute automaticamente
// al instanciarla
function __construct(){
    $this->conexion = new conexion();
}

function insertar($liga_nombre){
    $consulta = "INSERT INTO ligas(nombre_liga) VALUES('$liga_nombre')";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function eliminar($condicion){
    $consulta = "DELETE FROM ligas $condicion";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function modificar($liga_nombre, $liga_id){
    $consulta = "UPDATE ligas SET nombre_liga='$liga_nombre' where id=$liga_id";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtener(){
    $consulta = "SELECT id, nombre_liga FROM ligas";
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}

function obtenerConFiltro($condicion,$order){
    if ($condicion=="" && $order!="") {
        $consulta = "SELECT id, nombre_liga FROM ligas $order";
    }else{
        if($order=="" && $condicion!=""){
            $consulta = "SELECT id, nombre_liga FROM ligas $condicion";
        }else {
            if ($order!="" && $condicion!="") {
                $consulta = "SELECT id, nombre_liga FROM ligas $condicion $order";
            }else{
                if ($order=="" && $condicion=="") {
                    $consulta = "SELECT id, nombre_liga FROM ligas";
                }
            }
        }
    }
    $res = $this->conexion->BD_Consulta($consulta);
    return $res;
}
}
?>