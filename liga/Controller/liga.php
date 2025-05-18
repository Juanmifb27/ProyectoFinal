<?php
session_start();
include_once 'admin/config.php';
include_once '../clases/conexion.php';
include_once '../clases/liga.php';
include_once '../clases/emparejamiento.php';
include_once '../clases/equipo.php';
include_once '../clases/fechas.php';
include_once '../clases/seguridad.php';
include_once '../clases/header.php';

$vectorUsuario = Seguridad();

$conexion = new conexion();
$liga = new liga();
$equipos_connect = new equipo();
$emparejamiento_connect = new emparejamiento();
    $equipo_id = "";
    $equipo_nombre="";

if(isset($vectorUsuario)){

if($vectorUsuario["rol"] == "Usuario"){
    $equipo_id = $vectorUsuario["id_equipo"];
    
    $sql = "select nombre_equipo from equipos where id=$equipo_id";
    $resNombre = $conexion->BD_Consulta($sql);
    $tuplaNombre = $conexion->BD_GetTupla($resNombre);
    $equipo_nombre = $tuplaNombre["nombre_equipo"];
}else{
    $equipo_id = "";
    $equipo_nombre="";
}
}
$liga_nombre = "";
if (isset($_GET['liga'])) {
    $liga_nombre = $_GET['liga'];
}



$grupos = ["A", "B", "C", "D", "E", "F"];

$errores = "";


if ($liga_nombre != ""){

$condicion = "WHERE nombre_liga LIKE '%$liga_nombre%'";
$resultado_liga = $liga->obtenerConFiltro($condicion, "");

$tabs_liga = $liga->obtenerConFiltro($condicion, "");

if ($resultado_liga != NULL) {
    if ($resultado_liga->num_rows > 0) {
        $tuplaLiga = $conexion->BD_GetTupla($resultado_liga);
        while ($tuplaLiga != NULL) {
            $liga_seleccionada[] = $tuplaLiga;
            $tuplaLiga = $conexion->BD_GetTupla($resultado_liga);
        }

        for ($i = 0; $i < count($liga_seleccionada); $i++) {
            $condicion = "WHERE id_liga = " . $liga_seleccionada[$i]["id"] . "";
            $orden = "ORDER BY id_liga, puntos DESC";
            $resultado_equipos = $equipos_connect->obtenerConFiltro($condicion, $orden);

            if ($resultado_equipos != NULL) {
                if ($resultado_equipos->num_rows > 0) {
                    $tuplaEquipo = $conexion->BD_GetTupla($resultado_equipos);
                    while (!empty($tuplaEquipo)) {
                        $equipos_liga[] = $tuplaEquipo;
                        $tuplaEquipo = $conexion->BD_GetTupla($resultado_equipos);
                    }
                }
            }
            $condicion = "WHERE liga_id = ".$liga_seleccionada[$i]["id"]."";
            $orden = "ORDER BY liga_id, jornada, fecha_partido";
            $resultado_emparejamiento = $emparejamiento_connect->obtenerConFiltro($condicion, $orden);
            if ($resultado_emparejamiento != NULL) {
            if ($resultado_emparejamiento->num_rows>0) {
                $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                while (!empty($tuplaEmparejamiento)){
                    $emparejamientos_temp[] = $tuplaEmparejamiento;
                    $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                }
            }
            }
        }

        if (isset($emparejamientos_temp) && $emparejamientos_temp != NULL) {
            for ($i=0; $i < count($emparejamientos_temp); $i++) { 
                $condicion = "WHERE id = ". $emparejamientos_temp[$i]["id_local"] ." or id = ". $emparejamientos_temp[$i]["id_visitante"]."";
                $resultado_emparejamiento = $equipos_connect->obtenerConFiltro($condicion,"");
                if($resultado_emparejamiento != NULL){
                    if ($resultado_emparejamiento->num_rows>1) {
                        $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                        $emparejamientos[$i] = [
                            "id" => $emparejamientos_temp[$i]["id"],
                            "jornada" => $emparejamientos_temp[$i]["jornada"],
                            "liga_id" => $emparejamientos_temp[$i]["liga_id"],
                            "id_local" => $tuplaEmparejamiento["id"],
                            "equipo_imagen_local" => $tuplaEmparejamiento["equipo_imagen"],
                            "nombre_local" => $tuplaEmparejamiento["nombre_equipo"],
                            "goles_local" => $emparejamientos_temp[$i]["goles_local"]
                        ];
                        $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                        $emparejamientos[$i] +=[
                            "id_visitante" => $tuplaEmparejamiento["id"],
                            "equipo_imagen_visitante" => $tuplaEmparejamiento["equipo_imagen"],
                            "nombre_visitante" => $tuplaEmparejamiento["nombre_equipo"],
                            "goles_visitante" => $emparejamientos_temp[$i]["goles_visitante"],
                            "fecha_partido" => $emparejamientos_temp[$i]["fecha_partido"],
                            "resultado" => $emparejamientos_temp[$i]["resultado"]
                        ];
                    }else{
                        $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                        $emparejamientos[$i] = [
                            "id" => $emparejamientos_temp[$i]["id"],
                            "jornada" => $emparejamientos_temp[$i]["jornada"],
                            "liga_id" => $emparejamientos_temp[$i]["liga_id"],
                            "id_local" => $tuplaEmparejamiento["id"],
                            "equipo_imagen_local" => $tuplaEmparejamiento["equipo_imagen"],
                            "nombre_local"=>$tuplaEmparejamiento["nombre_equipo"],
                            "goles_local"=>$emparejamientos_temp[$i]["goles_local"],
                            "id_visitante"=>$tuplaEmparejamiento["id"],
                            "nombre_visitante"=>$tuplaEmparejamiento["nombre_equipo"],
                            "fecha_partido" => $emparejamientos_temp[$i]["fecha_partido"],
                            "resultado" => $emparejamientos_temp[$i]["resultado"]
                        ];
                    }
                }
            }
            $partidos_jornadas = 1;
            $i=0;
            while($emparejamientos[$i]["jornada"] == $emparejamientos[($i+1)]["jornada"]){
                $partidos_jornadas++;
                $i++;
            }
        }
    }
}

require '../views/liga.view.php';
}
?>