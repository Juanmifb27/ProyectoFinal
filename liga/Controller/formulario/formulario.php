<?php
session_start();

include_once '../admin/config.php';
include_once '../../clases/conexion.php';
include_once '../../clases/header.php';
include_once '../../clases/seguridad.php';
include_once '../../clases/functions.php';

$vectorUsuario = Seguridad();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$conexion = new conexion();




if (isset($_POST['aux']) && isset($_POST['nombreEquipo']) && isset($_POST['email']) && isset($_POST['liga']) && isset($_POST["nombre_jugadores"]) && isset($_POST["apellidos_jugadores"]) && isset($_POST["correos_jugadores"]) && isset($_POST['curso'])) {
    $exito = false;
    unset($_POST['aux']);
    $nombre_equipo = limpiarDatos($_POST['nombreEquipo']);
    $equipo_correo = $_POST['email'];
    $equipo_liga = $_POST['liga'];
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


    require '../../clases/vendor/autoload.php';

    // Crea la instancia, al pasarle true habilitamos las excepciones
    $mail = new PHPMailer(true);
    // Asunto del Correo
    $asunto = "Nueva Inscripcion Liga Ruiz Gijon";
    // Cuerpo del Correo
    $cuerpo = "<h1>Nueva Inscripcion</h1>
            <p>ID Liga a Inscribirse: $equipo_liga</p>
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
    $cuerpo .= "<a href='" . RUTA . "/admin/index.php?nombre_equipo=" . $nombre_equipo . "&equipo_correo=" . $equipo_correo . "&equipo_liga=" . $equipo_liga . "&jugadores=" . $datos_jugadores_res . "'>Ir a Inscribir el equipo</a>";


    try {
        //Configuracion del servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $correo_config['correo_administrador'];                     //SMTP username
        $mail->Password   = $correo_config['pass_correo'];                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        // El nombre que va a salir que le ha mandado el correo (solo funciona el primer parametro con el asignado a $mail->Username) y el nombre que saldrá que se lo ha enviado)
        $mail->setFrom($equipo_correo, $correo_config['nombre']);
        // Direccion a la que se va a mandar el correo, 
        $mail->addAddress($correo_config['correo_administrador']);     //Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = $cuerpo;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


        //Se envia el mensaje, si no hay problemas la variable $exito será true
        $exito = $mail->send();


        // Si el mensaje no ha podido ser enviado, se realizarán 4 intentos más como mucho
        //para intentar enviar el mensaje, cada intento se hará 5 segundos despues del anterops
        // usamos la funcion sleep para eso

        $intentos = 1;

        while ((!$exito) && ($intentos < 5)) {
            sleep(5);
            $exito = $mail->send();
            $intentos++;
        }

        if ($exito) {
            $exito = true;
        } else {
            $exito = false;
        }
    } catch (Exception $e) {
        $exito = false;
    }
}


require "../../views/formulario.view.php";
