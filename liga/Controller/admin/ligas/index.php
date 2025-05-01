<?php 
session_start();
include_once '../config.php';
include_once '../../../clases/conexion.php';
include_once '../../../clases/liga.php';
include_once '../../../clases/seguridad.php';
include_once '../../../clases/functions.php';
include_once '../../../clases/header.php';

$vectorUsuario = comprobarSesionIniciadaAdministrador();
if (!$vectorUsuario) {
    header("Location: ../../index.php");
}

$conexion = new conexion();
$liga = new liga();

if (isset($_POST["nombre_liga"])) {
    $nombre_liga_add = $_POST["nombre_liga"];
    $sqlLiga = "SELECT * FROM ligas WHERE nombre_liga = '$nombre_liga_add'";
    $resLiga = $conexion->BD_Consulta($sqlLiga);
    $numLigas = $conexion->BD_NumeroFilas($resLiga);
    if ($numLigas == 0) {
        $liga->insertar($nombre_liga_add);
    }else {
        if (isset($_POST["grupo_liga"]) && $_POST["grupo_liga"] != "") {
            $grupo_liga_add = $_POST["grupo_liga"];
            $sqlLiga = "SELECT * FROM ligas WHERE nombre_liga = '$nombre_liga_add Grupo $grupo_liga_add'";
            $resLiga = $conexion->BD_Consulta($sqlLiga);
            $numLigas = $conexion->BD_NumeroFilas($resLiga);
            if ($numLigas == 0) {
                $liga->insertar("$nombre_liga_add Grupo $grupo_liga_add");
            }else{
                $error = "La Liga '$nombre_liga_add' con el grupo '$grupo_liga_add' ya existe prueba con otro grupo";
                print("<script>document.location.href='index.php?error=$error'</script>");
            }
        }else{
            $error = "La Liga '$nombre_liga_add' ya existe, por favor introduzca un grupo para la esa liga";
            print("<script>document.location.href='index.php?error=$error'</script>");
        }
    }
}

if (isset($_GET["id_liga_del"])) {
    $liga_id = $_GET["id_liga_del"];
    $condicion = "WHERE id=$liga_id";
    $liga->eliminar($condicion);
    $correcto = "Liga Eliminada correctamente";
    print("<script>document.location.href='index.php?correcto=$correcto'</script>");
}

// conseguido leer el array de los jugadores, esto iría en la
// parte de inscripción del equipo (Para verificar la inscripcion desde el correo).
// var_dump(unserialize($_GET['jugadores']));

require '../../../views/admin/ligas/index.view.php';
?>