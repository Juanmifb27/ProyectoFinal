<?php
session_start();

include_once 'admin/config.php';
include_once '../clases/conexion.php';
include_once '../clases/header.php';
include_once '../clases/seguridad.php';
include_once '../clases/functions.php';

$vectorUsuario = Seguridad();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once '../clases/email.php';

$conexion = new conexion();

if (isset($_GET['liga'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['aux']) && isset($_POST['nombreEquipo']) && isset($_POST['email']) && isset($_POST['liga']) && isset($_POST["nombre_jugadores"]) && isset($_POST["apellidos_jugadores"]) && isset($_POST["correos_jugadores"]) && isset($_POST['curso'])) {
    $exito = false;
    unset($_POST['aux']);
    $nombre_equipo = limpiarDatos($_POST['nombreEquipo']);
    $equipo_correo = $_POST['email'];
    $equipo_liga = $_POST['liga'];
    $imagen = $_FILES['escudo'];
    $nombre_imagen = $imagen['name'];
    $ruta_imagen = $imagen['tmp_name'];


    $datos_jugadores = ["nombre_jugadores" => $_POST["nombre_jugadores"], "apellido_jugadores" => $_POST["apellidos_jugadores"], "correos_jugadores" => $_POST["correos_jugadores"], "cursos_jugadores" => $_POST['curso']];

    // estructurando mejor a los jugadores
    for ($i = 0; $i < count($datos_jugadores["nombre_jugadores"]); $i++) {
        $datos_jugadores_res[] = ["nombre_jugador" => $datos_jugadores["nombre_jugadores"][$i], "apellido_jugador" => $datos_jugadores["apellido_jugadores"][$i], "correo_jugador" => $datos_jugadores['correos_jugadores'][$i], "curso_jugador" => $datos_jugadores["cursos_jugadores"][$i]];
    }
    $datosFormulario = array(
        "nombre_equipo" => $nombre_equipo,
        "equipo_correo" => $equipo_correo,
        "equipo_liga" => $equipo_liga,
        "jugadores" => $datos_jugadores_res
    );

    $datos_jugadores_filtrado = array_filter($datos_jugadores_res, function ($jugador) {
        return !empty($jugador['nombre_jugador']) && !empty($jugador['apellido_jugador']) && !empty($jugador['correo_jugador']) && !empty($jugador['curso_jugador']);
    });

    sort($datos_jugadores_filtrado);


    $datosFormularioJugadores = $datos_jugadores_filtrado;


    // require '../clases/vendor/autoload.php';

    // Crea la instancia, al pasarle true habilitamos las excepciones
    // $mail = new PHPMailer(true);
    // Asunto del Correo
    $asunto = "Nueva Inscripcion Liga Ruiz Gijon";
    // Cuerpo del Correo
    $cuerpo = "<h1>Nueva Inscripcion</h1>
            <p>Liga a Inscribirse: $equipo_liga</p>
            <p>Correo de Contacto: $equipo_correo</p>
            <p>Nombre del Equipo: $nombre_equipo</p>
            <h3>Jugadores:</h3>
            <hr>
            <table style='width:100%; max-width:1200px; border:1px solid black;' border=1>
                <thead>
                <tr>
                <th>Nombre</th>
                <th>Correo Contacto</th>
                <th>Curso</th>
                </tr>
                </thead>
                <tbody>
                <tr>
    ";
    // Cuerpo del correo: Tabla de los jugadores
    for ($i = 0; $i < count($datos_jugadores_res); $i++) {
        $cuerpo .= "<tr>";
        $cuerpo .= "<td>" . $datos_jugadores_res[$i]["apellido_jugador"] . "," . $datos_jugadores_res[$i]["nombre_jugador"] . "</td>";
        $cuerpo .= "<td>" . $datos_jugadores_res[$i]["correo_jugador"] . "</td>";
        $cuerpo .= "<td>" . $datos_jugadores_res[$i]["curso_jugador"] . "</td>";
        $cuerpo .= "</tr>";
    }
    $cuerpo .= "</tbody>
    </table>";
    $datos_jugadores_res = serialize($datos_jugadores_res);
    $datos_jugadores_res = urlencode($datos_jugadores_res);
    $cuerpo .= "<a href='" . RUTA . "/Controller/admin/equipos/add-equipo.php?nombre_equipo=" . $nombre_equipo . "&equipo_correo=" . $equipo_correo . "&liga_id=" .            $equipo_liga . "&jugadores=" . $datos_jugadores_res . "'>Ir a Inscribir el equipo</a>";

    $exito = email($correo_config['correo_administrador'], $correo_config['pass_correo'], $correo_config['nombre'], $correo_config['correo_administrador'], $equipo_correo, $asunto, $cuerpo, $ruta_imagen, $nombre_imagen);
}


require "../views/formulario.view.php";
?>