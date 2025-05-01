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

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty([$_GET['liga']])) {
    $liga_nombre = $_GET['liga'];
} else {
    header("Location: index.php");
}

$conexion = new conexion();
$liga = new liga();
$equipos_connect = new equipo();
$emparejamiento_connect = new emparejamiento();

$grupos = ["A", "B", "C", "D", "E", "F"];

$errores = "";

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
                            "nombre_local" => $tuplaEmparejamiento["nombre_equipo"],
                            "goles_local" => $emparejamientos_temp[$i]["goles_local"]
                        ];
                        $tuplaEmparejamiento = $conexion->BD_GetTupla($resultado_emparejamiento);
                        $emparejamientos[$i] +=[
                            "id_visitante" => $tuplaEmparejamiento["id"],
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

// Crear Emparejamientos IMPORTANTE

// $condicion = "Where id_liga = " . $liga_seleccionada[0]["id"] . "";

// $N = count($equipos_liga); //ATENCIÓN!! "N" DEBE SER PAR! (2,4,8,12,20,...)

// if ($N % 2 == 0) {
//     echo "Es par el número de equipos<br>";
// } else {
//     echo "El numero de equipos es impar<br>";
//     $N = $N + 1; // sumamos 1 al numero impar de equipos. A este equipo en un futuro lo podemos llamar descanso
// }
// //crea los grupos
// for ($i = 0; $i < (($N - 1) / 2); $i++) {
//     //   g1.push([$i]);
//     $g1[$i] = $equipos_liga[$i];
//     //
//     //   g2.push([i]);
//     if (@$equipos_liga[($N - $i - 1)] == NULL) {
//         $g2[$i] = ["id" => 0, "nombre_equipo" => "Descansa"];
//     } else {
//         $g2[$i] = $equipos_liga[($N - $i - 1)];
//     }
// }
// //hace girar los grupos para el siguiente round
// echo $liga_seleccionada[0]["nombre_liga"] . "<br>";
// echo $N;
// "<br>";



// for ($j = 0; $j < $N - 1; $j++) { //j son los rounds

//     //anuncia los grupos
//     echo "<table><tr><td><b>Jornada " . ($j + 1) . "</b></td></tr> ";
//     echo "<tr><td>";
//     $conta = 0;
//     foreach ($g1 as $equipo1) {

//         echo "Valor actual de EQUIPO1: " . $equipo1["nombre_equipo"] . "<BR>";
//         echo "Valor actual de EQUIPO2: " . $g2[$conta]["nombre_equipo"] . "<BR>";

//         // crear registro de la jornada

//         // $res=$emparejamiento_connect->insertar($j+1, $liga_seleccionada[0]["id"], $equipo1["id"], $g2[$conta]["id"], "");

//         if ($equipo1["id"]==0) {
//             $res=$emparejamiento_connect->insertar($j+1, $liga_seleccionada[0]["id"], $g2[$conta]["id"], $g2[$conta]["id"], "");
//             // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $g2[$conta]["id"] . "," . $g2[$conta]["id"] . ")";
//         }elseif ($g2[$conta]["id"] == 0) {
//             $res=$emparejamiento_connect->insertar($j+1, $liga_seleccionada[0]["id"], $equipo1["id"], $equipo1["id"], "");
//             // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $equipo1["id"] . "," . $equipo1["id"] . ")";
//         }else{
//             $res=$emparejamiento_connect->insertar($j+1, $liga_seleccionada[0]["id"], $equipo1["id"], $g2[$conta]["id"], "");
//             // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $equipo1["id"] . "," . $g2[$conta]["id"] . ")";
//         }

//         //-----------
//         $conta = $conta + 1;
//         echo "<br><br><br>";
//     }
//     echo "</td></tr><tr><td>";
//     echo "</td></tr>";
//     // Calculamos la siguiente jornada
//     $temp1 = $g2[0];
//     $temp2 = $g1[($N / 2) - 1];

//     for ($k = 0; $k < $N / 2; $k++) {
//         if ($k == ($N / 2) - 1) {
//             $g1[1] = $temp1;
//             $g2[($N / 2) - 1] = $temp2;
//         } else {
//             $g1[($N / 2) - 1 - $k] = $g1[($N / 2) - 1 - $k - 1];
//             $g2[$k] = $g2[$k + 1];
//         }
//     } //-------------------
//     echo "</table>";
// }

require '../views/liga.view.php';
