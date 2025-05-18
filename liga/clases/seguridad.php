<?php
 function CreacionClave()
{
	/* Asignamos el juego de caracteres al array $caracteres para generar la contraseña.
	Podemos añadir mas caracteres para hacer mas segura la contraseña.
	*/
	
	$password="";
	
	$minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $mayusculas = 'ABCDEFGHIJKLMNOPQRSTXYZ';
    $numeros = '0123456789';
    $carac_especiales = '@#$%&';
	
	/* Introduce la semilla del generador de numeros aleatorios mejorado */
	mt_srand(microtime() * 1000000);
	
	/* Genera un valor aleatorio mejorado con mt_rand, entre 0 y el tamaño del array
	$caracteres menos 1. Posteriormente vamos concatenando en la cadena $password
	los caracteres que se van eligiendo aleatoriamente.
	Vamos a generar la clave de grupo aleatoriamente, formada por 2 caracter y 4 numeros
	*/
	
	//Primer caracter debe de ser una letra y estar en minusculas
	$key = mt_rand(0,strlen($minusculas)-1);
	$password = $password . $minusculas[$key];
        
    $key = mt_rand(0,strlen($mayusculas)-1);
	$password = $password . $mayusculas[$key];
        
    $key = mt_rand(0,strlen($mayusculas)-1);
	$password = $password . $mayusculas[$key];
        
    $key = mt_rand(0,strlen($numeros)-1);
	$password = $password . $numeros[$key];
        
    $key = mt_rand(0,strlen($minusculas)-1);
	$password = $password . $minusculas[$key];
        
    $key = mt_rand(0,strlen($numeros)-1);
	$password = $password . $numeros[$key];
        
    $key = mt_rand(0,strlen($carac_especiales)-1);
	$password = $password . $carac_especiales[$key];
        
    $key = mt_rand(0,strlen($carac_especiales)-1);
	$password = $password . $carac_especiales[$key];
        
    $key = mt_rand(0,strlen($mayusculas)-1);
	$password = $password . $mayusculas[$key];
        
    $key = mt_rand(0,strlen($numeros)-1);
	$password = $password . $numeros[$key];
        
    $key = mt_rand(0,strlen($minusculas)-1);
	$password = $password . $minusculas[$key];
        
    $key = mt_rand(0,strlen($mayusculas)-1);
	$password = $password . $mayusculas[$key];
        
    $key = mt_rand(0,strlen($mayusculas)-1);
	$password = $password . $mayusculas[$key];
        
    $key = mt_rand(0,strlen($carac_especiales)-1);
	$password = $password . $carac_especiales[$key];
        
    $key = mt_rand(0,strlen($numeros)-1);
	$password = $password . $numeros[$key];
        
    $key = mt_rand(0,strlen($minusculas)-1);
	$password = $password . $minusculas[$key];
        

	return $password;
}

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