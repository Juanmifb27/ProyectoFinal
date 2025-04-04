<?php
 function comprobarSesionIniciadaAdministrador(){
    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != '' && ($_SESSION['rol'] == "Administrador General" || $_SESSION['rol'] == "Administrador de Liga")) {
        $vectorUsuario = array(
            "session_usuario" => $_SESSION['usuario'],
            "session_rol" => $_SESSION['rol'],
            "session_id" => $_SESSION['id'],
        );
        return $vectorUsuario;
    } else {
        return false;
    }

 }
 





?>