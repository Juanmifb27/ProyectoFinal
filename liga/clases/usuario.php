<?php

include_once 'conexion.php';

class usuario
{

    var $conexion;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    function insertar($email, $password, $rol, $id_jugador, $id_liga, $id_equipo)
    {
        $consulta = "INSERT INTO usuarios(email,password,rol,id_jugador,id_equipo,id_liga) VALUES('$email','$password','$rol',$id_jugador,$id_equipo,$id_liga)";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function eliminar($condicion)
    {
        $consulta = "DELETE FROM usuarios $condicion";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function modificar($email, $password, $rol, $id_jugador, $id_liga, $id_equipo, $id)
    {
        $consulta = "UPDATE usuarios SET email='$email', password='$password', rol='$rol', id_jugador=$id_jugador, id_liga=$id_liga,id_equipo=$id_equipo WHERE id=$id";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }
    function obtener()
    {
        $consulta = "SELECT password, rol, apellidos, email, id_liga, id_equipo FROM usuarios";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

    function obtenerConFiltro($condicion, $order)
    {
        if ($condicion == "" && $order != "") {
            $consulta = "SELECT password, rol, apellidos, email, id_liga, id_equipo FROM usuarios $order";
        } else {
            if ($order == "" && $condicion != "") {
                $consulta = "SELECT password, rol, apellidos, email, id_liga, id_equipo FROM usuarios $condicion";
            } else {
                if ($order != "" && $condicion != "") {
                    $consulta = "SELECT password, rol, apellidos, email, id_liga, id_equipo FROM usuarios $condicion $order";
                } else {
                    if ($order == "" && $condicion == "") {
                        $consulta = "SELECT password, rol, apellidos, email, id_liga, id_equipo FROM usuarios";
                    }
                }
            }
        }
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }
}
