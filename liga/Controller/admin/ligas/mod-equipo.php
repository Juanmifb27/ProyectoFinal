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

$imprime_modal = "";
if (isset($_GET["equipo_id"])) {
    $equipo_id = $_GET["equipo_id"];
    $sql = "SELECT * FROM equipos WHERE id=$equipo_id";
    $resEquipo = $conexion->BD_Consulta($sql);
    $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
    if ($tuplaEquipo == NULL) {
        print("<script>document.location.href='./index.php'</script>");
    }
    $equipo_nombre = $tuplaEquipo["nombre_equipo"];
    $equipo_correo = $tuplaEquipo["equipo_correo"];
    $equipo_imagen = $tuplaEquipo["equipo_imagen"];
    $equipo_puntos = $tuplaEquipo["puntos"];
    $equipo_partidos_jugados = $tuplaEquipo["partidos_jugados"];
    $equipo_goles_a_favor = $tuplaEquipo["goles_a_favor"];
    $equipo_goles_en_contra = $tuplaEquipo["goles_en_contra"];
    $equipo_id_liga = $tuplaEquipo["id_liga"];

    $sql = "SELECT * FROM ligas where id=$equipo_id_liga";
    $resLiga = $conexion->BD_Consulta($sql);
    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
    $equipo_liga = $tuplaLiga["nombre_liga"];
}

// Eliminar Jugador
if(isset($_GET["id_jugador_del"])){
    $jugador_id = $_GET["id_jugador_del"];
    $condicion = " WHERE id=" . $jugador_id ."";
    $jugador->eliminar($condicion);
    $correcto = "Jugador Eliminado correctamente";
    print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&correcto=$correcto'</script>");
}

// Modificar Equipo
if (isset($_POST["aux_DatosEquipo"])) {
    $equipo_nombre = $_POST["equipo_nombre"];
    $equipo_correo = $_POST["equipo_correo"];
    $equipo_puntos = $_POST["equipo_puntos"];
    $equipo_imagen = $_POST["aux_Imagen"];
    $ruta = "../../../build/assets/img/equipos/". $equipo_imagen;
    $destino = "../../../build/assets/img/equipos/". $equipo_imagen;
    $equipo_partidos_jugados = $_POST["equipo_partidos_jugados"];
    $equipo_goles_a_favor = $_POST["equipo_goles_a_favor"];
    $equipo_goles_en_contra = $_POST["equipo_goles_en_contra"];
    if(isset($_POST["imagen_default"])){
        $equipo_imagen = "default.png";
        $ruta = "../../../build/assets/img/equipos/". $equipo_imagen;
        $destino = "../../../build/assets/img/equipos/". $equipo_imagen;
    }else {
         if(isset($_FILES['equipo_imagen'])){
            if($_FILES['equipo_imagen']['name'] != ""){
            $equipo_imagen = $_FILES['equipo_imagen']['name'];
            $ruta = $_FILES['equipo_imagen']['tmp_name'];
            $destino = "../../../build/assets/img/equipos/" . $_FILES['equipo_imagen']['name'];
            }
        }
    }

    $res = $equipo->modificar($equipo_nombre,$equipo_correo, $equipo_imagen, $equipo_puntos, $equipo_partidos_jugados, $equipo_goles_a_favor, $equipo_goles_en_contra, $equipo_id_liga, $equipo_id);
    $correcto = "Equipo Modificado correctamente";
    print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&correcto=$correcto'</script>");
}

// Añadir Jugador
if(isset($_POST["aux_nuevoJugador"])){
    $jugador_id_liga = $_POST["aux_nuevoJugador"];
    $jugador_nombre = $_POST["nombre_jugador"];
    $jugador_correo = $_POST["correo_jugador"];
    $jugador_curso = $_POST["curso_jugador"];
    $usuario_password = CreacionClave();

    $sqlComprobacion = "SELECT * FROM usuarios, jugadores WHERE jugadores.jugador_correo='$jugador_correo' AND usuarios.email='$jugador_correo'";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
    if($conexion->BD_NumeroFilas($resComprobacion) > 0){
        $error = "Ya existe un usuario con ese correo";
        print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&error=$error'</script>");
    }
    else{
        $jugador->insertar($jugador_nombre, $jugador_correo, $jugador_curso, $equipo_id, $jugador_id_liga);

        $sqlId = "SELECT * from jugadores WHERE jugador_correo='$jugador_correo'";
        $resId = $conexion->BD_Consulta($sqlId);
        $tuplaJugador = $conexion->BD_GetTupla($resId);

        $usuario->insertar($jugador_correo, $usuario_password, 'Usuario', $tuplaJugador['id'], $jugador_id_liga, $equipo_id);
        $correcto = "Jugador y usuario añadido correctamente";
              print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&correcto=$correcto'</script>");
    }
}

// Modificar Jugador
if(isset($_POST["aux_modJugador"])){
    $jugador_id = $_POST["aux_modJugador"];
    $jugador_nombre = $_POST["nombre_jugador"];
    $usuario_email = $_POST["email_jugador"];
    $jugador_curso = $_POST["jugador_curso"];
    $liga_id = $_POST["aux_modJugador_liga"];

    $sqlComprobacion = "SELECT * FROM usuarios WHERE email='$usuario_email' and id_jugador!=$jugador_id";
    $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
    if($conexion->BD_NumeroFilas($resComprobacion) > 0){
        $error = "Ya existe un usuario con ese correo";
        print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&error=$error'</script>");
    }else{
        $jugador->modificar($jugador_nombre, $usuario_email, $jugador_curso, $equipo_id, $liga_id, $jugador_id);
        $correcto = "Jugador Modificado correctamente";
        print("<script>document.location.href='mod-equipo.php?equipo_id=$equipo_id&correcto=$correcto'</script>");
    }
}

require '../../../views/admin/ligas/mod-equipo.view.php';
?>