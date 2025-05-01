<?php

include_once("conexion.php");
include_once("equipo.php");

class emparejamiento
{

    var $conexion;
    var $equipo;


    function __construct()
    {
        $this->conexion = new conexion();
        $this->equipo = new equipo();
    }

    // FAlta rellenar los values de la consulta con las variables
    function insertar($jornada, $liga_id, $id_local, $id_visitante, $fecha_partido)
    {
        $consulta = "INSERT INTO emparejamientos(jornada, liga_id, id_local, id_visitante, fecha_partido) VALUES ($jornada, $liga_id, $id_local, $id_visitante, '$fecha_partido')";
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
    function generarEmparejamientos($liga_id, $liga_nombre)
    {
        
        // Crear Emparejamientos IMPORTANTE

        $condicion = "Where id_liga = " . $liga_id . "";
        $resultado_equipos = $this->equipo->obtenerConFiltro($condicion, "");
        if ($resultado_equipos != NULL) {
            if ($resultado_equipos->num_rows > 0) {
                $tuplaEquipo = $this->conexion->BD_GetTupla($resultado_equipos);
                while (!empty($tuplaEquipo)) {
                    $equipos_liga[] = $tuplaEquipo;
                    $tuplaEquipo = $this->conexion->BD_GetTupla($resultado_equipos);
                }
            }
        }
        $N = count($equipos_liga); //ATENCIÓN!! "N" DEBE SER PAR! (2,4,8,12,20,...)

        if ($N % 2 == 0) {
            echo "Es par el número de equipos<br>";
        } else {
            echo "El numero de equipos es impar<br>";
            $N = $N + 1; // sumamos 1 al numero impar de equipos. A este equipo en un futuro lo podemos llamar descanso
        }
        //crea los grupos
        for ($i = 0; $i < (($N - 1) / 2); $i++) {
            //   g1.push([$i]);
            $g1[$i] = $equipos_liga[$i];
            //
            //   g2.push([i]);
            if (@$equipos_liga[($N - $i - 1)] == NULL) {
                $g2[$i] = ["id" => 0, "nombre_equipo" => "Descansa"];
            } else {
                $g2[$i] = $equipos_liga[($N - $i - 1)];
            }
        }
        //hace girar los grupos para el siguiente round
        echo $liga_nombre . "<br>";
        echo $N;
        "<br>";



        for ($j = 0; $j < $N - 1; $j++) { //j son los rounds

            //anuncia los grupos
            echo "<table><tr><td><b>Jornada " . ($j + 1) . "</b></td></tr> ";
            echo "<tr><td>";
            $conta = 0;
            foreach ($g1 as $equipo1) {

                echo "Valor actual de EQUIPO1: " . $equipo1["nombre_equipo"] . "<BR>";
                echo "Valor actual de EQUIPO2: " . $g2[$conta]["nombre_equipo"] . "<BR>";

                // crear registro de la jornada

                // $res=$emparejamiento_connect->insertar($j+1, $liga_seleccionada[0]["id"], $equipo1["id"], $g2[$conta]["id"], "");

                if ($equipo1["id"] == 0) {
                    $res = $this->insertar($j + 1, $liga_id, $g2[$conta]["id"], $g2[$conta]["id"], "");
                    // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $g2[$conta]["id"] . "," . $g2[$conta]["id"] . ")";
                } elseif ($g2[$conta]["id"] == 0) {
                    $res = $this->insertar($j + 1, $liga_id, $equipo1["id"], $equipo1["id"], "");
                    // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $equipo1["id"] . "," . $equipo1["id"] . ")";
                } else {
                    $res = $this->insertar($j + 1, $liga_id, $equipo1["id"], $g2[$conta]["id"], "");
                    // echo "INSERT INTO emparejamientos (id, jornada, liga_id, id_local, id_visitante) VALUES ('', " . ($j + 1) . " ," . $liga_seleccionada[0]["id"] . "," . $equipo1["id"] . "," . $g2[$conta]["id"] . ")";
                }

                //-----------
                $conta = $conta + 1;
                echo "<br><br><br>";
            }
            echo "</td></tr><tr><td>";
            echo "</td></tr>";
            // Calculamos la siguiente jornada
            $temp1 = $g2[0];
            $temp2 = $g1[($N / 2) - 1];

            for ($k = 0; $k < $N / 2; $k++) {
                if ($k == ($N / 2) - 1) {
                    $g1[1] = $temp1;
                    $g2[($N / 2) - 1] = $temp2;
                } else {
                    $g1[($N / 2) - 1 - $k] = $g1[($N / 2) - 1 - $k - 1];
                    $g2[$k] = $g2[$k + 1];
                }
            } //-------------------
            echo "</table>";
        }
    }
}
