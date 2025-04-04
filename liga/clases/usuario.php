<?php

include_once 'conexion.php';

class usuario
{

    var $conexion;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    function insertar($usuario, $password, $rol, $nombre, $apellidos, $email, $id_liga, $id_equipo)
    {
        $consulta = "INSERT INTO usuarios(usuario,password,rol,nombre,apellidos,email,id_liga,id_equipo) VALUES('$usuario','$password','$rol','$nombre','$apellidos','$email','$id_liga','$id_equipo')";
        $res = $this->conexion->BD_Consulta($consulta);
        return $res;
    }

}
