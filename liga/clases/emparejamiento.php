<?php

include_once("conexion.php");

class emparejamiento
{

    var $conexion;


    function __construct()
    {
        $this->conexion = new conexion();
    }

    // FAlta rellenar los values de la consulta con las variables
    function insertar($jornada, $liga_id, $id_local, $goles_local, $id_visitante, $goles_visitante, $fecha_partido, $resultado)
    {
        $consulta = "INSERT INTO emparejamientos(jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado) VALUES ($jornada, $liga_id, $id_local, $goles_local, $id_visitante, $goles_visitante, '$fecha_partido', $resultado )";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function eliminar($condicion)
    {
        $consulta = "DELETE FROM emparejamientos $condicion";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function obtener()
    {
        $consulta = "SELECT id, jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado FROM emparejamientos";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function obtenerConFiltro($condicion, $order)
    {
        if ($condicion == "" && $order != "") {
            $consulta = "SELECT id, jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado FROM emparejamientos $order";
        } else {
            if ($order == "" && $condicion != "") {
                $consulta = "SELECT id, jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado FROM emparejamientos $condicion";
            } else {
                if ($order != "" && $condicion != "") {
                    $consulta = "SELECT id, jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado FROM emparejamientos $condicion $order";
                } else {
                    if ($order == "" && $condicion == "") {
                        $consulta = "SELECT id, jornada, liga_id, id_local, goles_local, id_visitante, goles_visitante, fecha_partido, resultado FROM emparejamientos";
                    }
                }
            }
        }
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }
}
