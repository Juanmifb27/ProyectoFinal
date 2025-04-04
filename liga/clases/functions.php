<?php 
require_once '../admin/config.php';
require_once 'conexion.php';
require_once 'liga.php';
require_once 'equipo.php';
require_once 'emparejamiento.php';


// Funcion para limpiar los datos recibidos 
function limpiarDatos($datos)
{
    // Quita los espacios al inicio y final de la cadena
    $datos = trim($datos);
    // Cambia los / y \ por '
    $datos = stripslashes($datos);
    // Convierte los caracteres especiales de html como <b></b> en entidades HTMl para que preserve su valor y no inyecte codigo
    $datos = htmlspecialchars($datos);
    return $datos;
}

function generarEmparejamientos($liga_id)
    {
        $conexion = new conexion();


        // Obtener los equipos de la liga
        $sql = "SELECT id, nombre_equipo FROM equipos WHERE id_liga = $liga_id";
        $equipos = $conexion->BD_Consulta($sql);


        // Verifica si la consulta devolvió resultados
        if (!$equipos) {
            echo "Error en la consulta de equipos.<br>";
            return;
        }

        $equiposArray = [];
        while ($equipo = $equipos->fetch_assoc()) {
            $equiposArray[] = $equipo;
        }

        if (count($equiposArray) == 0) {
            echo "No se encontraron equipos en la liga con ID $liga_id.<br>";
            return;
        }

        $totalEquipos = count($equiposArray);
        $totalJornadas = $totalEquipos - 1;

        // Si es impar, asignar descanso rotativo
        if ($totalEquipos % 2 != 0) {
            asignarDescansoRotativo($equiposArray, $totalJornadas, $liga_id);
        } else {
            // Si es par, generar los emparejamientos normalmente
            generarPartidos($equiposArray, $totalJornadas, $liga_id);
        }
    }

 // Método para asignar descanso rotativo cuando hay un número impar de equipos
function asignarDescansoRotativo($equipos, $totalJornadas, $liga_id)
 {
    $emparejamiento = new emparejamiento();
     $totalEquipos = count($equipos);

     // Para cada jornada, uno de los equipos descansará
     for ($jornada = 1; $jornada <= $totalJornadas; $jornada++) {
         $partidos = [];
         $descansoEquipo = $equipos[($jornada - 1) % $totalEquipos]; // El equipo que descansará en esta jornada

         echo "El equipo '{$descansoEquipo['nombre_equipo']}' descansará esta jornada.<br>";

         // Generar los emparejamientos de la jornada, excluyendo el equipo que descansa
         $equiposConDescanso = array_filter($equipos, function ($equipo) use ($descansoEquipo) {
             return $equipo['id'] != $descansoEquipo['id'];
         });

         foreach ($equiposConDescanso as $equipo) {
           $equiposConDescansoFinal[] = $equipo;
         }


         // Generar los emparejamientos para la jornada

         $partidos = generarPartidosJornada($equiposConDescansoFinal);

         // Insertar los emparejamientos en la base de datos
         foreach ($partidos as $partido) {
             $res = $emparejamiento->insertar(
                 $jornada,
                 $liga_id,
                 $partido['id_local'],
                 "", // Goles locales aún no se conocen
                 $partido['id_visitante'],
                 "", // Goles visitantes aún no se conocen
                 date('Y-m-d H:i:s'), // Fecha del partido
                 "" // Resultado aún no disponible
             );

            var_dump($res);
             echo "Emparejamiento: {$partido['id_local']} vs {$partido['id_visitante']}<br>";
         }
     }
 }

 // Método auxiliar para generar los partidos de una jornada
function generarPartidosJornada($equipos)
 {
     $partidos = [];
     $equiposCount = count($equipos);

     // Generar los emparejamientos (parejas de equipos)
     for ($i = 1; $i < $equiposCount; $i++) {
         for ($j = $i + 1; $j < $equiposCount; $j++) {
             $partidos[] = [
                 'id_local' => $equipos[$i]['id'],
                 'id_visitante' => $equipos[$j]['id']
             ];
         }
     }

     // Mezclar los partidos y retornar para la jornada
     shuffle($partidos);
     return $partidos;
 }

 // Método para generar los emparejamientos cuando el número de equipos es par
function generarPartidos($equipos, $totalJornadas, $liga_id)
 {
    $emparejamiento = new emparejamiento();
     // Generar emparejamientos para todas las jornadas
     for ($jornada = 1; $jornada <= $totalJornadas; $jornada++) {
         $partidos = generarPartidosJornada($equipos);

         // Insertar los emparejamientos en la base de datos
         foreach ($partidos as $partido) {
             $res =$emparejamiento->insertar(
                 $jornada,
                 $liga_id,
                 $partido['id_local'],
                 NULL, // Goles locales aún no se conocen
                 $partido['id_visitante'],
                 NULL, // Goles visitantes aún no se conocen
                 date('Y-m-d H:i:s'), // Fecha del partido
                 NULL // Resultado aún no disponible
             );
             echo "Emparejamiento: {$partido['id_local']} vs {$partido['id_visitante']}<br>";
         }
     }
 }
?>