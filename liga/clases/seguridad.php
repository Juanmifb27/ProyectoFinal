<?php

function Seguridad()
{
    if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['email'] != "" && $_SESSION['password']!="")  {
        $vector_return = BuscarUsuario();

        if ($vector_return == NULL) {
            echo "<script type='text/javascript'>alert('El Usuario o la contraseña no son correctos.');</script>";
        }else{
            return $vector_return;
        }
    }else{
    }
}

function BuscarUsuario()
{
    $conexion = new conexion();
    $vector_return = NULL;

    $sql = "SELECT * FROM usuarios where email='" . $_SESSION['email'] . "' AND password='" . $_SESSION['password'] . "'";
    $res = $conexion->BD_Consulta($sql);
    $vector_return = $conexion->BD_GetTupla($res);

    return $vector_return;
}

function comprobarSesionIniciadaAdministrador(){
    $vector_return = Seguridad();

    if ($vector_return == NULL) {
        print("<script>document.location.href='" . RUTA ."index.php';</script>");
    }elseif ($vector_return["rol"] == "Usuario") {
        print("<script>document.location.href='" . RUTA ."index.php';</script>");
    }else{
        return $vector_return;
    }

}