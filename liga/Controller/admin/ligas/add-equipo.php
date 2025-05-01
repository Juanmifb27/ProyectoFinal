<?php
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/equipo.php';
include_once '../../../clases/jugador.php';
include_once '../../../clases/usuario.php';
include_once '../../../clases/seguridad.php';
include_once '../../../clases/functions.php';
include_once '../../../clases/header.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}
$conexion = new conexion();
$liga = new liga();
$equipo = new equipo();
$jugador = new jugador();
$usuario = new usuario();

if (isset($_GET["liga_id"])) {
    $liga_id = $_GET["liga_id"];
    $sql = "SELECT * FROM ligas WHERE id=$liga_id";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    if ($tuplaLiga == NULL) {
        print("<script>document.location.href='./index.php'</script>");
    }
    $liga_nombre = $tuplaLiga["nombre_liga"];
}

if (isset($_POST["equipo"])) {
    $error = '';
    if ($_POST["equipo_nombre"] == "" || $_POST["equipo_correo"] == "" || $_POST["equipo_imagen"] == "") {
        $error = "Debes introducir los datos del equipo";
    }else {
        $equipo_nombre = $_POST["equipo_nombre"];
        $equipo_correo = $_POST["equipo_correo"];
        $equipo_imagen = $_POST["equipo_imagen"];
        if (!isset($_POST["nombre_jugadores"]) || !isset($_POST["apellidos_jugadores"]) || !isset($_POST["correos_jugadores"])) {
            $error = "Debes introducir los datos de los jugadores";
        } else {
            $jugadores_nombre = $_POST["nombre_jugadores"];
            $jugadores_apellido = $_POST["apellidos_jugadores"];
            $jugadores_correo = $_POST["correos_jugadores"];
            $jugadores_curso = $_POST["curso"];
            
            if (count($jugadores_nombre) < 5 ||count($jugadores_apellido) < 5 || count($jugadores_correo) < 5) {
                $error = "Debes introducir minimo 5 jugadores para que puedan inscribirse a la liga";
            }else{

                $sql = "SELECT * FROM equipos WHERE nombre_equipo='$equipo_nombre' or equipo_correo='$equipo_correo'";
                $resEquipo = $conexion->BD_Consulta($sql);
                if ($conexion->BD_NumeroFilas($resEquipo)>0) {
                    $error = "Ya existe un equipo con esos datos";
                }else{
                    for ($i=0; $i < count($jugadores_nombre); $i++) { 
                        $sql = "SELECT * FROM jugadores WHERE jugador_nombre='$jugadores_nombre[$i]' or jugador_correo='$jugadores_correo[$i]'";
                        $resJugador = $conexion->BD_Consulta($sql);
                        if ($conexion->BD_NumeroFilas($resJugador) >0) {
                            $error .= "El jugador $jugadores_nombre[$i] con correo $jugadores_correo[$i] ya está registrado en otro equipo de alguna liga";
                        }
                    }
                    if ($error == '') {
                        $equipo->insertar($equipo_nombre, $equipo_correo, $equipo_imagen, $liga_id);
                        
                        $sql = "SELECT * FROM equipos WHERE nombre_equipo='$equipo_nombre'";
                        $resEquipo = $conexion->BD_Consulta($sql);
                        $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
                        $equipo_id = $tuplaEquipo["id"];
                        
                        for ($i=0; $i < count($jugadores_nombre) ; $i++) { 
                            $jugador->insertar("$jugadores_nombre[$i] $jugadores_apellido[$i]", $jugadores_correo[$i], $jugadores_curso[$i], $equipo_id, $liga_id);
                            $sql = "SELECT * FROM jugadores WHERE jugador_nombre='$jugadores_nombre[$i] $jugadores_apellido[$i]'";
                            $resJugador = $conexion->BD_GetTupla($sql);
                            $tuplaJugador = $conexion->BD_GetTupla($resJugador);
                            $jugador_id = $tuplaJugador["id"];
                            $password = explode("@", $jugadores_correo[$i]);
                            $usuario->insertar($jugadores_correo[$i], $password, "Usuario", $jugadores_nombre[$i], $jugador_id, $liga_id, $equipo_id);
                        }
                        $correcto = "Se ha inscrito el equipo correctamente";
                        print("<script>document.location.href='./detalles-liga.php?liga_id=$liga_id&correcto=$correcto'</script>");
                    }
                }
            }
        }
    }
}




require '../../../views/admin/ligas/add-equipo.view.php';
