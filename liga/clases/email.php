<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function email($Host, $pass, $HostName, $Direccionmail, $from, $asunto, $cuerpo, $ruta_imagen="", $nombre_imagen=""){


include_once  $_SERVER['DOCUMENT_ROOT'] .'/clases/conexion.php';
include_once  $_SERVER['DOCUMENT_ROOT'] . '/Controller/admin/config.php';
include_once  $_SERVER['DOCUMENT_ROOT'] . '/clases/vendor/autoload.php';

    $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $Host;                     //SMTP username
        $mail->Password   = $pass;                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        // El nombre que va a salir que le ha mandado el correo (solo funciona el primer parametro con el asignado a $mail->Username) y el nombre que saldrá que se lo ha enviado)
        $mail->setFrom($from, $HostName);
        // Direccion a la que se va a mandar el correo, 
        $mail->addAddress($Direccionmail);     //Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        if(trim($ruta_imagen) !=""){
        $mail->addAttachment($ruta_imagen, $nombre_imagen);
        }
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
        //para intentar enviar el mensaje, cada intento se hará 5 segundos despues del anterior
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
        return $exito;
}

?>